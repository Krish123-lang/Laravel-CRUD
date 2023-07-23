<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;

// Route::get('/products', 'ProductController@index')->name('products.index');


Route::get('/', [ProductController::class, "index"])->name('index');
Route::get('products/create', [ProductController::class, "create"])->name('create');
Route::post('products/store', [ProductController::class, "store"])->name('store');

// For Editing
Route::get('products/{id}/edit', [ProductController::class, 'edit']);

// For Updating
Route::put('products/{id}/update', [ProductController::class, 'update']);

// For Deleting
Route::delete('products/{id}/delete', [ProductController::class, 'destroy']);

// For Showing Details
Route::get('products/{id}/show', [ProductController::class, 'show']);
