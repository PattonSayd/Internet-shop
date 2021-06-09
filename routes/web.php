<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/basket', [HomeController::class, 'basket'])->name('basket');
Route::get('/basket/order', [HomeController::class, 'order'])->name('order');
Route::get('/{category}', [CategoryController::class, 'category'])->name('category');
Route::get('/{category}/{product?}', [ProductController::class, 'product'])->name('product');
