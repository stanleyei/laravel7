<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Facade\FlareClient\Http\Response;

class LineBotController extends Controller
{
    public function index(Request $request)
    {
        $text = $request->events[0]['message']['text'];
        error_log($text);
        return response('ok', '200');
    }
}
