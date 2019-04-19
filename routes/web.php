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



Route::get('/', 'HomeController@index'); //utilise la fonction index dans le controller HomeController
Route::get('/contact/new', 'ContactController@request'); 
Route::post('/contact', 'ContactController@store'); 
Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/{post_title}', 'ArticlesController@show');


