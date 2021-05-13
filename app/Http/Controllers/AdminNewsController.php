<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdminNewsController extends Controller
{
    //
    public function index()
    {
        $newsData = News::get();
        $total = News::count();
        return view('admin.news.news_edit_page', compact('newsData','total'));
    }

    public function show(){
        $newsData = News::get();
        $total = News::count();
        return view('admin.news.news_edit_page', compact('newsData','total'));
    }

    public function create()
    {
        return view('admin.news.news_create');
    }

    public function store(Request $request)
    {
        $requsetData = $request->all();
        
        if($request->hasFile('img')) {
            $file = $request->file('img');
            $path = Storage::disk('myfile')->putFile('news', $file);
            $requsetData['img'] = Storage::disk('myfile')->url($path);
        }
        News::create($requsetData);
        return  redirect('/admin/news/');
    }

    public function update(Request $request, $id)
    {
        $item = News::find($id);

        $requsetData = $request->all();
        if($request->hasFile('img')) {
            $old_image = $item->img;
            $file = $request->file('img');
            $path = Storage::disk('myfile')->putFile('news', $file);
            $requsetData['img'] = Storage::disk('myfile')->url($path);
            File::delete(public_path().$old_image);
        }
    
        $item->update($requsetData);
        return  redirect('/admin/news/');
    }

    public function destroy($id)
    {
        $item = News::find($id);
        $old_image = $item->img;
        if(file_exists(public_path().$old_image)){
            File::delete(public_path().$old_image);
        }
        $item->delete();
        return  redirect('/admin/news/');
    }
}

