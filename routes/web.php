<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AwalController::class, 'index'])->name('awal');

// Login routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Sign up routes
Route::get('/signup', [SignUpController::class, 'index'])->name('signup');
Route::post('/signup', [SignUpController::class, 'signup'])->name('signup.post');
