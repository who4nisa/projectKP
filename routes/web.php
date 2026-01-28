<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminDashboardController;

/*
|--------------------------------------------------------------------------
| AUTH ROUTE (LOGIN)
|--------------------------------------------------------------------------
*/

// halaman login di /
Route::get('/', [AuthController::class, 'showLogin'])
    ->name('login');

// proses login
Route::post('/', [AuthController::class, 'login']);

// logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

/*
|--------------------------------------------------------------------------
| PROTECTED ROUTE (HARUS LOGIN)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])
        ->name('dashboard');
});
