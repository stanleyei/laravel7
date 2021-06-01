<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
}
