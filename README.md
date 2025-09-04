# FreePBX Module Starter

A simple template for creating FreePBX modules.

## Features

- Ready-to-use boilerplate code
- Compatible with FreePBX 15+
- Includes basic module structure

## Getting Started

1. Clone or download this template
2. **Important**: Rename the module folder to match your desired module name
3. Update `module.xml`:
   - Change `<rawname>yourmodule</rawname>` to your module name
   - Update `<name>Your Module Name</name>` to your display name
   - Modify other details like publisher, version, etc.
4. Replace all instances of "yourmodule" throughout the codebase with your actual module name
5. Customize the module files for your specific needs
6. Install in your FreePBX system

**Note**: The module folder name must match the `rawname` value in `module.xml` for proper installation.

## Files Included

- `module.xml` - Module configuration
- `Starter.class.php` - Main module class
- `functions.inc.php` - Helper functions
- `install.php` - Installation script
- `page.yourmodule.php` - Web interface
- `views/hello.php` - Sample view