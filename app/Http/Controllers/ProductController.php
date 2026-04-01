<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function product(){
    //     return 'This is my product controller';
    // }

    public function show($id){
        $data=[
            'name'=> 'Laptop',
            'id'=> $id,
            'price'=> 1000,
        ];
        return response()->view('product', $data)->cookie('appname', 'Product App', 60);
    }

    public function productRedirect(){
        // return redirect()->route('pd', ['id' => 123]);
        return redirect()->route('pd', compact('id'));
    }
}
