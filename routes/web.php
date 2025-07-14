<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//login
route::get('login' , [LoginController::class  , 'index'] )->name('login-page');
route::post('login' , [LoginController::class , 'login'])->name('login.proses');
//register
route::get('register' , [RegisterController::class , 'index'])->name('register-page');
route::post('register'   , [RegisterController::class , 'store'])->name('regis.proses');

//dashboard
route::get('dashboard' , [DashboardController::class , 'index'])->name('dashboard');
