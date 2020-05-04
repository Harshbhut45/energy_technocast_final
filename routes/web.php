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

Route::get('/', 'PublicController@index');


Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);

// Categories CRUD
Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
Route::post('/categories', 'CategoryController@store')->name('categories.store');
Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');
Route::post('/categories/{id}', 'CategoryController@update')->name('categories.update');
Route::get('/categories/{id}/delete','CategoryController@destroy')->name('categories.delete');


// Products CRUD
Route::get('/home', 'ProductController@index')->name('home');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products', 'ProductController@store')->name('products.store');
Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::post('/products/{id}', 'ProductController@update')->name('products.update');
Route::get('/products/{id}/delete','ProductController@destroy')->name('products.delete');

// Public Pages
Route::get('/products/{slug}', 'PublicController@products')->name('products.public');

Route::get('/abouts-us', 'PublicController@about_us');

Route::get('/process', 'PublicController@process');

Route::get('/quality', 'PublicController@quality');

Route::get('/technical-capabilities', 'PublicController@technical_capabilities');

Route::get('/career', 'PublicController@career');

Route::get('/contact-us', 'PublicController@contact_us');

