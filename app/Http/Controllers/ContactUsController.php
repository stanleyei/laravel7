<?php

namespace App\Http\Controllers;

use App\PersonalData;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    //
    public function contact(Request $request)
    {
        //這是另一種寫法，但無法設置導向錨點
        // $request->validate([
        //     'g-recaptcha-response' => 'recaptcha',
        // ]);

        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'recaptcha',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect('/#form-box')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();
        Mail::to('jp60303@gmail.com')
            ->send(new OrderShipped($data));

        PersonalData::create($request->all());
        return redirect('/');
    }
}
