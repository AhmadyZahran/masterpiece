<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
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
//     return view('welcome');
// });
Route::get('/', [TemplateController::class, 'index']);
Route::get('/category', function () {
    return view('category');
});
Route::get('/product', function () {
    return view('product');
});

Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/singleproduct', function () {
    return view('single product');
});
Route::get('/allproduct', function () {
    return view('all product');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/cart', function () {
    return view('cart');
});

