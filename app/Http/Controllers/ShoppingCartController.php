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

    public function information()
    {
        return view('front.shoppingcart.shoppingcart-3');
        
    }

    public function finish()
    {
        return view('front.shoppingcart.shoppingcart-4');
    }
}
