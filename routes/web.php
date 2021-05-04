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

Route::get('/', function () {
    return view('welcome');
});

Route::get('text', function(){
    $number = ['a' => 2 , 'b' => 3];
    $ppp = 5.2;
    $string = 'a';
    $string2 = ' b';
    dd($string.$string2,$number,$ppp);

    return'Buenos dias !!';
});

