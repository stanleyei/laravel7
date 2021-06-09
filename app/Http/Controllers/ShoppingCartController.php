<?php

namespace App\Http\Controllers;

use App\Products;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index()
    {
        $cartCollection = \Cart::getContent ();
        return view('front.shoppingcart.shoppingcart-1', compact('cartCollection'));
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
        //拿接收到的$request去與資料庫比對，如果有才存入購物車，沒有則回傳fail
        $prductsData = Products::find($request->id);
        if($prductsData){
            \Cart::add(array(
                'id' => $prductsData->id,
                'name' => $prductsData->name,
                'price' => $prductsData->price,
                'quantity' => 1,
                'attributes' => array(
                    'img'=> $prductsData->img,
                ),
            ));
            return 'success';
        }else{
            return 'fail';
        }
    }

    public function content()
    {
        $cartCollection = \Cart::getContent ();
        dd($cartCollection);
    }

    public function delete($id)
    {
        \Cart::remove($id);
    }
}
