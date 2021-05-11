<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class AdminProductsController extends Controller
{
    //
    public function index()
    {
        $productsData = Products::get();
        $total = Products::count();
        return view('front.products_list_page', compact('productsData','total'));
    }
}
