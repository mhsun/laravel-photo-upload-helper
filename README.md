# Photo Upload Helper for Laravel

This is a helper function that will help to upload a photo in Laravel. It will also help you to remove the previously uploaded file in case of an update or delete.

## Installation

Add this file anywhere you like to place. You may want to put it in `app/helper.php` directory in a Laravel project. Then hit the command below to discover the file by the ``composer``(dependency manager).

```bash
composer dump-autoload
```

## Usage

```php
// only for upload
if ($request->hasFile('image')) {
   $newFileName = uploadPhoto($request->file('image'), 'path/to/upload');
}

// upload with removing previous file (update or delete)
if ($request->hasFile('image')) {
   $newFileName = uploadPhoto($request->file('image'), 'path/to/upload', 'existing/path');
}
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update the tests as appropriate.
