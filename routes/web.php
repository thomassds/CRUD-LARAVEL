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

Route::get('/', 'App\Http\Controllers\ProductController@listProducts')->name('products.listAll');

Route::get('/product/edit/{product}', 'App\Http\Controllers\ProductController@viewEdit')->name('viewEdit');

Route::get('/newProduct', 'App\Http\Controllers\ProductController@newProduct')->name('newProduct');

Route::post('/post', 'App\Http\Controllers\ProductController@store')->name('post');

Route::put('/product/edit/{product}', 'App\Http\Controllers\ProductController@editProduct')->name('editProduct');

Route::delete('/product/destroy/{product}', 'App\Http\Controllers\ProductController@destroyProduct')->name('destroyProduct');
