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

Route::get('/', "HomeController@index");
Route::get('/seller', "SellerController@index");
Route::post('/seller/add-product', "SellerController@addProduct");
Route::get('/login', "HomeController@login");
Route::post('/sign-in', "HomeController@signin");