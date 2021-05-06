<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    //
    public function newsList()
    {
        $newsData = News::get();
        return view('news/news_list_page', compact('newsData'));
    }

    public function newsContent($id)
    {
        $newsData = News::find($id);
        return view('news/news_content_page', compact('newsData'));
    }

    public function newsEdit()
    {
        return view('news/news_edit_page');
    }

    public function create()
    {   
        return view('news/news_create_page');
    }

    public function store(Request $request)
    {
            News::create([
            'title' => $request->title,
            'date' => $request->date,
            'img' => $request->img,
            'content' => $request->content
        ]);
        return  redirect('/news/list');
    }

    public function update($id)
    {
        News::where('id', $id)
            ->update(['date' => '2021-01-01']);
    }

    public function delete($id)
    {
        News::where('id', $id)
            ->delete();
        return  redirect('/news/list');
    }
}
