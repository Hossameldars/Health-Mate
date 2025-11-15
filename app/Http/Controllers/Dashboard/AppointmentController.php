<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::with(['patient', 'doctor'])->get();
        return view('Dashboard.appointment.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $patients = Patient::all();
        $doctors = Doctor::all();
        return view('Dashboard.appointment.create', compact('patients', 'doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'pat_id' => 'nullable|exists:patients,id',
        //     'doc_id' => 'required|exists:doctors,id',
        //     'appoint_date' => 'required|date|after_or_equal:today',
        //     'appoint_time' => 'required|date_format:H:i',
        // ]);

        Appointment::create([
            'pat_id' => $request->pat_id,
            'doc_id' => $request->doc_id,
            'appoint_date' => $request->appoint_date,
            'appoint_time' => $request->appoint_time,
        ]);
      

       return redirect()->route('Appointment.index')
                       ->with('success', 'تم إنشاء الموعد بنجاح');
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
        $appointment = Appointment::findOrFail($id);
        $patients = Patient::all();
        $doctors = Doctor::all();
        return view('Dashboard.appointment.edit', compact('appointment', 'patients', 'doctors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
        $appointment = Appointment::findOrFail($id);

        $appointment->update([
            'pat_id' => $request->pat_id,
            'doc_id' => $request->doc_id,
            'appoint_date' => $request->appoint_date,
            'appoint_time' => $request->appoint_time,
        ]);

        return redirect()->route('Appointment.index')
                         ->with('success', 'تم تحديث الموعد بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('Appointment.index')
                         ->with('success', 'تم حذف الموعد بنجاح');
    }
}
