<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect()->route('products.index');
});

// Rutas para productos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/list', [ProductController::class, 'list'])->name('products.list');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
