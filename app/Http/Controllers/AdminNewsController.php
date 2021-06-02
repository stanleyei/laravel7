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
        return view('admin.news.index_edit', compact('newsData','total'));
    }

    public function show(){
        $newsData = News::get();
        $total = News::count();
        return view('admin.news.index_edit', compact('newsData','total'));
    }

    public function create()
    {
        return view('admin.news.create');
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

        // $parser = xml_parser_create();
        // xml_parse_into_struct($parser, $item->content, $values);
        // foreach ($values as $key => $val) {
        //     if ($val['tag'] == 'IMG') {
        //         $first_src = $val['attributes']['SRC'];
        //         array_push($data, $first_src);
        //     }
        // }

        $pattern = '/src="(\S*)"/';
        preg_match_all($pattern, $item->content, $match);

        if(file_exists(public_path().$old_image)){
            File::delete(public_path().$old_image);
        }
        $arrayMatch = array_pop($match);
        dd($arrayMatch);

        File::delete(public_path($arrayMatch));
        
        $item->delete();
        return  redirect('/admin/news/');
    }
}

