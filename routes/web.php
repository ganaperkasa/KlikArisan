<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;


Route::get('/', [LoginController::class, 'showLoginForm']) ->name('login');
Route::post('/', [LoginController::class, 'login'])->name('login');
// route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [LoginController::class, 'register'])->name('register');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
