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
            'Authorization' => 'Bearer ' ('vJ2ZAT1xjHPzCvPHd1gZiKJbjM4lA/3YmcHm5vqWmkRRF3ZXjO3EP67hwARRdP8/AgKqGRzr+7F7BcSBJaw8jfanWrP+2ALtdXwVMKuBo6u8J941R/qRFmFFR2bj8LNO9nlgyg6129Wxk4vtdlgA/AdB04t89/1O/w1cDnyilFU=')
        ])->post('https://api.line.me/v2/bot/message/reply' ,[
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
