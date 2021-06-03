<?php

namespace App\Http\Controllers;

use App\PersonalData;
use Illuminate\Http\Request;
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
        
        if($validator->fails()) {
            $errors = $validator->errors();
            return redirect('/#form-box')
                    ->withErrors($validator)
                    ->withInput();
        }

        PersonalData::create($request->all());
        return redirect('/');
    }
}
