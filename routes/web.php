<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

route::get('/' , function() {
   return view('welcome');
});

// Route untuk login & register (hanya untuk guest)
Route::middleware(['auth.redirect'])->group(function () {
    // Login
    Route::get('login', [LoginController::class, 'index'])->name('login-page');
    Route::post('login', [LoginController::class, 'login'])->name('login.proses');

    // Register
    Route::get('register', [RegisterController::class, 'index'])->name('register-page');
    Route::post('register', [RegisterController::class, 'store'])->name('regis.proses');
});

Route::middleware([ 'auth.redirect'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('logout' , [DashboardController::class , 'logout'])->name('logout');
    Route::get('create' , [DashboardController::class , 'create'])->name('create');
    Route::post('create' , [DashboardController::class , 'store'])->name('store');
});

