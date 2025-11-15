<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Specialization;
use App\Http\Controllers\Controller;

class SpecializationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $specs=  Specialization::all();
       return view('Dashboard.Specialization.index',compact('specs'));
        
      //dd('Dashboard specialization index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.Specialization.create');
        //dd('Dashboard specialization create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      

        Specialization::create([
            'name' => $request->name,
            
        ]);

        return redirect()->route('specialization.index')->with('success', 'Specialization created successfully.');
        //dd('Dashboard specialization store');
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
