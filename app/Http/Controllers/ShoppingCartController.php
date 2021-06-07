<?php

namespace App\Http\Controllers;

use App\Products;
use Darryldecode\Cart\Cart;
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

    public function add(Request $request)
    {
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => 4,
            'attributes' => array(),
        ));
        return 'success';
    }

    public function content()
    {
        $cartCollection = \Cart::getContent ();
        dd($cartCollection);
    }

}
