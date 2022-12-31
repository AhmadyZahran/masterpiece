<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\productcontroller;
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
    Route::get('/', [TemplateController::class, 'index'])->name('home');
    
    Route::get('/product', [productcontroller::class, 'index']);
    
    Route::get('/category', function () {
        return view('category');
});
Route::get('/404', function () {
    return view('error.404');
});

Route::get('/login', [CustomAuthController::class, 'index'])->name('login');

Route::post('/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('/register', [CustomAuthController::class, 'registration'])->name('register-user');

// Route::get('/product', function () {
    Route::get('/dashboard', [CustomAuthController::class, 'dashboard']); 
    Route::post('/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
    Route::get('/signout', [CustomAuthController::class, 'signOut'])->name('signout');
    // return view('product');
// });

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});



// Route::get('/singleproduct', function () {
//     return view('single product');
// });
Route::get('/allproduct', function () {
    return view('all product');
});



Route::get('/profile', function () {
    return view('profile');
})->name('profile'); 


Route::get('/cart', function () {
    return view('cart');
});


Route::get('/singleproduct/{id}', [productcontroller::class, "viewNow"]);

