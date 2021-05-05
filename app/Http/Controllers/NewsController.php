<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function newsList()
    {
        return view('news/news_list_page');
    }

    public function newsContent()
    {
        return view('news/news_content_page');
    }
}
