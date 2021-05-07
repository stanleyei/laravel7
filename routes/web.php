<?php

use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\type;

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

Route::get('/', 'NewsController@index');
Route::get('login', 'NewsController@login');
Route::get('news', 'NewsController@newsList');
Route::get('news/content/{id}', 'NewsController@newsContent');
Route::get('news/edit/{id}', 'NewsController@edit');
Route::get('news/create', 'NewsController@create');
Route::post('news/store', 'NewsController@store');
Route::post('news/update/{id}', 'NewsController@update');
Route::get('news/delete/{id}', 'NewsController@delete');
Route::post('/contact', 'ContactUsController@contact');

