<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\ProductController;
use  App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use  App\Http\Controllers\UserController;
use  App\Http\Controllers\apiProductController;
use  App\Http\Controllers\apiCataController;
use  App\Http\Controllers\apiUserController;
Route::get('/', [HomeController::class, 'index'])->name('home');

// PRODUCT
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/{product_id}', [ProductController::class, 'detail'])->name('productdetail');
Route::get('/product-favorite', [ProductController::class, 'ProductFavorite'])->name('product-favorite');

Route::get('/category/{category_id}', [ProductController::class, 'getProductsByCategory'])->name('category');

// user
Route::get('/login', [UserController::class, 'Login'])->name('login');
Route::post('/postlogin', [UserController::class, 'postLogin'])->name('postlogin');

Route::get('/dangky', [UserController::class, 'dangky'])->name('dangky');
Route::post('/postdangky', [UserController::class, 'postdangky'])->name('postdangky');

Route::get('/info', [UserController::class, 'info'])->name('info');
Route::post('/postinfo', [UserController::class, 'postinfo'])->name('postinfo');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


// ADMIN
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    // ADMIN PRODUCT
Route::get('/product-list', [AdminController::class, 'ProductList'])->name('product-list');

Route::get('/add-product', [AdminController::class, 'ProductAdd'])->name('add-product');
Route::post('/productpost', [AdminController::class, 'productpost'])->name('productpost');

Route::get('/productdelete/{product_id}', [AdminController::class, 'productdelete'])->name('productdelete');

Route::get('/productupdate/{product_id}', [AdminController::class, 'productupdate'])->name('productupdate');
Route::post('/productpostupdate', [AdminController::class, 'productpostupdate'])->name('productpostupdate');

    // ADMIN CATEGORY
Route::get('/category-list', [AdminController::class, 'CategoryList'])->name('category-list');

Route::get('/category-add', [AdminController::class, 'CategoryAdd'])->name('category-add');
Route::post('/category-post', [AdminController::class, 'CategoryPost'])->name('category-post');

Route::get('/categorydelete/{category_id}', [AdminController::class, 'CategoryDelete'])->name('categorydelete');

Route::get('/categoryupdate/{category_id}', [AdminController::class, 'categoryupdate'])->name('categoryupdate');
Route::post('/categorypostupdate', [AdminController::class, 'categorypostupdate'])->name('categorypostupdate');

Route::get('/donhang', [AdminController::class, 'donhang'])->name('donhang');
// User
Route::get('/user-list', [AdminController::class, 'UserList'])->name('user-list');
Route::get('/userdelele/{id}', [AdminController::class, 'UserDelete'])->name('userdelele');

// Cart
Route::get('/cart', [CartController::class, 'Cart'])->name('cart');
Route::post('/cart', [CartController::class, 'CheckOut'])->name('postcart');

Route::get('/lichsu', [CartController::class, 'lichsu'])->name('lichsu');
Route::get('/dathangxong', [CartController::class, 'dathangxong'])->name('dathangxong');

Route::prefix('api')->group(function (){
    Route::resource('/cart',CartController::class);
    Route::get('/cart', [CartController::class, 'store']);
    Route::get('/products', [apiProductController::class, 'index']);
    Route::get('products/{id}', [apiProductController::class, 'show']);
    Route::get('/categories', [apiCataController::class, 'index']);
    Route::get('/categories/{id}', [apiCataController::class, 'show']);
    Route::get('/user', [apiUserController::class, 'index']);
    Route::get('/user/{id}', [apiUserController::class, 'show']);
});