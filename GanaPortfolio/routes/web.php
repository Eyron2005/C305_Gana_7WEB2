<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('login', [AuthController::class, 'login'])->name('login');
