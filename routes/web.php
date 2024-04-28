<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserDashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

/* Admin Routes */
Route::get('/admin', [BackendAuthController::class, 'login'])->name('adminlogin');
Route::post('/admin/login', [BackendAuthController::class, 'authenticate']);


Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/logout', [BackendAuthController::class, 'logout'])->name('admin.logout');
});
/* End Admin Routes */

/* User Routes */
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::middleware('auth:web')->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('user.logout');
});

/* End User Routes */