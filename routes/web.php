<?php

use function PHPSTORM_META\type;

use App\Http\Middleware\cartCheck;
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
    Route::post('/add', 'ShoppingCartController@add')->name('shoppingcartAdd');
    Route::get('/gotoindex', 'ShoppingCartController@gotoindex');
    Route::middleware(['auth','cartCheck'])->group(function () {
        Route::get('/', 'ShoppingCartController@index');
        Route::get('/method', 'ShoppingCartController@method');
        Route::post('/information', 'ShoppingCartController@information');
        Route::post('/finish', 'ShoppingCartController@finish');
        Route::post('/update', 'ShoppingCartController@update')->name('shoppingcartUpdate');
        Route::post('/delete', 'ShoppingCartController@delete')->name('shoppingcartDelete');
    });
});

Route::prefix('cart_ecpay')->group(function(){
    //當消費者付款完成後，綠界會將付款結果參數以幕後(Server POST)回傳到該網址。
    Route::post('notify', 'ShoppingCartController@notifyUrl')->name('notify');

    //付款完成後，綠界會將付款結果參數以幕前(Client POST)回傳到該網址
    Route::post('return', 'ShoppingCartController@returnUrl')->name('return');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
