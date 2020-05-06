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
Route::get('/category/{category}', "HomeController@getCategoryProduct");
Route::get('/product/{id}', "HomeController@getProductDetails");
Route::get('/cart', "CartController@getCart");
Route::post('/cart', "CartController@postCart");
Route::get('/check-out', "CartController@getCheckOut");
Route::get('/seller', "SellerController@index");
Route::get('/seller/dashboard', "SellerController@dashboard");
Route::post('/seller/add-product', "SellerController@addProduct");
Route::get('/seller/add-product/{id}', "SellerController@getProduct");
Route::post('/seller/add-product/{id}', "SellerController@editProduct");
Route::get('/login', "HomeController@login");
Route::post('/login', "HomeController@postLogin");
Route::get('/register', "HomeController@getRegister");
Route::post('/register', "HomeController@PostRegister");
Route::get('/seller/login', "SellerController@login");
Route::post('/seller/login', "SellerController@postLogin");
Route::get('/seller/register', "SellerController@getRegister");
Route::post('/seller/register', "SellerController@PostRegister");

Route::get('/my-profile', function(){return "working";});
