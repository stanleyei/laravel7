<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        $productsData = Products::get();
        return view('front.products.products_list_page', compact('productsData'));
    }

    public function content($id)
    {
        $productsData = Products::find($id);
        return view('front.products.products_content_page', compact('productsData'));
    }
}
