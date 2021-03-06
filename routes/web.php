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

// this is how you create routes
Route::get('/', function () {
    return view('welcome');
});
  
// this is how to call controller 
Route::get('/', 'PagesController@index');
Route::get('/breeds', 'BreedsController@breeds');
Route::get('/singlebreeds/{id}', 'singlebreedController@singlebreed');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
