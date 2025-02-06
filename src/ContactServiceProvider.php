<?php

namespace MohsinCrud\Crud;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'crud');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    
        // Publish views
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/mohsincrud'),
        ], 'views'); 
    }

    public function register()
    {
        // Register any bindings or services here
    }
}