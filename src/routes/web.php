<?php

use Illuminate\Support\Facades\Route;
use MohsinCrud\Crud\Http\Controllers\StudentController;

Route::controller(StudentController::class)
    ->prefix('student/')
    ->name('student.')
    ->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
