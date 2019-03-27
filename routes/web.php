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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'HomeController@index'); //utilise la fonction index dans le controller HomeController
Route::get('/contact', 'ContactController@index'); 
Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/{post_title}', 'ArticlesController@show');

/*
Route::get('/contact', 'HomeController@contact'); 
Route::get('/articles', 'HomeController@articles');
*/
