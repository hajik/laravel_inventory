<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\temp_admin\CategoriesController;
use \App\Http\Controllers\temp_admin\BrandsController;
use \App\Http\Controllers\temp_admin\SizesController;
use \App\Http\Controllers\temp_admin\ProductsController;
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


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum'])->group(function(){
    //categories
    Route::resource('categories', CategoriesController::class);
    Route::get('/api/categories', [CategoriesController::class, 'getCategoriesJson']);
    //categories
    Route::resource('brands', BrandsController::class);
    Route::get('/api/brands', [BrandsController::class, 'getBrandsJson']);
    //sizes
    Route::resource('sizes', SizesController::class);
    //products
    Route::resource('products', ProductsController::class);
});
