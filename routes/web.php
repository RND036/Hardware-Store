<?php

use App\Http\Controllers\OrdersController;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserDataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/categories', function () {
    return view('pages.categories');
});
Route::get('/brands', function () {
    return view('pages.brands');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/aboutus', function () {
    return view('pages.aboutus');
});
Route::get('/contactus', function () {
    return view('pages.contactus');
});
Route::get('/other', function () {
    return view('pages.other');
});
Route::get('/product',[ProductsController::class,'show']);
Route::get('/checkout', function () {
    return view('pages.checkout');
});
Route::get('/sucess', function () {
    return view('pages.sucess');
});
Route::get('/user', function () {
    return view('auth.login');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [OrdersController::class, 'showOrders'])->name('dashboard');
});


Route::resource('orders',OrdersController::class);
Route::resource('manage',UserDataController::class);