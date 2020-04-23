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
    return view('pages.index');
});

// categories CRUD
    Route::get('/categories', 'CategoryController@index')->name('categories.index');
    Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
    Route::post('/categories', 'CategoryController@store')->name('categories.store');
    Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');
    Route::post('/categories/{id}', 'CategoryController@update')->name('categories.update');
    Route::get('/categories/{id}','CategoryController@destroy')->name('categories.delete');


// products CRUD
    Route::get('/products', 'ProductController@index')->name('products.index');
    Route::get('/products/create', 'ProductController@create')->name('products.create');
    Route::post('/products', 'ProductController@store')->name('products.store');
    Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
    Route::post('/products/{id}', 'ProductController@update')->name('products.update');
    Route::get('/products/{id}','ProductController@destroy')->name('products.delete');


   
    Route::get('/index', function () {
        return view('pages.index');
    });
    
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
    
    Route::get('/industries-servied', function () {
        return view('pages.industries-servied');
    });
    
    Route::get('/career', function () {
        return view('pages.career');
    });
    
    Route::get('/contact-us', function () {
        return view('pages.contact-us');
    });

    Route::get('/industries-servied-valves', function () {
        return view('pages.industries-servied-valves');
    });

    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');