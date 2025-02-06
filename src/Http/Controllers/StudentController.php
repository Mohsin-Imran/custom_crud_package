<?php

namespace MohsinCrud\Crud;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load Routes from the package (adjusting path as per the new directory structure)
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Load Views from the package (adjusting path as per the new directory structure)
        $this->loadViewsFrom(__DIR__ . '/../views', 'crud');

        // Load Migrations from the package (adjusting path as per the new directory structure)
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        // Publish views to the user's project
        $this->publishes([
            __DIR__ . '/../views' => resource_path('views/vendor/mohsincrud'),
        ], 'views');

        // Publish migrations to the user's project
        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ], 'migrations');
    }
    public function register()
    {
        // Register any bindings or services if needed
    }
}
