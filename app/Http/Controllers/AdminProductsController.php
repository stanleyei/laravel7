<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class AdminProductsController extends Controller
{
    //
    public function index()
    {
        $productsData = Products::get();
        $total = Products::count();
        return view('admin.products_edit_page', compact('productsData','total'));
    }

    public function show()
    {
        return view('admin.products_create');
    }

    public function create()
    {
        return view('admin.products_create');
    }

    public function store(Request $request)
    {
        $requsetData = $request->all();
        
        if($request->hasFile('img')) {
            $file = $request->file('img');
            $path = $this->fileUpload($file,'products');
            $requsetData['img'] = $path;
        }
        Products::create($requsetData);
        return  redirect('/admin/products/');
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
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
