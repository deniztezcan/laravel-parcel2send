<?php

namespace DenizTezcan\Parcel2Send;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class Parcel2SendServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/parcel2send.php' => config_path('parcel2send.php'),
        ]);
    }

    public function register()
    {
        $this->app->bind('parcel2send', function () {
            return new Parcel2Send();
        });
    }

    public function provides()
    {
        return ['parcel2send'];
    }
}