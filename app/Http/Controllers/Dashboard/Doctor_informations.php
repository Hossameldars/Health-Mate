<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\DoctorInformation;
use App\Http\Controllers\Controller;
use App\Models\DoctorInformationArchive;

class Doctor_informations extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // You can add logic here to fetch doctor information from the database if needed
       $doctors_info = DoctorInformation::all();
        return view('Dashboard.Doctor_informations.index', compact('doctors_info'));

        // For now, just return the view
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $doctors_info = Doctor::all();
        return view('Dashboard.Doctor_informations.create',compact('doctors_info'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
  $valitate= $request->validate( [
        'number_of_patients' => 'required|integer',
        'about' => 'required|string|max:255',
        'salary' => 'required|numeric',
        'experience' => 'required|integer',
        'schedule' => 'required',
        'doctor_id' => 'required|exists:doctors,id',
      ]);
      DoctorInformation::create([
        
        'number_of_patients' => $request->number_of_patients,
        'about' => $request->about,
        'salary' => $request->salary,
        'experience' => $request->experience,
        'schedule' => json_encode($request->schedule),
        'doctor_id' => $request->doctor_id,
        
      ]);
      return redirect()->route('Doctor_informations.index')->with('success', 'Doctor information created successfully.');
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
        $doctorInfo = DoctorInformation::findOrFail($id);
        $doctors_info = Doctor::all();
        return view('Dashboard.Doctor_informations.edit', compact('doctorInfo', 'doctors_info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $valitate= $request->validate( [
            'number_of_patients' => 'required|integer',
            'about' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'experience' => 'required|integer',
            'schedule' => 'required',
            'doctor_id' => 'required|exists:doctors,id',
          ]);
          $doctorInfo = DoctorInformation::findOrFail($id);
          $doctorInfo->update([
            'number_of_patients' => $request->number_of_patients,
            'about' => $request->about,
            'salary' => $request->salary,
            'experience' => $request->experience,
            'schedule' => json_encode($request->schedule),
            'doctor_id' => $request->doctor_id,
          ]);
          return redirect()->route('Doctor_informations.index')->with('success', 'Doctor information updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      
        $doctorInfo = DoctorInformation::findOrFail($id);
        DoctorInformationArchive::create([
            'number_of_patients' => $doctorInfo->number_of_patients,
            'about' => $doctorInfo->about,
            'salary' => $doctorInfo->salary,
            'experience' => $doctorInfo->experience,
            'schedule' => $doctorInfo->schedule,
            'doctor_id' => $doctorInfo->doctor_id
        ]);
        $doctorInfo->delete();
        
        return redirect()->route('Doctor_informations.index')->with('success', 'Doctor information deleted successfully.');
    }
    
}
