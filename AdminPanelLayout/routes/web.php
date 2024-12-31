<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ComplaintController;

Route::get('/bills', [BillController::class, 'index'])->name('bills.index');
Route::post('/bills', [BillController::class, 'store'])->name('bills.store');


// Client Routes
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients/{id}/approve', [ClientController::class, 'approve'])->name('clients.approve');
Route::get('/clients/{id}/rejected', [ClientController::class, 'rejected'])->name('clients.rejected');
Route::delete('/clients/{id}', [ClientController::class, 'delete'])->name('clients.delete');

// Package Routes
Route::resource('packages', PackageController::class);
Route::get('/packages/create', [PackageController::class, 'create'])->name('packages.create');

// // Authentication Routes
// Route::get('/login', [LoginController::class, 'showLoginForm'])->middleware('guest')->name('login');
// Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
// Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

// Admin Authentication Routes
// Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm'])->middleware('guest')->name('admin.login');
// Route::post('/admin/login', [LoginController::class, 'loginAsAdmin'])->middleware('guest')->name('admin.login.post');

// Home Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes with Middleware
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Add more admin routes here
});

// Default Route
Route::get('/', function () {
    return view('welcome');
});

// Prefix for Backend Routes
Route::prefix('backend')->group(function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('backend.dashboard');
});

// Auth Routes (included by default with Laravel authentication)
Auth::routes();


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
//complains 
// routes/web.php
Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaints.index');
// web.php
Route::delete('/complaints/{id}', [ComplaintController::class, 'destroy'])->name('complaints.destroy');
