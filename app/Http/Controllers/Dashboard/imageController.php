<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\DoctorImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class imageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  view('Dashboard.image');
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
      $image = $request->file('image_name')->getClientOriginalName();
    $path=  $request->file('image_name')->storeAs('images/doctor_img', $image, 'public');
  
      DoctorImage::create([
            'image_name' => $path,
            'doctor_id' => $request->doctor_id,
        ]);
        return dd('Image uploaded successfully.');
      
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
