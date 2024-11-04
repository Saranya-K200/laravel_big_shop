<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\HomeController;
Route::get('/',[HomeController::class, 'index'])->name('home.index');


// Product detail page
Route::get('/products/{id}', [HomeController::class, 'show'])->name('product.show');


use App\Http\Controllers\AuthController;

Route::get('/forget_password',[AuthController::class, 'forget_password'])->name('home.forget_password');
Route::get('/login',[AuthController::class, 'login'])->name('home.login');
Route::get('/register',[AuthController::class, 'register'])->name('home.register');
Route::get('/reset_password',[AuthController::class, 'reset_password'])->name('home.reset_password');

Route::get('/privacy_policy',[HomeController::class, 'privacy_policy'])->name('home.privacy_policy');
Route::get('/purchase_guide',[HomeController::class, 'purchase_guide'])->name('home.purchase_guide');
Route::get('/terms',[HomeController::class, 'terms'])->name('home.terms');
Route::get('/about',[HomeController::class, 'about'])->name('home.about');
Route::get('/account',[HomeController::class, 'account'])->name('home.account');
Route::get('/contact',[HomeController::class, 'contact'])->name('home.contact');

use App\Http\Controllers\CartController;

// Cart listing page
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Add to Cart
Route::post('/cart/add_to_cart', [CartController::class, 'add_to_cart'])->name('cart.add_to_cart');

// Increase quantity route
Route::post('/cart/increase/{id}', [CartController::class, 'increaseQuantity'])->name('cart.increase');

// Decrease quantity route
Route::post('/cart/decrease/{id}', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');

// Remove item from cart
Route::delete('/cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

// Checkout route (if you have a checkout process)
// Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

// Clear cart route
Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');


// Fallback route for 404
Route::get('{any}', [HomeController::class, 'page_not_found'])->where('any', '.*');