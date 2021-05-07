<?php

namespace App\Http\Controllers;

use App\PersonalData;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    public function contact(Request $request)
    {
        PersonalData::create($request->all());
        return  redirect('/');
    }
}
