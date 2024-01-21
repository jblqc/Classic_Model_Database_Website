<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\productController; 
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);


// ADMIN ROUTES
Route::get('/productlines/add_productlines_view', [AdminController::class, 'addview']);
Route::get('/products/add_products_view', [AdminController::class, 'addproductview']);

Route::get('/productlines/showproductlines', [AdminController::class, 'showproductlines']);
Route::get('/productlines/showprodpercateg/{productLine}', [AdminController::class, 'showprodpercateg']);
Route::get('/products/showallproducts', [AdminController::class, 'showallproducts']);

Route::get('/productlines/deleteproductline/{productLine}', [AdminController::class, 'deleteproductline']);
Route::get('/products/deleteproduct/{productCode}', [AdminController::class, 'deleteproduct']);

Route::get('/productlines/updateproductline/{id}', [AdminController::class, 'updateproductline']);
Route::get('/products/updateproduct/{id}', [AdminController::class, 'updateproduct']);
Route::get('/products/viewproduct/{id}', [AdminController::class, 'viewproduct']);

Route::post('/editproductline/{id}', [AdminController::class, 'editproductline']);
Route::post('/editproduct/{id}', [AdminController::class, 'editproduct']);

Route::post('/upload_productlines', [AdminController::class, 'upload']);
Route::post('/upload_products', [AdminController::class, 'uploadproducts']);


// USER ROUTES

Route::get('/productLine/specific/{id}', [productController::class, 'showSpecific'])->name('productLine.showSpecific');
Route::get('/productLine/productListperCateg/{id}', [productController::class, 'List']);


Route::get('/productLine/about/', [productController::class, 'about'])->name('productLine.about');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

