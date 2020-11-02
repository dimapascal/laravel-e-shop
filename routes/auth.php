<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;

Route::get('/register', [PagesController::class, 'register'])->middleware('guest')->name('register');

Route::post('/register/submit', [UserController::class, 'register'])->middleware('guest')->name('registerSubmit');

Route::get('/login', [PagesController::class, 'login'])->middleware('guest')->name('login');

Route::post('/login/submit', [UserController::class, 'login'])->middleware('guest')->name('loginSubmit');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');
