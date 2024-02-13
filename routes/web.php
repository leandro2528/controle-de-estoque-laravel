<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
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
});
