<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        $newsData = Products::get();
        $total = Products::count();
        return view('front.products_list_page', compact('newsData','total'));
    }

    // public function content($id)
    // {
    //     $newsData = Products::find($id);
    //     return view('front.news_content_page', compact('newsData'));
    // }
}
