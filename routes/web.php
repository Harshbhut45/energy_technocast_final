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

Route::get('/abouts-us', function () {
    return view('pages.about-as');
});

Route::get('/process', function () {
    return view('pages.process');
});

Route::get('/quality', function () {
    return view('pages.quality-assurance');
});

Route::get('/technical-capabilities', function () {
    return view('pages.technical-capabilities');
});

Route::get('/industries-servied', 'PublicController@industries_servied');

// Route::get('/industries-servied', function () {
//     return view('pages.industries-servied');
// });

Route::get('/industries-servied-valves', function () {
    return view('pages.industries-servied-valves');
});

Route::get('/career', function () {
    return view('pages.career');
});

Route::get('/contact-us', function () {
    return view('pages.contact-us');
});