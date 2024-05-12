<?php

namespace SkyBodrik\Gswag\Providers;

use Illuminate\Support\ServiceProvider;
use SkyBodrik\Gswag\GswagService;

class GswagProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('gswag.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'gswag');

        $config = config('gswag');

        // Register the main class to use with the facade
        $this->app->singleton(GswagService::class, function () use ($config) {
            return new GswagService($config);
        });
    }

}