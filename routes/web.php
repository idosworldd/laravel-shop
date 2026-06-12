<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Homepage
Route::get('/', [ShopController::class, 'home'])->name('home');

// Shop page
Route::get('/shop', [ShopController::class, 'index'])->name('shop');

// Detail Produk
Route::get('/product/{slug}', [ShopController::class, 'show'])->name('product.show');

// About & Contact
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// Admin routes (group dengan middleware auth)
Route::prefix('admin')->middleware('auth')->group(function () {

    // Admin dashboard / product list
    Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');

    // Tambah produk
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.products.store');

    // Edit produk
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('admin.products.update');

    // Hapus produk
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
});

// Authentication
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store'); // beri nama login.store

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');