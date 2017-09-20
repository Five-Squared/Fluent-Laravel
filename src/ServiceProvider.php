<?php

namespace Fluent\Laravel;

use Fluent;
use Illuminate\Support;
use Illuminate\Foundation\Application as LaravelApplication;

/**
 * Fluent service provider
 */
class ServiceProvider extends Support\ServiceProvider
{
    const VERSION = '3.2.0';

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;
    
    /**
     * Bootstrap the configuration
     *
     * @return void
     */
    public function boot()
    {
        /* Path to default config file */
        $this->publishes([
            dirname(__DIR__) . '/config/fluent.php' => config_path('fluent.php')
        ]);

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/config/fluent.php', 'fluent'
        );

        $this->app->singleton('fluent', function ($app) {
            $config = $app->make('config')->get('fluent');
            return new Factory($config);
        });

        $this->app->alias('fluent', 'Fluent');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['fluent'];
    }
}