<?php

namespace MohsinCrud\Crud;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load Routes from the package
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // Load Views from the package
        $this->loadViewsFrom(__DIR__ . '/views', 'crud');

        // Load Migrations from the package
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        // Publish views to the user's project
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/mohsincrud'),
        ], 'views');

        // Publish migrations to the user's project
        $this->publishes([
            __DIR__ . '/database/migrations' => database_path('migrations'),
        ], 'migrations');

        // Publish config (if you add configuration file later)
        $this->publishes([
            __DIR__ . '/config/crud.php' => config_path('crud.php'),
        ], 'config');
    }

    public function register()
    {
        // Register any bindings or services if needed
    }
}
