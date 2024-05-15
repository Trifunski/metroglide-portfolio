<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\sneakerController;
use App\Http\Controllers\sneakersController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\cartController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [welcomeController::class, 'index']);
Route::get('/sneaker/{id}', [sneakerController::class, 'index']);
Route::get('/sneakers', [sneakersController::class, 'index'])->name('sneakers');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::patch('/cart/{key}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{key}', [CartController::class, 'remove'])->name('cart.remove');