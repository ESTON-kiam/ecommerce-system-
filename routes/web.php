<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/products/create', [ProductController::class, 'create'])->middleware('auth');
Route::post('/admin/products', [ProductController::class, 'store'])->middleware('auth');
Route::get('/products', [ProductController::class, 'index']);

