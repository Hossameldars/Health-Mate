<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DoctorInformationArchive;

class DoctorinformationArchives extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all doctor information archives
        $doctors_info = DoctorInformationArchive::all();
        
        // Return the view with the archives
        return view('Dashboard.Doctor_informations_Archives.index', compact('doctors_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
