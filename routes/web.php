<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');
Route::get('/addbook', 'BookController@create');
Route::post('/newbook', 'BookController@store');
Route::post('/updatebook/{id}', 'BookController@update');
Route::get('/booklist', 'BookController@getbooks');
Route::get('/edit/{id}', 'BookController@edit');
Route::get('/delete/{id}', 'BookController@destroy');
