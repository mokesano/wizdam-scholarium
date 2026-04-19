#!/usr/bin/env python3
"""
Script lengkap untuk update semua import statements:
- lib.pkp.classes.* -> core.classes.*
- lib.pkp.controllers.* -> core.controllers.*
- lib.pkp.pages.* -> core.pages.*
- lib.pkp.plugins.* -> core.plugins.*
- lib.pkp.templates.* -> core.templates.*
- lib.pkp.locale.* -> core.locale.*
- lib.pkp.lib.* -> core.lib.* (third-party libs)
- lib.pkp.includes.* -> core.includes.*
- classes.* -> app.classes.*
- controllers.* -> app.controllers.*
- pages.* -> app.pages.*
- plugins.* -> app.plugins.*
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
        
        # Urutan pattern penting - yang lebih spesifik dulu
        patterns = [
            # === PKP CORE PATHS ===
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
            
            # Core includes
            (r"import\(['\"]lib\.pkp\.includes\.([^'\"]+)['\"]\)", r"import('core.includes.\1')"),
            
            # Core lib (third-party libraries seperti recaptcha)
            (r"import\(['\"]lib\.pkp\.lib\.([^'\"]+)['\"]\)", r"import('core.lib.\1')"),
            
            # === OJS APPLICATION PATHS ===
            # OJS-specific classes (hanya jika bukan bagian dari lib.pkp)
            (r"(?<![a-zA-Z0-9_\.])import\(['\"]classes\.([^'\"]+)['\"]\)", r"import('app.classes.\1')"),
            
            # OJS-specific controllers
            (r"(?<![a-zA-Z0-9_\.])import\(['\"]controllers\.([^'\"]+)['\"]\)", r"import('app.controllers.\1')"),
            
            # OJS-specific pages
            (r"(?<![a-zA-Z0-9_\.])import\(['\"]pages\.([^'\"]+)['\"]\)", r"import('app.pages.\1')"),
            
            # OJS-specific plugins
            (r"(?<![a-zA-Z0-9_\.])import\(['\"]plugins\.([^'\"]+)['\"]\)", r"import('app.plugins.\1')"),
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
    
    # Proses SEMUA direktori kecuali vendor dan node_modules
    dirs_to_skip = {'vendor', 'node_modules', '.git'}
    
    updated_count = 0
    processed_count = 0
    error_count = 0
    
    # Proses semua file PHP di workspace
    for filepath in workspace.rglob('*.inc.php'):
        # Skip directories yang tidak perlu
        if any(skip in str(filepath) for skip in dirs_to_skip):
            continue
        # Skip library pihak ketiga murni (kecuali yang kita proses)
        if '/lib/password_compat/' in str(filepath):
            continue
            
        processed_count += 1
        try:
            if update_imports_in_file(filepath):
                updated_count += 1
                print(f"Updated: {filepath.relative_to(workspace)}")
        except Exception as e:
            error_count += 1
            print(f"Error: {filepath} - {e}")
    
    for filepath in workspace.rglob('*.php'):
        # Skip directories yang tidak perlu
        if any(skip in str(filepath) for skip in dirs_to_skip):
            continue
        # Skip library pihak ketiga murni
        if '/lib/password_compat/' in str(filepath):
            continue
        # Skip file lessphp yang punya method import sendiri
        if 'lessphp/lessc.inc.php' in str(filepath):
            continue
            
        processed_count += 1
        try:
            if update_imports_in_file(filepath):
                updated_count += 1
                print(f"Updated: {filepath.relative_to(workspace)}")
        except Exception as e:
            error_count += 1
            print(f"Error: {filepath} - {e}")
    
    print(f"\n=== Summary ===")
    print(f"Processed: {processed_count} files")
    print(f"Updated: {updated_count} files")
    print(f"Errors: {error_count} files")

if __name__ == '__main__':
    main()
