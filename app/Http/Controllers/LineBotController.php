<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Facade\FlareClient\Http\Response;

class LineBotController extends Controller
{
    public function index(Request $request)
    {
        $text = $request->events[0]['message']['text'] ?? '';
        error_log($text);
        $replyToken = $request['events'][0]['replyToken'];

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . env('LINE_CHANNEL_ASCCES_TOKEN')
        ])->post('https://api.line.me/v2/bot/message/reply', [
            'replyToken' => $replyToken,
            'messages' => [
                [
                    'type' => 'text',
                    'text' => 'hello'
                ]
            ]
        ]);

        return response('ok', '200');
    }
}
