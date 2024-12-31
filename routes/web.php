<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\ComplaintController;


use App\Http\Controllers\BillController;

Route::post('/bills/store', [BillController::class, 'store'])->name('bills.store');







// Frontend Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/logtin', [LoginController::class, 'index']);  // Typo here, should probably be '/login'
Route::get('/price', [PricingController::class, 'index']);
Route::get('/service', [ServicesController::class, 'index']);
Route::get('/complaint', [ComplaintController::class, 'showForm'])->name('complaint.form');
Route::post('/complaint', [ComplaintController::class, 'submitComplaint'])->name('complaint.submit');

// Resource Routes for Price
Route::resource('pric', PriceController::class);

// Resource Routes for Client
Route::resource('client', ClientController::class);

// Route for client's detail page
Route::get('/client/{id}/details', [ClientController::class, 'show'])->name('client.details');

// Route for admin dashboard
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// Define the route for handling the login form submission
// Route to display the login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');

// Route to handle the login form submission
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
