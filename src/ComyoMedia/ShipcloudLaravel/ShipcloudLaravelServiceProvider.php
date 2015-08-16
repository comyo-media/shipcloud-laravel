<?php namespace ComyoMedia\ShipcloudLaravel;

use Illuminate\Support\ServiceProvider;

class ShipcloudLaravelServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config.php' => config_path('shipcloud.php')
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('shipcloud', function ($app) {
            $config = isset($app['config']['services']['shipcloud']) ? $app['config']['services']['shipcloud'] : null;
            if (is_null($config)) {
                $config = $app['config']['shipcloud'] ?: $app['config']['shipcloud::config'];
            }

            $client = new \ComyoMedia\Shipcloud\Shipcloud($config['api_key']);

            return $client;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['shipcloud'];
    }
}