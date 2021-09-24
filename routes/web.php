<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientControllers\HomeController;
use App\Http\Controllers\ClientControllers\CategoryController as ClientCategoryController;
use App\Http\Controllers\AdminControllers\ProductController;
use App\Http\Controllers\AdminControllers\CategoryController;


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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/category/{category}', [ClientCategoryController::class, 'index'])->name('client.category');
// Route::get('/about', [ClientCategoryController::class, 'index'])->name('client.category'); 
Route::get('/product-detail/{product}', [HomeController::class, 'product_detail'])->name('product.detail');

//admin
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', function(){
        return view('admin.pages.index');
    });
    //product
    Route::group(['prefix' => 'product'], function () {
      Route::get('/', [ProductController::class, 'index'])->name('product-index');
      Route::get('/add-product', [ProductController::class, 'create'])->name('add-product');
      Route::post('/add-product', [ProductController::class, 'store'])->name('product.store');
      Route::get('/edit-product/{product}', [ProductController::class, 'show'])->name('edit-product');
      Route::put('/edit-product/{product}', [ProductController::class, 'edit'])->name('update-product');
      Route::DELETE('/delete/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
    });
    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category-index');
        Route::get('/add-category', [CategoryController::class, 'create'])->name('add-category');
        Route::post('/add-category', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit-category/{category}', [CategoryController::class, 'show'])->name('edit-category');
        Route::put('/edit-category/{category}', [CategoryController::class, 'edit'])->name('update-category');
        Route::DELETE('/delete/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });
});
