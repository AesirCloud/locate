<?php

namespace AesirCloud\Locate;

use Illuminate\Support\ServiceProvider;

class LocateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('locator', function ($app) {
            return new LocatorManager($app);
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/locator.php' => config_path('locator.php'),
        ]);
    }
}