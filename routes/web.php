<?php
use  App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
 
Route::get('/index',  [ProduitController::class,'index'])->name('produit.index');
 
Route::post('/index',[ProduitController::class,'store'])->name('produit.store');

