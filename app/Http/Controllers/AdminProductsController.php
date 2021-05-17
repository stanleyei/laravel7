<?php

namespace App\Http\Controllers;

use App\Products;
use App\ProductImgs;
use App\ProductTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdminProductsController extends Controller
{
    //
    public function index()
    {
        $productsData = Products::with('productTypes')->get();
        return view('admin.products.index', compact('productsData'));
    }

    public function edit($id)
    {
        $productsData = Products::with('productImgs')->find($id);
        $typesData = ProductTypes::get();
        return view('admin.products.edit',compact('productsData','typesData'));
    }

    public function create()
    {
        $typesData = ProductTypes::get();
        return view('admin.products.create', compact('typesData'));
    }

    public function store(Request $request)
    {
        $requsetData = $request->all();
    
        if($request->hasFile('img')) {
            $file = $request->file('img');
            $path = Storage::disk('myfile')->putFile('products', $file);
            $requsetData['img'] = Storage::disk('myfile')->url($path);
        }
        $product = Products::create($requsetData);

        foreach($request->imgs ?? [] as $img){
            $path = Storage::disk('myfile')->putFile('products', $img);
            $publicPath = Storage::disk('myfile')->url($path);
            ProductImgs::create([
                'product_id'=>$product->id,
                'img'=>$publicPath
            ]);
        }

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

        foreach($request->imgs ?? [] as $img){
            $path = Storage::disk('myfile')->putFile('products', $img);
            $publicPath = Storage::disk('myfile')->url($path);
            ProductImgs::create([
                'product_id'=>$id,
                'img'=>$publicPath
                ]);
            };

        $item->update($requsetData);
        return  redirect('/admin/products/');
    }

    public function destroy($id)
    {
        $item = Products::find($id);
        $other_imgs = ProductImgs::where('product_id',$id)->get();
        // $old_image = $item->img;

        foreach($other_imgs as $img){
            // $old_otherImgs = $img->img ;
            if(file_exists(public_path().$img->img)){
                File::delete(public_path().$img->img);
            }
        }
        if(file_exists(public_path().$item->img)){
            File::delete(public_path().$item->img);  
        }
        $item->delete();

        ProductImgs::where('product_id',$id)->delete();
        return  redirect('/admin/products/');
    }

    // public function fatchDelete($id)
    // {
    //     ProductImgs::find($id)
    //     ->delete();
    //     return  'success' ;
    // }
}
