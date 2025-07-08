<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;



Route::controller(App\Http\Controllers\HomeController::class)
    ->group(function () {
        Route::get('/', 'landing_page')->name('landing_page');
    });

Route::controller(App\Http\Controllers\AuthController::class)
    ->group(function () {
        Route::get('/login', 'login');
        Route::get('/register', 'register');

    });

Route::controller(App\Http\Controllers\DashboardController::class)
    ->group(function () {
        Route::get('/dashboard', 'dashboard');
    });
