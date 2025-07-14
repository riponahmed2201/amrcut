<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

// Admin Public Routes
//Route::get('/admin/login', [AuthController::class, 'index'])->name('admin.login');
//Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login');
//
////Protected Route
//Route::middleware(['XSS', 'admin', 'preventBackHistory'])->group(function () {
//    Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
//    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
//});
