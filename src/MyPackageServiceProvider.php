<?php

namespace :uc:vendor\:uc:package;

use Illuminate\Support\ServiceProvider;

class :uc:packageServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/courier.php' => config_path('courier.php'),
        ], ':lc:package.config');

        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', ':lc:vendor');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', ':lc:vendor');
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/:lc:package.php', ':lc:package');

        // Register the service the package provides.
        $this->app->singleton(':lc:package', function ($app) {
            return new :uc:package;
        });
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing migrations
        // $this->publishesMigrations([
        //     __DIR__.'/../database/migrations' => database_path('migrations'),
        // ], ':lc:package.migrations');

        // Publishing the views.
        // $this->publishes([
        //     __DIR__.'/../resources/views' => base_path('resources/views/vendor/:lc:vendor'),
        // ], ':lc:package.views');

        // Publishing assets.
        // $this->publishes([
        //     __DIR__.'/../resources/assets' => public_path('vendor/:lc:vendor'),
        // ], ':lc:package.assets');

        // Publishing the translation files.
        // $this->publishes([
        //     __DIR__.'/../resources/lang' => resource_path('lang/vendor/:lc:vendor'),
        // ], ':lc:package.lang');

        // Registering package commands.
        // $this->commands([]);
    }
}
