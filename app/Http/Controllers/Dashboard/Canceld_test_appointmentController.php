<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Canceld_test_appointmentController extends Controller
{
  public function index()
    {
      
   $appoiontments= DB::table('canceled_medical_test_appointments')
            ->join('patients', 'canceled_medical_test_appointments.pat_id', '=', 'patients.id')
            ->join('doctors', 'canceled_medical_test_appointments.doc_id', '=', 'doctors.id')
            ->join('medical_tests', 'canceled_medical_test_appointments.test_id', '=', 'medical_tests.id')
            ->select(
                'canceled_medical_test_appointments.*',
                'patients.fullName as patient_name',
                'doctors.firstName as doctor_name',
                'medical_tests.test_name as test_name'
            )
            ->orderBy('canceled_at', 'desc')
            ->get();
        // This method should return a view with the list of canceled appointments
        // You can fetch the canceled appointments from the database and pass them to the view
        return view('Dashboard.canceld_Test_appointment.index',compact('appoiontments'));
            }
}
