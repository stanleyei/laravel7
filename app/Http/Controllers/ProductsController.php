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
        $productsData = Products::get();
        $oneIds = ProductTypes::with('products')->find(1);
        $twoIds = ProductTypes::with('products')->find(2);
        $threeIds = ProductTypes::with('products')->find(3);
        return view('front.products.products_list_page', compact('productsData','oneIds','twoIds','threeIds'));
    }

    public function content($id)
    {
        $productsData = Products::find($id);
        return view('front.products.products_content_page', compact('productsData'));
    }
}
