<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/brands', 'BrandController@index');
Route::post('/brand', 'BrandController@store');
Route::delete('/brand/{brand}', 'BrandController@destroy');

Route::get('/categories', 'CategoryController@index');
Route::post('/category', 'CategoryController@store');
Route::delete('/category/{category}', 'CategoryController@destroy');

Route::get('/products', 'ProductController@index');
Route::post('/product', 'ProductController@store');
Route::delete('/product/{product}', 'ProductController@destroy');