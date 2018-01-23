<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/products')

//Route::view('products','products');
Route::get('/products','ProductsController@get');
Route::get('user.profile','UserController@index');
Route::get('cart','CartController@get');
Route::get('orderhistory','OrderHistoryController@get');
Route::get('user.editProfile','UserController@update()');