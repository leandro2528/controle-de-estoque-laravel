<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoryController;

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
    Route::get('/{id}/edit', [SupplierController::class, 'edit'])->where('id', '[0-9]+')->name('suppliers-edit');
    Route::put('{id}', [SupplierController::class, 'update'])->where('id', '[0-9]+')->name('suppliers-update');
    Route::delete('{id}', [SupplierController::class, 'destroy'])->where('id', '[0-9]+')->name('suppliers-destroy');
});

Route::prefix('/categorys')->group(function() {
    Route::get('/', [CategoryController::class, 'index'])->name('categorys-index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categorys-create');
    Route::post('/', [CategoryController::class, 'store'])->name('categorys-store');
    Route::get('{id}/edit', [CategoryController::class, 'edit'])->where('id', '[0-9]+')->name('categorys-edit');
    Route::put('{id}', [CategoryController::class, 'update'])->where('id', '[0-9]+')->name('categorys-update');
    Route::delete('{id}', [CategoryController::class, 'destroy'])->where('id', '[0-9]+')->name('categorys-destroy');
});