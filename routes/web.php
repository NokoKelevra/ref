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
Route::get('/', 'front@index');

Route::get('/property/{id}', 'front@property');

Route::get('/properties', 'front@properties');

Route::get('/home-test-view', function () {
    return view('vendor.rw-real-estate.home');
});

Route::get('/properties-test-view', function () {
    return view('vendor.rw-real-estate.properties');
});
