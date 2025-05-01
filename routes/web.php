<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\QRScannerController;


// Authentication Routes
Route::middleware('guest')->group(function () {
    // Login Routes
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    
    // Registration Routes
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

// Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Home Route
Route::get('/', [ProductController::class, 'index'])->name('home');

// Products Index Route
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Dashboard Route (Protected)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Product Verification Routes
Route::get('/verify-product', [ProductController::class, 'verifyPage'])->name('products.verify-page');
Route::post('/verify-product', [ProductController::class, 'verify'])->name('products.verify');

// Information Pages
Route::get('/how-it-works', [ProductController::class, 'howItWorks'])->name('products.how-it-works');
Route::get('/for-businesses', [ProductController::class, 'forBusinesses'])->name('products.for-businesses');
Route::get('/get-started', [ProductController::class, 'getStarted'])->name('products.get-started');
Route::get('/learn-more', [ProductController::class, 'learnMore'])->name('products.learn-more');

// QR Scanner Routes
Route::get('/scanner', [QRScannerController::class, 'index'])->name('scanner');
Route::post('/verify-qr', [QRScannerController::class, 'verify'])->name('verify-qr');
Route::post('/generate', [QRScannerController::class, 'generate'])->name('generate');
