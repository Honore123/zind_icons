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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/about','PagesController@about');
Route::get('/contactus','PagesController@contactUs');
Route::get('/admin','PagesController@admin');
Route::get('/portal','PagesController@portal');
Route::get('/upload','PagesController@upload');
Route::get('/icons','PagesController@icons');
Route::get('/login','PagesController@login');
Route::get('/logout','PagesController@logout');
Route::resource('/','PostsController');