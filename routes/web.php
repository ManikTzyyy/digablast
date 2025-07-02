<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::controller(App\Http\Controllers\HomeController::class)
    ->group(function () {
        Route::get('/', 'landing_page')->name('landing_page');
    });

Route::controller(AuthController::class)
    ->group(function () {
        Route::get('/login', 'login');
        Route::get('/register', 'register');
    });


Volt::route('/counter', 'counter');
