<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/category/{category}', [ProductController::class, 'category'])->name('products.category');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
