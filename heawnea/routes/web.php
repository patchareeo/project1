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

Route::get('/', function () {
    return view('page/index');
})->name('index');

Route::get('/404', function () {
    return view('page/404');
})->name('404');

Route::get('/blog-single', function () {
    return view('page/blog-single');
})->name('blog-single');

Route::get('/blog', function () {
    return view('page/blog');
})->name('blog');

Route::get('/profile', function () {
    return view('page/profile');
})->name('profile');

Route::get('/checkout', function () {
    return view('page/checkout');
})->name('checkout');

Route::get('/contact-us', function () {
    return view('page/contact-us');
})->name('contact-us');

Route::get('/login', function () {
    return view('page/login');
})->name('login');

Route::get('/product-details', function () {
    return view('page/product-details');
})->name('product-details');

Route::get('/shop', function () {
    return view('page/shop');
})->name('shop');

Route::get('/welcome', function () {
    return view('page/welcome');
})->name('welcome');

Route::get('/register', function () {
    return view('page/register');
})->name('register');

Route::get('/templete', function () {
    return view('templete/templete');
})->name('templete');

Route::get('/test', function () {
    return view('templete/test');
})->name('test');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
