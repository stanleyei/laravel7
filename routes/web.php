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
Route::get('/', 'FrontController@index');
Route::get('login', 'FrontController@login');

Route::post('/contact', 'ContactUsController@contact');

Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::resource('news', 'AdminNewsController');
    });
});

Route::prefix('news')->group(function () {
    Route::get('/', 'NewsController@index');
    Route::get('/content/{id}', 'NewsController@content');
});

Route::prefix('products')->group(function () {
    Route::get('/', 'ProductsController@index');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

