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
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'recaptcha',
        ]);
        
        if($validator->fails()) {
            $errors = $validator->errors();
            return redirect('/')
                    ->withErrors($validator)
                    ->withInput();
        }

        PersonalData::create($request->all());
        return redirect('/');
    }
}
