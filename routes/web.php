<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ShopController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Front\ProductController;

use App\Http\Controllers\Controller;

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


Route::group(['prefix' => '/front'], function () {
    Route::middleware('auth')->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/shop/product/{id}', [ShopController::class, 'show'])->name('shop_product');
        Route::post('/product_search', [ProductController::class, 'productSearch'])->name('product.search');
        Route::get('/contact', function () {
            return view('front.contact');
        })->name('contact');
        Route::get('/introduce', function () {
            return view('front.introduce');
        })->name('introduce');
        Route::get('/blog', [BlogController::class, 'index'])->name('blog-page');
    });
});

Route::group(['prefix' => '/auth'], function () {
    Route::get('/login', [UserController::class, 'showLogin'])->name('login.show');
    Route::post('/login', [UserController::class, 'login'])->name('login.post');
    Route::get('/register', [UserController::class, 'index'])->name('register.show');
    Route::post('/register', [UserController::class, 'store'])->name('register.post');
});

Route::group(['prefix' => '/admin'], function () {
    Route::middleware('auth')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin');
        Route::group(['prefix' => '/product'], function () {
            Route::get('/show', [AdminController::class, 'showProduct'])->name('product.show');
            Route::get('/add', [AdminController::class, 'addProduct'])->name('product.add');
            Route::post('/add', [AdminController::class, 'storeProduct'])->name('product.store');
            Route::get('/edit/{id}', [AdminController::class, 'editProduct'])->name('product.edit');
            Route::post('/update/{id}', [AdminController::class, 'updateProduct'])->name('product.update');
            Route::delete('/delete/{id}', [AdminController::class, 'deleteProduct'])->name('product.destroy');
        });
        Route::group(['prefix' => '/category'], function () {
            Route::get('/show', [AdminController::class, 'showCategory'])->name('category.show');
            Route::get('/add', [AdminController::class, 'addCategory'])->name('category.add');
            Route::post('/add', [AdminController::class, 'storeCategory'])->name('category.store');
            Route::get('/edit/{id}', [AdminController::class, 'editCategory'])->name('category.edit');
            Route::post('/update/{id}', [AdminController::class, 'updateCategory'])->name('category.update');
            Route::delete('/delete/{id}', [AdminController::class, 'deleteCategory'])->name('category.destroy');
        });
        Route::group(['prefix' => '/user'], function () {
            Route::get('/show', [AdminController::class, 'showUser'])->name('user.show');
            Route::get('/add', [AdminController::class, 'addUser'])->name('user.add');
            Route::post('/add', [AdminController::class, 'storeUser'])->name('user.store');
            Route::get('/edit/{id}', [AdminController::class, 'editUser'])->name('user.edit');
            Route::post('/update/{id}', [AdminController::class, 'updateUser'])->name('user.update');
            Route::delete('/delete/{id}', [AdminController::class, 'deleteUser'])->name('user.destroy');
        });
    });
});
