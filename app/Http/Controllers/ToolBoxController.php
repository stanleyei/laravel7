<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ToolBoxController extends Controller
{
    public function summernoteStore(Request $request)
    {  
        if($request->hasFile('img')) {
            $file = $request->file('img');
            $path = Storage::disk('myfile')->putFile('summernote', $file);
            $publicPath = Storage::disk('myfile')->url($path);
            return $publicPath;
        }
        return 'fail';
    }

    public function summernoteDelete(Request $request)
    {
        File::delete(public_path().$request->src);
        return 'success';
    }

    public function swal($icon, $title, $text)
    {
        return ['icon'=>$icon , 'title'=>$title, 'text'=>$text];
    }
}
