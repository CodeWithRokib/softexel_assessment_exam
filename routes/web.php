<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;

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
    return view('welcome');
});
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');

Route::get('/productList',[ProductController::class,'index'])->name('product.index');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product/create',[ProductController::class,'store'])->name('product.store');


Route::get('/categroy',[CategoryController::class,'index'])->name('categroy.index');
Route::get('/categroy/create',[CategoryController::class,'create'])->name('categroy.create');
Route::post('/categroy/create',[CategoryController::class,'store'])->name('category.store');


Route::get('/subcategroy',[SubcategoryController::class,'index'])->name('subcategroy.index');
Route::get('/subcategroy/create',[SubcategoryController::class,'create'])->name('subcategroy.create');
Route::post('/subcategroy/create',[SubcategoryController::class,'store'])->name('subcategory.store');

Route::get('/product',[ProductController::class,'index2'])->name('products.index');