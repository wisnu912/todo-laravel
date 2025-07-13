<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//login
route::get('login' , [LoginController::class  , 'index'] )->name('login-page');
