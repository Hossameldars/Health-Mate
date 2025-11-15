<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\MedicalTest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MedicalTestAppointment;

class Medical_test_appointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $appointments= MedicalTestAppointment::all();
        return view ('Dashboard.medical_Appointment.index',compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $doctors=Doctor::all();
      $patients = Patient::all();
      $medicals = MedicalTest::all();
      return view('Dashboard.medical_Appointment.create', compact('doctors','patients', 'medicals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      

        MedicalTestAppointment::create([
            'pat_id' => $request->pat_id,
            'doc_id' => $request->doc_id,
            'test_id' => $request->test_id,
            'appoint_time' => $request->appoint_time,
            'appoint_date' => $request->appoint_date,
        ]);

        return redirect()->route('Dashboard.medical_appointment.index')->with('success', 'Medical Test Appointment created successfully.');
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
      return view('Dashboard.medical_Appointment.edit', [
            'appointment' => MedicalTestAppointment::findOrFail($id),
            'doctors' => Doctor::all(),
            'patients' => Patient::all(),
            'medicals' => MedicalTest::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $appointment = MedicalTestAppointment::findOrFail($id);
        $appointment->update([
            'pat_id' => $request->pat_id,
            'doc_id' => $request->doc_id,
            'test_id' => $request->test_id,
            'appoint_time' => $request->appoint_time,
            'appoint_date' => $request->appoint_date,
        ]);

        return redirect()->route('medical_appointment.index')->with('success', 'Medical Test Appointment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $appointment = MedicalTestAppointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('medical_appointment.index')->with('success', 'Medical Test Appointment deleted successfully.');
    }
}
