<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    //
    public function newsList()
    {
        $newsData =DB::table('news') -> get();
        return view('news/news_list_page',compact('newsData'));
    }

    public function newsContent($id)
    {
        $newsData =DB::table('news')
        -> find($id);
        return view('news/news_content_page',compact('newsData'));
    }

    public function create()
    {
        DB::table('news') -> insert([
            'title' => 'ABC',
            'data' => '2021-05-06',
            'img' => 'https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg',
            'content' => '7777777',
            'views' => '0'
            ]);
    }

    public function update($id)
    {
        DB::table('news') 
            ->where('id',$id)
            ->update(['data' => '2021-01-01']);
    }

    public function delete($id)
    {
        DB::table('news') 
            ->where('id',$id)
            -> delete();
    }

}
