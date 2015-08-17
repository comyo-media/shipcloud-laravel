# shipcloud-laravel

An easy-to-use PHP package to communicate with [shipcloud's API](http://developers.shipcloud.io) & Laravel 5+.

### Installation

1. Install the `comyo-media/shipcloud-laravel` package

```shell
$ composer require comyo-media/shipcloud-laravel
```

2. Update `config/app.php` to activate shipcloud

```php
# Add `ShipcloudLaravelServiceProvider` to the `providers` array
'providers' => array(
  ...
  ComyoMedia\ShipcloudLaravel\ShipcloudLaravelServiceProvider::class,
)

# Add the `ShipcloudFacade` to the `aliases` array
'aliases' => array(
  ...
  'Shipcloud' => ComyoMedia\ShipcloudLaravel\ShipcloudFacade::class,
)
```

3. Create the configuration file `config/shipcloud.php`:

```shell
$ php artisan vendor:publish
```

4. Configure your `api_key` in your `.env` file:

```shell
SHIPCLOUD_API_KEY=YOUR-API-KEY-HERE
```

Reporting Bugs or Feature Requests
----------------------------------

Please report any bugs or feature requests on the github issues page for this
project here:

<https://github.com/comyo-media/shipcloud-laravel/issues>
