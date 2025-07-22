<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'show']);
Route::get('/product',[ProductController::class, 'index']);
Route::get('/product/{id}',[ProductController::class, 'show']);
Route::get('/cart', [CartController::class, 'show']);
