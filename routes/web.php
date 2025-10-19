<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/products/category/{category}', function ($category) {
    return view('products-category', ['category' => $category]);
})->name('products.category');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');