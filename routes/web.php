<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-customer', [CustomerController::class,'add_customer']);
Route::get('/show-mobile/{id}', [CustomerController::class,'show_mobile']);

Route::get('/show-customer/{id}', [MobileController::class,'show_customer']);

Route::get('/from-customer/{id}', [IndexController::class,'indexFromCustomer']);
Route::get('/from-mobile/{id}', [IndexController::class,'indexFromMobile']);