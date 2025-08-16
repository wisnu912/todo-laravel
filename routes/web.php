<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UpdateStatusController;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Storage::disk('local')->put('example.txt', 'Contents');


// Route untuk login & register (hanya untuk guest)
Route::middleware(['auth.redirect'])->group(function () {

    route::get('/' , function() {
   return view('welcome');
        })->name('/');

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
    Route::put('update-status/{id}', [UpdateStatusController::class , 'update'])
    ->name('update.status');
    Route::get('edit-Todo/{id}' , [DashboardController::class  , 'edit'])
    ->name('update.data');
    Route::put('edit-todo/{id}' , [DashboardController::class , 'update'])
    ->name('proses.update');
    Route::delete('delete/{id}' , [DashboardController::class , 'delete'])
    ->name('delete');
    Route::get('Detail-Todolist/{id}' , [DashboardController::class , 'show'])
    ->name('detail.todo');
    Route::get('profile/{id}' , [ProfileController::class , 'index'])
    ->name('profile');
    Route::get('profile' , [ProfileController::class  , 'edit'])
    ->name('profile.update');
    Route::put('profile/{id}' , [ProfileController::class , 'update'])
    ->name('profile.proses');
    Route::delete('delete-Account/{id}' , [ProfileController::class , 'delete'])
    ->name('delete.akun');
    Route::get('TodoUser' , [DashboardController::class , 'DetailTodo'])
    ->name('todo.user');
    Route::get('search' , [DashboardController::class ,   'search'])
    ->name('search.data');
});


