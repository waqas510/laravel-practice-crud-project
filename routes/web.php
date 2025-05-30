<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get("/", [CategoryController::class,'index'])->name('index');

route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
route::get('/category', [CategoryController::class,'store'])->name('category.store');
route::get('/category/show', [CategoryController::class,'show'])->name('category.show');


route::get('/product/create', [ProductController::class,'create'])->name('product.create');
route::get('/product', [ProductController::class,'store'])->name('product.store');
route::get('/product/show', [ProductController::class,'show'])->name('product.show');