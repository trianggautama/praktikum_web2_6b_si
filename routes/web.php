<?php

use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/', [AutentikasiController::class, 'loginPost'])->name('login.post');
Route::get('/register', [AutentikasiController::class, 'register'])->name('register');
Route::post('/register', [AutentikasiController::class, 'registerPost'])->name('register.post');
Route::post('/logout', [AutentikasiController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');