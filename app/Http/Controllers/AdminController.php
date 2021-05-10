<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    //
    public function index()
    {
        $newsData = News::get();
        $total = News::count();
        return view('admin.news_edit_page', compact('newsData','total'));
    }

    public function show(){
        $newsData = News::get();
        $total = News::count();
        return view('admin.news_edit_page', compact('newsData','total'));
    }

    public function create()
    {
        return view('admin.news_create');
    }

    public function store(Request $request)
    {
        $requsetData = $request->all();
        
        if($request->hasFile('img')) {
            $file = $request->file('img');
            $path = $this->fileUpload($file,'news');
            $requsetData['img'] = $path;
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
            $path = $this->fileUpload($file,'news');
            $requsetData['img'] = $path;
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

    private function fileUpload($file,$dir){
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if( ! is_dir('upload/')){
            mkdir('upload/');
        }
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if ( ! is_dir('upload/'.$dir)) {
            mkdir('upload/'.$dir);
        }
        //取得檔案的副檔名
        $extension = $file->getClientOriginalExtension();
        //檔案名稱會被重新命名
        $filename = strval(time().md5(rand(100, 200))).'.'.$extension;
        //移動到指定路徑
        move_uploaded_file($file, public_path().'/upload/'.$dir.'/'.$filename);
        //回傳 資料庫儲存用的路徑格式
        return '/upload/'.$dir.'/'.$filename;
    }
}

