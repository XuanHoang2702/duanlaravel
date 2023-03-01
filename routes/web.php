<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ShopController;
use App\Http\Controllers\Front\BlogController;
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

// Route::get('/', function () {
//     return view('front.index');
// });
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/shop/product/{id}', [ShopController::class, 'show']);
Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');
Route::get('/introduce', function () {
    return view('front.introduce');
})->name('introduce');
Route::get('/blog', [BlogController::class, 'index'])->name('blog-page');
