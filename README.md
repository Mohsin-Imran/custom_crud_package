# mohsincrud/crud

[![Latest Stable Version](https://poser.pugx.org/mohsincrud/crud/v/stable)](https://packagist.org/packages/mohsincrud/crud)
[![Total Downloads](https://poser.pugx.org/mohsincrud/crud/downloads)](https://packagist.org/packages/mohsincrud/crud)
[![License](https://poser.pugx.org/mohsincrud/crud/license)](https://packagist.org/packages/mohsincrud/crud)

A custom CRUD package for Laravel to simplify creating, reading, updating, and deleting resources.

## Installation

composer.json:

```bash
 "config": {
        "optimize-autoloader": true,
        "preferred-install": "dist",
        "sort-packages": true,
        "allow-plugins": {
            "pestphp/pest-plugin": true,
            "php-http/discovery": true
        }
    },
    "minimum-stability": "stable",
    "prefer-stable": true
```


You can install the package via composer:

```bash
composer require mohsincrud/crud
```


If you are using Laravel 5.5 or higher, the package will automatically register the service provider. For older versions of Laravel, you need to manually add the service provider in config/app.php

```bash
'providers' => [
    // Other Service Providers

    Mohsin\Crud\ContactServiceProvider::class,
],
```

Database Migration

After installing the package and adding the service provider, create the database tables by running the migrations

```bash
php artisan migrate
```

Accessing the CRUD Interface

You can access the CRUD interface at the following URL:

```bash
http://localhost:8000/student/index
```
