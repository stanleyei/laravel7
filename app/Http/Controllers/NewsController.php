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

    public function edit($id)
    {
        $newsData = News::find($id);
        return view('news/news_edit_page', compact('newsData'));
    }

    public function create()
    {
        return view('news/news_edit_page');
    }

    public function store(Request $request)
    {
        News::create([
            'title' => $request->title,
            'date' => $request->date,
            'img' => $request->img,
            'content' => $request->content
        ]);
        return  redirect('/news');
    }

    public function update(Request $request, $id)
    {
        News::find($id)
            ->update([
                'date' => $request->date,
                'title' => $request->title,
                'img' => $request->img,
                'content' => $request->content,
            ]);
        return  redirect('/news');
    }

    public function delete($id)
    {
        News::find($id)
            ->delete();
        return  redirect('/news');
    }
}
