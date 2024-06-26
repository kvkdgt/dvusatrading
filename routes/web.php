<?php

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


Route::get('/',[App\Http\Controllers\IndexController::class, 'home'])->name('/');
Route::get('/contact-us',[App\Http\Controllers\IndexController::class, 'contact'])->name('/contact-us');
Route::get('/about-us',[App\Http\Controllers\IndexController::class, 'about'])->name('/about-us');
Route::get('/gallery',[App\Http\Controllers\IndexController::class, 'gallery'])->name('/gallery');
Route::get('/products',[App\Http\Controllers\IndexController::class, 'products'])->name('/products');


Route::get('/admin/login',[App\Http\Controllers\AdminController::class, 'login'])->name('login');
Route::get('/admin/dashboard',[App\Http\Controllers\AdminController::class, 'index'])->name('admin/dashboard');


