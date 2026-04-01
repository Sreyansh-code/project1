<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        return $this->middleware('check.course')->only('profile');
    }

    public function students(){
        return "This is my students function of StudentController";
    }

    public function profile(){
        $data=[
            'name'=>'Auto',
            'role'=>'admin',
            'id'=>1
        ];
        return $data;
    }

    public function student($name){
        return view ('student', ['name'=>$name]);
    }

    public function course($course="Not Selected"){
        return view ('course', ['course'=>$course]);
    }
}
