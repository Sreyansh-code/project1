<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\MoveWhitelistExcludesToCoverage;

class MovieController extends Controller
{
    private $movies = [
        1 => ['id' => 1, 'name' => 'Movie 1'],
        2 => ['id' => 2, 'name' => 'Movie 2']
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->movies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id = request()->query('id');
        $title = request()->query('title');
        if($id && $title) {
            $this->movies[$id] = ['id' => $id, 'name' => $title];
            return response()->json(['message' => 'Movie created successfully', 'movie' => $this->movies[$id]]);
        }
        else{
            return response()->json(['error' => 'Id and title are required'], 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'This is the show method of movie controller with id: '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'This is the edit method of movie controller with id: '.$id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'This is the destroy method of movie controller with id: '.$id;
    }
}
