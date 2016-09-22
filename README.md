# Laravel Error Views

Add provider to app.php
```php
Wit\Errorview\ErrorviewServiceProvider::class,
```

Publish views
```sh
$ php artisan vendor:publish  --provider="Signchef\Errorview\ErrorviewServiceProvider" --tag=views
```
