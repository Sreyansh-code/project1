<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id=0){
        return view ('user', ['id'=>$id]);
    }
}
