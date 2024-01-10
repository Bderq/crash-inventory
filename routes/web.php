<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseListController;
use App\Http\Controllers\LocationController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.home');
})->name('home');



Route::get('/product-out', function () {
    return view('pages.product-in');
})->name('product-out');

Route::post('/search-products', [ProductController::class, 'searchProducts'])->name('search-products');

Route::get('/product-in', [ProductController::class, 'productIn'])->name('product-in');

Route::get('/add-warehouse', [LocationController::class, 'showLocationList'])->name('add-warehouse');
Route::get('/delete-warehouse/{id}', [WarehouseListController::class,'deleteWarehouse'])->name('delete-warehouse');
Route::get('/warehouse-list', [WarehouseListController::class, 'showWarehouseList'])->name('showWarehouseList');
Route::post('/add-warehouse', [WarehouseListController::class, 'saveWarehouse'])->name('saveWarehouse');


Route::get('/add-product', [ProductController::class, 'showCategories'])->name('add-product');
Route::get('/product-list', [ProductController::class, 'showProductList'])->name('showProductList');
Route::post('/add-product', [ProductController::class, 'saveProduct'])->name('saveProduct');
Route::get('/delete-product/{id}', [ProductController::class,'deleteProduct'])->name('delete-product');
Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit-product');
Route::put('/edit-product/{id}', [ProductController::class, 'postEditProduct'])->name('post-edit-product');

Route::get('/category-list', [ProductController::class, 'showCategoryList'])->name('category-list');
Route::put('/category-list', [ProductController::class, 'addCategory'])->name('add-category');
Route::get('/delete-category/{id}', [ProductController::class,'deleteCategory'])->name('delete-category');

Route::post('/save-product-in', [ProductController::class, 'SaveProdutctIn'])->name('save-product-in');



Route::post('/get-product-units', [ProductController::class, 'getProductUnits'])->name('get-product-units');
