<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //

    public function index()
    {
        $newsData = News::orderBy('date', 'desc')->get();
        $total = News::count();
        return view('front.news.news_list_page', compact('newsData','total'));
    }

    public function content($id)
    {
        $newsData = News::find($id);
        return view('front.news.news_content_page', compact('newsData'));
    }

}
