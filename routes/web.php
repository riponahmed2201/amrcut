<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('about-us', [HomeController::class, 'showAboutUs']);
Route::get('feather', [HomeController::class, 'showFeather']);
Route::get('fibre', [HomeController::class, 'showFibre']);
Route::get('foam', [HomeController::class, 'showFoam']);
Route::get('combination-filling', [HomeController::class, 'showCombinationFilling']);
Route::get('cad-cutting', [HomeController::class, 'showCadCutting']);
Route::get('sewing', [HomeController::class, 'showSewing']);
Route::get('transport', [HomeController::class, 'showTransport']);
Route::get('contact-us', [HomeController::class, 'showContactUs']);
Route::get('privacy-policy', [HomeController::class, 'showPrivacyPolicy']);

// Admin Public Routes
Route::get('/admin/login', [AuthController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login');

//Protected Route
Route::middleware(['XSS', 'admin', 'preventBackHistory'])->group(function () {
    Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});
