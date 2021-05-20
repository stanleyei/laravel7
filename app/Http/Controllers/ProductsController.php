<?php

namespace App\Http\Controllers;

use App\ProductImgs;
use App\Products;
use App\ProductTypes;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        $productsData = Products::with('productTypes')->get();
        $allTypes = ProductTypes::get();
        return view('front.products.products_list_page', compact('productsData', 'allTypes'));
    }

    public function content($id)
    {
        $productsData = Products::with('productImgs')->find($id);
        return view('front.products.products_content_page', compact('productsData'));
    }

    public function typeSwitch(Request $request)
    {
        if($request->id == 0){
            $productsData = Products::with('productTypes', 'productImgs')->get();
        }else{
            $productsData = Products::with('productTypes', 'productImgs')->where('type_id', $request->id)->get();
        }

        $dataString = '';
        foreach($productsData as $product){
            $dataString .= 
            "<li class='content'>
              <a href='/products/content/{$product->id}'>
                <div class='details'>
                  <h2 class='h6'>{$product->name}</h2>
                  <p class='price'>'$'{$product->price}</p>
                  <div class='product'>
                    <img src='{$product->img}'>
                  </div>
                </div>
              </a>
            </li>";
        };
        return $dataString;
    }

}
