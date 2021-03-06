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

Route::get('/single-page', function () {
    return view('single');
});

Route::get('/front-page', 'FrontpageController@index');

Route::get('/category/{category}', 'FrontpageController@category');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'TestController@index')->name('test');
Route::get('/test-api', 'TestController@testApi')->name('test-api');