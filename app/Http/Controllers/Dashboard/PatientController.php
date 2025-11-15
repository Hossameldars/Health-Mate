<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $patients = Patient::all(); 
        return view('Dashboard.Patient.index', compact('patients'));
        //dd('Dashboard index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.Patient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      

      Patient::create($request->all());
        // Patient::create ([
        //     'fullName' => $request->fullName,
        //     'email' => $request->email,
        //     'phoneNumber' => $request->phoneNumber,
        //     'address' => $request->address,
        //     'password'=> Hash::make($request->password),
        //     'DateofBirth'=> $request->DateofBirth,
        //     'gender'  => $request->gender,

        // ]);

        return redirect()->route('patient.index')->with('success', 'Patient created successfully.');
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
        $patient = Patient::find($id);
        return view('Dashboard.Patient.edit', compact('patient'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $patient= Patient::find($id);
      
      $patient->update([

            'fullName' => $request->fullName,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'address' => $request->address,
            'password'=> Hash::make($request->password),
            'DateofBirth'=> $request->DateofBirth,
            'gender'  => $request->gender,
      ]);
      return redirect()->route('patient.index')->with('success', 'patient created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect()->route('patient.index')->with('success', 'Patient deleted successfully.');
    }
}
