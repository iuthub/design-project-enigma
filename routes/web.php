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

Route::get('/', 'HomeController@index')->name('index');



Route::get('/about', 'HomeController@about')->name('about');
Route::get('/product/{id}', 'HomeController@product')->name('product');
Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/contact', 'HomeController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
