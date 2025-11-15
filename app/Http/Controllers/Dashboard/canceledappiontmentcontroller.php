<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class canceledappiontmentcontroller extends Controller
{
    public function index()
    {
       $appoiontments= DB::table('canceled_appointments')
            ->join('patients', 'canceled_appointments.pat_id', '=', 'patients.id')
            ->join('doctors', 'canceled_appointments.doc_id', '=', 'doctors.id')
            ->select(
                'canceled_appointments.*',
                'patients.fullName as patient_name',
                'doctors.firstName as doctor_name'
            )
            ->orderBy('canceled_at', 'desc')
            ->get();
        // This method should return a view with the list of canceled appointments
        // You can fetch the canceled appointments from the database and pass them to the view
        return view('Dashboard.canceld_appointment.index',compact('appoiontments'));
    }
}
