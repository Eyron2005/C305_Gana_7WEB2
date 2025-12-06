<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PortfolioController;

/*
|--------------------------------------------------------------------------
| Public Website
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('portfolio'); // resources/views/portfolio.blade.php
})->name('home');


/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| Admin Panel (Requires Login)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard page
        Route::get('/dashboard', function () {
            return view('admin.dashboard'); 
        })->name('dashboard');

        // Portfolio CRUD (/admin/portfolio)
        Route::resource('portfolio', PortfolioController::class)->except(['show']);

        // Optional alias — now /admin/manage works!
        Route::get('/manage', [PortfolioController::class, 'index'])
            ->name('manage'); // route('admin.manage')

        Route::resource('portfolio', PortfolioController::class)->except(['show']);

    });
