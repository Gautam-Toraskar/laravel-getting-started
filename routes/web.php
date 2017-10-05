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

// Route::get('/contact', 'PagesController@template');
Route::get('/template' , function () {
	return view('pages.template');
});

Route::get('/contact', 'PagesController@getContact'); //this is the get request

Route::get('/about', 'PagesController@getAbout');

Route::get('/', function () {
  return view('pages.welcome');
});

// this is all part of the post e.g. post/<function name>
Route::resource('posts','PostController');