<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index()
    {
        return view('news.news_list_page');
    }

    public function detial()
    {
        return view('news.news_content_page');
    }
}
