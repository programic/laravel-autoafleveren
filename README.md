# Programic - Laravel AutoAfleveren

[![Latest Version on Packagist](https://img.shields.io/packagist/v/programic/laravel-autoafleveren.svg?style=flat-square)](https://packagist.org/packages/programic/laravel-autoafleveren)
[![Tests](https://github.com/programic/laravel-autoafleveren/actions/workflows/tests.yml/badge.svg?branch=main)](https://github.com/programic/laravel-autoafleveren/actions/workflows/tests.yml)
![](https://github.com/programic/laravel-autoafleveren/workflows/Run%20Tests/badge.svg?branch=main)
[![Total Downloads](https://img.shields.io/packagist/dt/programic/laravel-autoafleveren.svg?style=flat-square)](https://packagist.org/packages/programic/laravel-autoafleveren)

A Laravel API wrapper for AutoAfleveren API

## Installation
This package requires PHP 8.2 and Laravel 10 or higher.

```
composer require programic/laravel-autoafleveren
```

Add AutoAfleveren credentials to your services config and .env:
```php
'autoAfleveren' => [
    'baseUrl' => env('AUTO_AFLEVEREN_BASE_URL'),
    'apiKey' => env('AUTO_AFLEVEREN_API_TOKEN'),
],
```

## Usage

### Retrieve client
#### Get client from IoC
```php
$autoAfleveren = app(Programic\AutoAfleveren\AutoAfleveren::class);
```
#### By Dependency Injecten
```php
use Programic\AutoAfleveren\AutoAfleveren;

class UserController extends Controller {
    public function __invoke(AutoAfleveren $client)
    {
        //
    }
}
```

### Using client

#### Default requests
```php
$autoAfleveren->get('/users');
$autoAfleveren->post('/users', []);
$autoAfleveren->patch('/users/1', []);
$autoAfleveren->delete('/users/1', []);
```
#### Reference requests
```php
$user = $autoAfleveren->users()->find(1);
$user = $autoAfleveren->users()->create([]);
$user = $autoAfleveren->users()->update(1, []);
$user = $autoAfleveren->users()->delete(1);
```
There are more references available. The IDE will autocomplete the available references.

## Testing
```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security-related issues, please email [info@programic.com](mailto:info@programic.com) instead of using the issue tracker.

## Credits

- [Rick Bongers](https://github.com/rbongers)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
