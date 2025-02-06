<?php

namespace MohsinCrud\Crud;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'create');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(
            __DIR__ . '/config/contact.php',
            'contact'
        );

        // Publish configuration file
        $this->publishes([
            __DIR__ . '/config/contact.php' => config_path('contact.php')
        ], 'config');

        // Publish views
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/mohsin-crud'),
        ], 'views');
    }

    public function register()
    {
        // Register any bindings or services here
    }
}