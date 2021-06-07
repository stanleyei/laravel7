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

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('news', 'AdminNewsController');
    Route::resource('products', 'AdminProductsController');
    Route::post('/products/edit/delete/{path}', 'AdminProductsController@delete_img');
    Route::resource('product_types', 'AdminProductTypesController');
    Route::post('/summernote/store', 'ToolBoxController@summernoteStore')->name('summernoteStore');
    Route::post('/summernote/delete', 'ToolBoxController@summernoteDelete')->name('summernoteDelete');
});

Route::prefix('news')->group(function () {
    Route::get('/', 'NewsController@index');
    Route::get('/content/{id}', 'NewsController@content');
});

Route::prefix('products')->group(function () {
    Route::post('/typeId', 'ProductsController@typeSwitch');
    Route::get('/', 'ProductsController@index');
    Route::get('/content/{id}', 'ProductsController@content');
});

Route::prefix('shoppingcart')->group(function () {
    Route::get('/', 'ShoppingCartController@index');
    Route::get('/method', 'ShoppingCartController@method');
    Route::get('/information', 'ShoppingCartController@information');
    Route::get('/finish', 'ShoppingCartController@finish');
    Route::post('/add', 'ShoppingCartController@add')->name('shoppingcartAdd');
    Route::get('/content', 'ShoppingCartController@content')->name('shoppingcartContent');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
