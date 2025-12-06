<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PortfolioController;

// Public home page (for normal users)
Route::get('/', function () {
    // this must match resources/views/index.blade.php
    return view('index');
})->name('home');

// Auth routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin routes (only for logged-in users)
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    // admin dashboard view: resources/views/admin/dashboard.blade.php
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // CRUD for portfolio
    Route::resource('portfolio', PortfolioController::class)->except(['show']);
});
