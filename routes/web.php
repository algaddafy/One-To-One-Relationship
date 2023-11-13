<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-customer', [CustomerController::class,'add_customer']);
Route::get('/show-mobile/{id}', [CustomerController::class,'show_mobile']);

Route::get('/show-customer/{id}', [MobileController::class,'show_customer']);