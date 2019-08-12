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
/*-------------Пути аутентификатора-------------*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
/*-------------Пути аутентификатора-------------*/


Route::resource('product', 'ProductController')->names('product');
Route::resource('delivery', 'DeliveryController')->names('delivery');
Route::get('/', 'FrontController@index');



