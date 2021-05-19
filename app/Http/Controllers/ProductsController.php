<?php

namespace App\Http\Controllers;

use App\Products;
use App\ProductTypes;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index($typeId = null)
    {
        $allTypes = ProductTypes::with('products')->get();
        if($typeId){
            $types = ProductTypes::find($typeId);
        }else{
            $productsData = Products::with('productTypes')->get();
        }
        return view('front.products.products_list_page', compact('productsData', 'allTypes'));
    }

    public function content($id)
    {
        $productsData = Products::with('productImgs')->find($id);
        return view('front.products.products_content_page', compact('productsData'));
    }

}
