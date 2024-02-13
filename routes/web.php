<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SupplierController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('dashboards-index');

Route::prefix('/products')->group(function() {
    Route::get('/', [ProductController::class, 'index'])->name('products-index');
    Route::get('/create', [ProductController::class, 'create'])->name('products-create');
    Route::post('/', [ProductController::class, 'store'])->name('products-store');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->where('id', '[0-9]+')->name('products-edit');
    Route::put('/{id}', [ProductController::class, 'update'])->where('id', '[0-9]+')->name('products-update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->where('id', '[0-9]+')->name('products-destroy');
});

Route::prefix('/suppliers')->group(function() {
    Route::get('/', [SupplierController::class, 'index'])->name('suppliers-index');
    Route::get('/create', [SupplierController::class, 'create'])->name('suppliers-create');
    Route::post('/', [SupplierController::class, 'store'])->name('suppliers-store');
});
