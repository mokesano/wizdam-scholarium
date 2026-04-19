#!/usr/bin/env python3
"""
Script untuk memperbaiki sisa import statements yang masih menggunakan pattern lama.
Pattern dengan spasi: import ('lib.pkp...') atau import('lib.pkp...')
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
        
        # Pattern dengan variasi spasi
        patterns = [
            # Core classes (dengan variasi spasi)
            (r"import\s*\(\s*['\"]lib\.pkp\.classes\.([^'\"]+)['\"]\s*\)", r"import('core.classes.\1')"),
            
            # Core controllers  
            (r"import\s*\(\s*['\"]lib\.pkp\.controllers\.([^'\"]+)['\"]\s*\)", r"import('core.controllers.\1')"),
            
            # Core pages
            (r"import\s*\(\s*['\"]lib\.pkp\.pages\.([^'\"]+)['\"]\s*\)", r"import('core.pages.\1')"),
            
            # Core plugins
            (r"import\s*\(\s*['\"]lib\.pkp\.plugins\.([^'\"]+)['\"]\s*\)", r"import('core.plugins.\1')"),
            
            # Core templates
            (r"import\s*\(\s*['\"]lib\.pkp\.templates\.([^'\"]+)['\"]\s*\)", r"import('core.templates.\1')"),
            
            # Core locale
            (r"import\s*\(\s*['\"]lib\.pkp\.locale\.([^'\"]+)['\"]\s*\)", r"import('core.locale.\1')"),
            
            # Core includes
            (r"import\s*\(\s*['\"]lib\.pkp\.includes\.([^'\"]+)['\"]\s*\)", r"import('core.includes.\1')"),
            
            # Core lib (third-party libraries)
            (r"import\s*\(\s*['\"]lib\.pkp\.lib\.([^'\"]+)['\"]\s*\)", r"import('core.lib.\1')"),
            
            # Dynamic imports dalam string concatenation
            (r"import\s*\(\s*['\"]lib\.pkp\.classes\.validation\.\$\{?[^}]+\}?['\"]\s*\)", 
             lambda m: m.group(0).replace('lib.pkp.classes', 'core.classes')),
        ]
        
        for pattern, replacement in patterns:
            if callable(replacement):
                content = re.sub(pattern, replacement, content)
            else:
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
    
    dirs_to_skip = {'vendor', 'node_modules', '.git'}
    
    updated_count = 0
    processed_count = 0
    
    # Proses semua file PHP di workspace
    for filepath in workspace.rglob('*.inc.php'):
        if any(skip in str(filepath) for skip in dirs_to_skip):
            continue
        if '/lib/password_compat/' in str(filepath):
            continue
            
        processed_count += 1
        if update_imports_in_file(filepath):
            updated_count += 1
            print(f"Updated: {filepath.relative_to(workspace)}")
    
    for filepath in workspace.rglob('*.php'):
        if any(skip in str(filepath) for skip in dirs_to_skip):
            continue
        if '/lib/password_compat/' in str(filepath):
            continue
        if 'lessphp/lessc.inc.php' in str(filepath):
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
