<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index()
    {
        return view('front.shoppingcart.shoppingcart-1');
    }

    public function method()
    {
        return view('front.shoppingcart.shoppingcart-2');
    }
}
