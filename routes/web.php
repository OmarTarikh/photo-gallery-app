<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// Root Route
Route::get('/', function () {
    return auth()->check() ? redirect()->route('galeris.index') : redirect()->route('login');
})->name('home');

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// User Management
Route::middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    // Galeri (Photos) Routes
    Route::resource('galeris', GaleriController::class);
    Route::post('galeris/{FotoID}/like', [GaleriController::class, 'storeLike'])->name('galeris.like');
    Route::post('galeris/{FotoID}/comment', [GaleriController::class, 'storeComment'])->name('galeris.comment');

    // Export to PDF Route
    Route::get('/pdf', [GaleriController::class, 'exportToPDF'])->name('galeris.pdf');

    // Album Routes
    Route::resource('albums', AlbumController::class);
});
