<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $newsData = News::get();
        $total = News::count();
        return view('admin/news_edit_page', compact('newsData','total'));
    }

    public function show(){
        $newsData = News::get();
        $total = News::count();
        return view('admin/news_edit_page', compact('newsData','total'));
    }

    public function create()
    {
        return view('admin/news_create');
    }

    public function store(Request $request)
    {
        News::create($request->all());
        return  redirect('/admin/news/');
    }

    public function update(Request $request, $id)
    {
        News::find($id)
            ->update($request->all());
        return  redirect('/admin/news/');
    }

    public function destroy($id)
    {
        News::find($id)
            ->delete();
        return  redirect('/admin/news/');
    }
}

