<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(' produit.index');
});
Route::get('/index', function () {
    return view('produit.index')->name('produit.index');
});
