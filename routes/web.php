<?php

use function PHPSTORM_META\type;

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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
Route::prefix('news')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/create', 'NewsController@create');
        Route::get('/edit', 'NewsController@edit');
        Route::post('/store', 'NewsController@store');
        Route::post('/update/{id}', 'NewsController@update');
        Route::get('/delete/{id}', 'NewsController@delete');
    });
    Route::get('/', 'NewsController@newsList');
    Route::get('/content/{id}', 'NewsController@newsContent');
});

Route::get('/', 'NewsController@index');
// Route::get('login', 'NewsController@login');
Route::post('/contact', 'ContactUsController@contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
