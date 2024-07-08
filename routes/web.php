<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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


Route::get('/',[App\Http\Controllers\IndexController::class, 'home'])->name('/');
Route::get('/contact-us',[App\Http\Controllers\IndexController::class, 'contact'])->name('/contact-us');
Route::get('/about-us',[App\Http\Controllers\IndexController::class, 'about'])->name('/about-us');
Route::get('/gallery',[App\Http\Controllers\IndexController::class, 'gallery'])->name('/gallery');
Route::get('/products',[App\Http\Controllers\IndexController::class, 'products'])->name('/products');
Route::get('/products/{category}', [ProductController::class, 'productsByCategory'])->name('products.by_category');
Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');


Route::get('/admin/login',[App\Http\Controllers\AdminController::class, 'index2'])->name('login');
Route::post('/admin/loginCheck',[App\Http\Controllers\AdminController::class, 'login'])->name('loginCheck');
Route::middleware('auth:sanctum')->get('/admin/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:sanctum')->get('/admin/dashboard',[App\Http\Controllers\AdminController::class, 'index'])->name('admin/dashboard');
Route::middleware('auth:sanctum')->get('/admin/categories',[App\Http\Controllers\AdminController::class, 'categories'])->name('admin/categories');
Route::middleware('auth:sanctum')->get('/admin/enquiries',[App\Http\Controllers\AdminController::class, 'enquiries'])->name('admin/enquiries');

Route::middleware('auth:sanctum')->post('/admin/add-category',  [CategoryController::class, 'store'])->name('category.store');
Route::middleware('auth:sanctum')->post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::middleware('auth:sanctum')->delete('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

Route::middleware('auth:sanctum')->get('/admin/products', [ProductController::class, 'index'])->name('admin.products');
Route::middleware('auth:sanctum')->post('/admin/add-product', [ProductController::class, 'store'])->name('products.store');
Route::middleware('auth:sanctum')->post('/admin/product/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::middleware('auth:sanctum')->delete('/admin/product/destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
