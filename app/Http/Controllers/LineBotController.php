<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class LineBotController extends Controller
{
    public function index(Request $request)
    {
        return response('ok', '200');
    }
}
