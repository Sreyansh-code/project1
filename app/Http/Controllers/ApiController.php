<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            ['id'=>1, 'title'=>"A", 'author'=>"A"],
            ['id'=>2, 'title'=>"B", 'author'=>"B"],
            ['id'=>3, 'title'=>"C", 'author'=>"C"],
        ])->header('X-Page-Name', 'Books data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            'name'=> 'ABC',
            'id'=> $id,
            'Author'=>"Me"
        ])->cookie('role', 'Admin', 1);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
