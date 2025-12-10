<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Models\Portfolio; // 👈 add this

// PUBLIC HOME – show portfolio with projects from DB
Route::get('/', function () {
    // fetch all projects for the "Latest Projects" section
    $projects = Portfolio::orderBy('sort_order')->get();

    // resources/views/portfolio.blade.php
    return view('portfolio', compact('projects'));
})->name('home');


// AUTH ROUTES
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login.form');
})->name('logout');


// ADMIN ROUTES
Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // /admin/portfolio → PortfolioController@index, create, store, etc.
        Route::resource('portfolio', PortfolioController::class)->except(['show']);

        // Optional extra route if you still use /admin/manage
        Route::get('/manage', [PortfolioController::class, 'index'])
            ->name('manage');
    });
