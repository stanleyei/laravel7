<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdminProductsController extends Controller
{
    //
    public function index()
    {
        $productsData = Products::get();
        return view('admin.products_index', compact('productsData'));
    }

    public function edit($id)
    {
        $productsData = Products::find($id);
        return view('admin.products_edit_page',compact('productsData'));
    }

    public function create()
    {
        return view('admin.products_create_page');
    }

    public function store(Request $request)
    {
        $requsetData = $request->all();
    
        if($request->hasFile('img')) {
            $file = $request->file('img');
            $path = Storage::disk('myfile')->putFile('products', $file);
            $requsetData['img'] = Storage::disk('myfile')->url($path);
        }
        Products::create($requsetData);
        return  redirect('/admin/products/');
    }

    public function update(Request $request, $id)
    {
        $item = Products::find($id);
        $requsetData = $request->all();
        if($request->hasFile('img')) {
            $old_image = $item->img;
            $file = $request->file('img');
            $path = Storage::disk('myfile')->putFile('products', $file);
            $requsetData['img'] = Storage::disk('myfile')->url($path);
            File::delete(public_path().$old_image);
        }
    
        $item->update($requsetData);
        return  redirect('/admin/products/');
    }

    public function destroy($id)
    {
        $item = Products::find($id);
        $old_image = $item->img;
        if(file_exists(public_path().$old_image)){
            File::delete(public_path().$old_image);
        }
        $item->delete();
        return  redirect('/admin/products/');
    }
}
