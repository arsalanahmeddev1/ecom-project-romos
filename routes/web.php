<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
Route::get('/', function () {
    $products = Product::all();
    return view('home', ['products' => $products]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/cart-promo', function () {
    return view('cart-promo');
});
Route::get('/create-profile', function () {
    return view('create-profile');
});
// auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');


// portal
Route::get('portal', function () {
    return view('dashboard.dashboard');
});
// Route::get('add-products', function () {
//     return view('dashboard.products.add-products')->name('dashboard.products.add-products');
// });

Route::prefix('portal')->middleware('auth')->group(function () {
    Route::resource('products', ProductController::class)->parameters([
        'products' => 'slug',
    ]);
    Route::resource('categories', CategoryController::class);
});