<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::redirect('/', '/products');

// Route pour afficher la liste des produits
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Routes pour gérer les produits (CRUD)
Route::resource('products', ProductController::class);