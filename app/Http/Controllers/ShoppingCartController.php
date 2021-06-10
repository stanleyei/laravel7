<?php

namespace App\Http\Controllers;

use App\Products;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index()
    {
        $cartCollection = \Cart::getContent();
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
        if ($prductsData) {
            \Cart::add(array(
                'id' => $prductsData->id,
                'name' => $prductsData->name,
                'price' => $prductsData->price,
                'quantity' => 1,
                'attributes' => array(
                    'img' => $prductsData->img,
                ),
            ));
            return 'success';
        } else {
            return 'fail';
        }
    }

    public function update(Request $request)
    {
        if ($request->id) {
            \Cart::update($request->id, array(
                'quantity' => $request->quantity,
            ));
        }
        $newQuantity = \Cart::get($request->id)->quantity;
        return $newQuantity;
    }

    public function delete(Request $request)
    {
        if ($request->id) {
            \Cart::remove($request->id);
            return 'success';
        } else {
            return 'fail';
        }
    }
}
