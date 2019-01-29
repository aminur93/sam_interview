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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/keyword','KeywordController@index');

Route::match(['get', 'post'], '/keyword/post', 'KeywordController@store');

Route::get('/product','ProductController@index');

Route::match(['GET', 'POST'], '/product/post', 'ProductController@store');

Route::get('/comment','CommentController@index');

Route::match(['GET', 'POST'], '/comment/post', 'CommentController@store');
