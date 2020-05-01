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

// Route::get('/home', 'HomeController@index')->name('home');
//
// Route::get('/mycart', 'ShopController@mycart')->name('shop.mycart')->middleware('auth');

Route::group(['prefix' => 'shop', 'middleware' => 'auth'], function() {
  Route::get('/', 'ShopController@index')->name('shop.index');
  Route::get('mycart', 'ShopController@mycart')->name('shop.mycart');
  Route::post('mycart', 'ShopController@addMycart')->name('shop.addMycart');
});

