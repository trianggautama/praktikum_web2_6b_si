<?php

use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/', [AutentikasiController::class, 'loginPost'])->name('login.post');
Route::get('/register', [AutentikasiController::class, 'register'])->name('register');
Route::post('/register', [AutentikasiController::class, 'registerPost'])->name('register.post');
Route::post('/logout', [AutentikasiController::class, 'logout'])->name('logout');

//route data profile
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/profile/edit/{id}', [HomeController::class, 'profileEdit'])->name('profile.edit');
Route::put('/profile/edit/{id}', [HomeController::class, 'profileUpdate'])->name('profile.update');

//route data post
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::get('/post/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/{id}/delete', [PostController::class, 'delete'])->name('post.delete');
