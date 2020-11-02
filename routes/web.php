<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;


Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/register', [PagesController::class, 'register'])->name('register');

Route::post('/register/submit', [UserController::class, 'register'])->name('registerSubmit');
