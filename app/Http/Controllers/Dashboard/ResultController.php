<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\MedicalTestResult;
use App\Http\Controllers\Controller;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all medical test results
        $results = MedicalTestResult::all();
$doctors= \App\Models\Doctor::all();
$patients= \App\Models\Patient::all();
$appointements = \App\Models\MedicalTestAppointment::all();
        // Return the view with the results
        return view('Dashboard.MedicalTestResult.index', compact('doctors','results','patients','appointements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $appointments = \App\Models\MedicalTestAppointment::all();
      $doctors=Doctor::all();
      $patients= \App\Models\Patient::all();
        // Return the view to create a new medical test result
        return view('Dashboard.MedicalTestResult.create',compact('doctors','patients','appointments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
      
 $filePath = $request->file('result_file')->store('medical_test_results', 'public');
        // Create a new medical test result
        MedicalTestResult::create([
            'appointment_id' => $request->appointment_id,
            'doc_id' => $request->doc_id,
            'pat_id' => $request->pat_id,
            'result_file' => $filePath,
            'notes' => $request->notes,
        ]);

        // Redirect to the results index with a success message
        return redirect()->route('test_result.index')->with('success', 'Medical test result created successfully.');  
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
