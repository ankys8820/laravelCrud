<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route::get('/',[ProductController::class,'index]);
Route::get('/', [ProductController::class,'create'])->name('create');
Route::post('/product',[ProductController::class,'store'])->name('product.store');
Route::get('/products', [ProductController::class,'index'])->name('products');
