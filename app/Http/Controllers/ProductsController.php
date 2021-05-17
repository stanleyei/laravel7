<?php

namespace App\Http\Controllers;

use App\Products;
use App\ProductTypes;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        $productsData = Products::with('productTypes')->get();
        $allTypes = ProductTypes::with('products')->get();
        return view('front.products.products_list_page', compact('productsData', 'allTypes'));
    }

    public function content($id)
    {
        $productsData = Products::with('productImgs')->find($id);
        return view('front.products.products_content_page', compact('productsData'));
    }

}
