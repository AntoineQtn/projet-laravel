<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Homepage');
});
Route::get('/product', function () {
    echo 'Hello Product';
});
Route::get('/product/{id}', function () {
    echo 'Hello ProductCard';
});
Route::get('/cart', function () {
    echo 'Hello Cart';
});
