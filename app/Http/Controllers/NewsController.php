<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    // public function login()
    // {
    //     return view('login');
    // }

    public function mainIndex()
    {
        return view('index');
    }

    public function newsList()
    {
        $newsData = News::get();
        $total = News::count();
        return view('news/news_list_page', compact('newsData','total'));
    }

    public function newsContent($id)
    {
        $newsData = News::find($id);
        return view('news/news_content_page', compact('newsData'));
    }

    public function edit()
    {
        $newsData = News::get();
        $total = News::count();
        return view('news/news_edit_page', compact('newsData','total'));
    }

    public function create()
    {
        return view('news/news_create');
    }

    public function store(Request $request)
    {
        News::create($request->all());
        return  redirect('/news/edit');
    }

    public function update(Request $request, $id)
    {
        News::find($id)
            ->update($request->all());
        return  redirect('/news/edit');
    }

    public function destroy($id)
    {
        News::find($id)
            ->delete();
        return  redirect('/news/edit');
    }
}
