<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\HomeController;
Route::get('/',[HomeController::class, 'index'])->name('home.index');

use App\Http\Controllers\AuthController;

Route::get('/forget_password',[AuthController::class, 'forget_password'])->name('home.forget_password');
Route::get('/login',[AuthController::class, 'login'])->name('home.login');
Route::get('/register',[AuthController::class, 'register'])->name('home.register');
Route::get('/reset_password',[AuthController::class, 'reset_password'])->name('home.reset_password');

Route::get('/privacy_policy',[HomeController::class, 'privacy_policy'])->name('home.privacy_policy');
Route::get('/purchase_guide',[HomeController::class, 'purchase_guide'])->name('home.purchase_guide');
Route::get('/terms',[HomeController::class, 'terms'])->name('home.terms');


// Fallback route for 404
Route::get('{any}', [HomeController::class, 'page_not_found'])->where('any', '.*');