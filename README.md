# Get a visitors Geolocation using their IP address

`locate` is a Laravel package that provides a simple way to get a visitors Geolocation using their IP address.

---

<p align="center">
<a href="https://github.com/aesircloud/locate/actions" target="_blank"><img src="https://img.shields.io/github/actions/workflow/status/aesircloud/locate/test.yml?branch=main&style=flat-square"/></a>
<a href="https://packagist.org/packages/aesircloud/locate" target="_blank"><img src="https://img.shields.io/packagist/v/aesircloud/locate.svg?style=flat-square"/></a>
<a href="https://packagist.org/packages/aesircloud/locate" target="_blank"><img src="https://img.shields.io/packagist/dt/aesircloud/locate.svg?style=flat-square"/></a>
<a href="https://packagist.org/packages/aesircloud/locate" target="_blank"><img src="https://img.shields.io/packagist/l/aesircloud/locate.svg?style=flat-square"/></a>
</p>

## Installation

You can install the package via composer:

```bash
composer require aesircloud/locate
```

## Publish the configuration file
```bash
php artisan vendor:publish --provider="AesirCloud\Locate\LocateServiceProvider"
```

## Usage


```php
use AesirCloud\Locate\Facades\Locator;

$location = Locator::locate('8.8.8.8');
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Security

If you've found a bug regarding security please mail [security@aesircloud.com](mailto:security@aesircloud.com) instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.