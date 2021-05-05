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

//練習
// Route::get('text', function(){
//     $number = ['a' => 2 , 'b' => 3];
//     $ppp = 5.2;
//     $string = 'a';
//     $string2 = ' b';
//     return'Buenos dias !!';
// });

// Route::get('lesson1', function () {
//     $japan = 'おはようございます';
//     $spain = 'Buenos días!';
//     echo $japan;
//     return view('text', compact('spain','japan'));
// });


Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
});

Route::get('news/list', 'NewsController@newsList');
Route::get('news/content/{id}', 'NewsController@newsContent');
Route::get('news/change', 'NewsController@newsChange');
Route::get('news/create', 'NewsController@create');
Route::get('news/update/{id}', 'NewsController@update');
Route::get('news/delete/{id}', 'NewsController@delete');

