<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class FormController extends Controller
{
    public function submitForm(Request $request){
        $request->validate(
            [
                'uname'=>'required|min:3|max:15',
                'email'=>'required|email',
                'password'=>'required'
            ],
            [
                'uname:require'=>'Welcome',
                'email.email'=>'Enter valid email address'
            ]
        );
        return "Form Submited Successfully";
    }
}
