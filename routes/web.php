<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Products (controller for filtering)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Product category page (optional)
Route::get('/products/category/{category}', [ProductController::class, 'category'])->name('products.category');

// Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
