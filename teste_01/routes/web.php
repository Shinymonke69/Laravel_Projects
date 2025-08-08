<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ExemploController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exemplo', [ExemploController::class, 'index']);
Route::get('/products', [ProductController::class, 'index'])->name('products.index');