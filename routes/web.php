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

Route::get('/about', 'PublicController@about');

Route::get('/contact', 'PublicController@contact');

Route::get('/news', 'PublicController@news');

Route::get('/membership', 'PublicController@membership');

Route::get('/publications', 'PublicController@publications');

Route::get('/psychology_help_center', 'PublicController@psychology_help_center');

Route::get('/recent_members/load_recent','PublicController@load_recent');