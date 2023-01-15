<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/category/{slug}/{id}', [CategoryController::class, 'index'])->name('category.index');

Route::get('/product/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('product.addToCart');

Route::get('/product/show-cart', [ProductController::class, 'showCart'])->name('product.showCart');

Route::get('/product/update-cart', [ProductController::class, 'updateCart'])->name('product.updateCart');

Route::get('/product/delete-cart', [ProductController::class, 'deleteCart'])->name('product.deleteCart');