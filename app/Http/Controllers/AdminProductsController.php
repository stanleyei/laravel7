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
        $productsData = Products::find($id);
        $typesData = ProductTypes::get();
        $imgsData = ProductImgs::get();
        return view('admin.products.edit',compact('productsData','typesData','imgsData'));
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

        foreach($request->imgs as $img){
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
        $item->update($requsetData);

        $imgsData = ProductImgs::where('product_id',$id)->get();
        foreach($request->imgs as $img){
            $path = Storage::disk('myfile')->putFile('products', $img);
            $publicPath = Storage::disk('myfile')->url($path);
            $imgsData['img']->update($publicPath);
        };
    
        return  redirect('/admin/products/');
    }

    public function destroy($id)
    {
        $item = Products::find($id);
        $imgsData = ProductImgs::where('product_id',$id)->get();
        dd($imgsData[0]->img);
        $old_image = $item->img;
        if(file_exists(public_path().$old_image)){
            File::delete(public_path().$old_image);
        }
        $item->delete();
        return  redirect('/admin/products/');
    }
}
