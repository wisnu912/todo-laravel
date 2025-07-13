<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//login
route::get('login' , [LoginController::class  , 'index'] )->name('login-page');
//register
route::get('register' , [RegisterController::class , 'index'])->name('register-page');
