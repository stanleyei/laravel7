<?php

namespace App\Http\Controllers;

use App\Products;
use App\ProductImgs;
use App\ProductTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Laravel\Ui\Presets\React;

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
        return view('admin.products.edit', compact('productsData', 'typesData'));
    }

    public function create()
    {
        $data = ProductTypes::get();
        $typesData = $data->filter(function ($item) {
            return $item->id != 4 and $item->id != 5;
        });
        $genderData = $data->filter(function ($item) {
            return $item->id > 3 and $item->id < 6;
        });

        return view('admin.products.create', compact('typesData', 'genderData'));
    }

    public function store(Request $request)
    {
        $requsetData = $request->all();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $path = Storage::disk('myfile')->putFile('products', $file);
            $requsetData['img'] = Storage::disk('myfile')->url($path);
        }
        $product = Products::create($requsetData);

        foreach ($request->imgs ?? [] as $img) {
            $path = Storage::disk('myfile')->putFile('products', $img);
            $publicPath = Storage::disk('myfile')->url($path);
            ProductImgs::create([
                'product_id' => $product->id,
                'img' => $publicPath
            ]);
        }

        return  redirect('/admin/products/');
    }

    public function update(Request $request, $id)
    {
        $item = Products::find($id);
        $requsetData = $request->all();
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $path = Storage::disk('myfile')->putFile('products', $file);
            $requsetData['img'] = Storage::disk('myfile')->url($path);
            File::delete(public_path() . $item->img);
        }

        foreach ($request->imgs ?? [] as $img) {
            $path = Storage::disk('myfile')->putFile('products', $img);
            $publicPath = Storage::disk('myfile')->url($path);
            ProductImgs::create([
                'product_id' => $id,
                'img' => $publicPath
            ]);
        };

        $item->update($requsetData);
        return  redirect('/admin/products/');
    }

    public function destroy($id)
    {
        $item = Products::with('productImgs')->find($id);

        foreach ($item->productImgs as $img) {
            if (file_exists(public_path() . $img->img)) {
                File::delete(public_path() . $img->img);
                $img->delete();
            }
        }
        if (file_exists(public_path() . $item->img)) {
            File::delete(public_path() . $item->img);
        }

        $item->delete();
        return  redirect('/admin/products/');
    }

    public function delete_img($path)
    {
        $img = ProductImgs::find($path);
        File::delete(public_path() . $img->img);
        $img->delete();

        return  'success';
    }
}
