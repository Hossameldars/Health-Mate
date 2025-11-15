<?php

namespace App\Http\Controllers\dashboard;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class citescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citys= City::all();
      return view('Dashboard.cites.index',compact('citys'));
        //dd('Dashboard cites index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
      
     return view('Dashboard.cites.create'); 
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      city::create([
            'name' => $request->name,
            
          
        ]);

        return redirect()->route('cities.index')->with('success', 'City created successfully.');
        //dd('Dashboard cites store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
