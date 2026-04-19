#!/usr/bin/env python3
"""
Script untuk update import statements sesuai struktur direktori baru:
- lib.pkp.classes.* -> core.classes.*
- classes.* (OJS-specific) -> app.classes.*
"""

import os
import re
from pathlib import Path

def update_imports_in_file(filepath):
    """Update import statements dalam sebuah file."""
    try:
        with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
            content = f.read()
        
        original_content = content
        
        # Pattern 1: import('lib.pkp.classes.X') -> import('core.classes.X')
        # Handle berbagai variasi path di lib/pkp/
        patterns = [
            # Core classes
            (r"import\(['\"]lib\.pkp\.classes\.([^'\"]+)['\"]\)", r"import('core.classes.\1')"),
            
            # Core controllers  
            (r"import\(['\"]lib\.pkp\.controllers\.([^'\"]+)['\"]\)", r"import('core.controllers.\1')"),
            
            # Core pages
            (r"import\(['\"]lib\.pkp\.pages\.([^'\"]+)['\"]\)", r"import('core.pages.\1')"),
            
            # Core plugins
            (r"import\(['\"]lib\.pkp\.plugins\.([^'\"]+)['\"]\)", r"import('core.plugins.\1')"),
            
            # Core templates
            (r"import\(['\"]lib\.pkp\.templates\.([^'\"]+)['\"]\)", r"import('core.templates.\1')"),
            
            # Core locale
            (r"import\(['\"]lib\.pkp\.locale\.([^'\"]+)['\"]\)", r"import('core.locale.\1')"),
            
            # OJS-specific classes (hanya jika dimulai dengan 'classes.' bukan 'lib.pkp.classes.')
            # Ini harus dilakukan setelah lib.pkp.classes sudah di-replace
            (r"(?<!lib\.pkp\.)import\(['\"]classes\.([^'\"]+)['\"]\)", r"import('app.classes.\1')"),
            
            # OJS-specific controllers
            (r"(?<!lib\.pkp\.)import\(['\"]controllers\.([^'\"]+)['\"]\)", r"import('app.controllers.\1')"),
            
            # OJS-specific pages
            (r"(?<!lib\.pkp\.)import\(['\"]pages\.([^'\"]+)['\"]\)", r"import('app.pages.\1')"),
            
            # OJS-specific plugins
            (r"(?<!lib\.pkp\.)import\(['\"]plugins\.([^'\"]+)['\"]\)", r"import('app.plugins.\1')"),
        ]
        
        for pattern, replacement in patterns:
            content = re.sub(pattern, replacement, content)
        
        # Hanya write jika ada perubahan
        if content != original_content:
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(content)
            return True
        
        return False
    
    except Exception as e:
        print(f"Error processing {filepath}: {e}")
        return False

def main():
    workspace = Path('/workspace')
    
    # Direktori yang akan diproses
    dirs_to_process = [
        workspace / 'app',
        workspace / 'core',
        workspace / 'plugins',  # plugins lama yang belum dipindah
        workspace / 'pages',   # pages lama yang belum dipindah
        workspace / 'controllers', # controllers lama
    ]
    
    updated_count = 0
    processed_count = 0
    
    for base_dir in dirs_to_process:
        if not base_dir.exists():
            continue
            
        for filepath in base_dir.rglob('*.inc.php'):
            processed_count += 1
            if update_imports_in_file(filepath):
                updated_count += 1
                print(f"Updated: {filepath.relative_to(workspace)}")
        
        for filepath in base_dir.rglob('*.php'):
            # Skip vendor directories
            if 'vendor' in str(filepath) or 'node_modules' in str(filepath):
                continue
            processed_count += 1
            if update_imports_in_file(filepath):
                updated_count += 1
                print(f"Updated: {filepath.relative_to(workspace)}")
    
    print(f"\n=== Summary ===")
    print(f"Processed: {processed_count} files")
    print(f"Updated: {updated_count} files")

if __name__ == '__main__':
    main()
