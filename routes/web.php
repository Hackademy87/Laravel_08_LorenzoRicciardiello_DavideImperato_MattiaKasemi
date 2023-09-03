<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class,'welcome'])->name('home');

Route::get('/product/create',[ProductController::class,'create'])->name('product.create');

Route::post('/product/store', [ProductController::class,'store'])->name('product.store');

Route::get('/product/index',[ProductController::class,'index'])->name('product.index');

Route::get('/product/show/{product}',[ProductController::class,'show'])->name('product.show');

Route::get('/product/edit/{product}',[ProductController::class,'edit'])->name('product.edit');

Route::put('/product/update/{product}',[ProductController::class,'updates'])->name('product.update');

Route::delete('/product/delete/{product}',[ProductController::class,'destroy'])->name('product.delete');

Route::get('/admin',[AdminController::class,'dashboard'])->name('admin.dashboard');

Route::post('/admin/userrole/{user}', [AdminController::class, 'changeUserRole'])->name('admin.changeUserRole');
