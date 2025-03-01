<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // products routes
    Route::get('add_product', [ProductController::class, 'addProductPage']);
    Route::post('add_product', [ProductController::class, 'storeProduct']);
    Route::get('all_products', [ProductController::class, 'index']);
    Route::get('edit_product/{id}', [ProductController::class, 'editProductPage']);
    Route::post('update_product/{id}', [ProductController::class, 'updateProduct']);
    Route::get('delete_product/{id}', [ProductController::class, 'deleteProduct']);
    Route::get('/view_product/{id}', [ProductController::class, 'viewProduct']);
});

require __DIR__ . '/auth.php';
