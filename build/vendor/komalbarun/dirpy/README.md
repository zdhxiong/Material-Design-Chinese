## DirPy
--------
 Recursively scan directories

## Installation
----------------
 composer require komalbarun\dirpy

## Dependencies
----------------
 * komalbarun\StrPy
 * php >= 7.0

## Usage
---------
```php
<?php

require_once './vendor/autoload.php';

$scanner = new Komalbarun\DirPy();
$ignore_folders = ['directroy_name1', 'directroy_name2'];
$path = 'path/to/directory';

$scanned = $scanner->list_dir($path, $ignore_folders);

echo '<pre>';
// All paths
print_r($scanned);

// Folder paths only;
print_r($scanned->dirs);

// Files Only;
print_r($scanned->files);
```
