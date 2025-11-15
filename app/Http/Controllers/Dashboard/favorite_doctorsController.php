<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class favorite_doctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $favoriteDoctors= DB::table('favorite_doctors')
          
            ->join('doctors', 'favorite_doctors.doctor_id', '=', 'doctors.id')
            ->join('cities', 'doctors.city_id', '=', 'cities.id')
            ->join('specializations', 'doctors.spec_id', '=', 'specializations.id')
            
            ->select(
                'favorite_doctors.*',
              
                'doctors.firstName as firstName',
                'doctors.lastName as lastName',
                'doctors.username as username',
                'doctors.email as email',
                'doctors.phoneNumber as phoneNumber',
                'doctors.city_id as city_id',
                'doctors.spec_id as spec_id',
                'doctors.user_id as user_id',
               'doctors.rating as rating',
                'doctors.gender as gender',
                 'cities.name as city_name', // تم التصحيح هنا
          'specializations.name as spec_name', // اختياري
                
            )
            ->get();
        //  $favoriteDoctors = DB::table('favorite_doctors')
        // ->join('doctors', 'favorite_doctors.doctor_id', '=', 'doctors.id')
        // ->join('cities', 'doctors.city_id', '=', 'cities.id') // أضف هذا السطر
        // ->join('specializations', 'doctors.spec_id', '=', 'specializations.id') // اختياري إذا أردت اسم التخصص
        // ->select(
        //     'favorite_doctors.id as favorite_id', // فقط ما تحتاجه من favorite_doctors
        //     'doctors.firstName as firstName',
        //     'doctors.lastName as lastName',
        //     'doctors.username as username',
        //     'doctors.email as email',
        //     'doctors.phoneNumber as phoneNumber',
        //     'cities.name as city_name', // تم التصحيح هنا
        //     'specializations.name as specialization_name', // اختياري
        //     'doctors.rating as rating',
        //     'doctors.gender as gender'
        // )
        // ->get();
      return view('Dashboard.favorite_doctors.index',compact('favoriteDoctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $patients=  Patient::all();
    $doctors = Doctor::all();
        return view('Dashboard.favorite_doctors.create',compact('patients','doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'patient_id' => 'required|exists:patients,id',
        //     'doctor_id' => 'required|exists:doctors,id',
        // ]);
    //    DB::table('favorite_doctors')->insert([
    //  'patient_id'=>$requst->doctor_id,
    //  'doctor_id'=>$requst->doctor_id
    // ]);
    DB::table('favorite_doctors')->insert([
            'patient_id' => $request->patient_id,
            'doctor_id' => $request->doctor_id,
        ]);

        $patient = Patient::findOrFail($request->patient_id);
        $doctor = Doctor::findOrFail($request->doctor_id);

        if ($patient->favoriteDoctors()->where('doctor_id', $doctor->id)->exists()) {
            return redirect()->back()->with('error', 'This doctor is already in your favorites.');
        }

        $patient->favoriteDoctors()->attach($doctor);

    //  return redirect()->route('dashboard.favorite_doctors.index')->with('success', 'Doctor added to favorites successfully.');
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
        $favoriteDoctor = DB::table('favorite_doctors')->where('id', $id)->first();

        if (!$favoriteDoctor) {
            return redirect()->back()->with('error', 'Favorite doctor not found.');
        }

        DB::table('favorite_doctors')->where('id', $id)->delete();

        return redirect()->route('dashboard.favorite_doctors.index')->with('success', 'Favorite doctor removed successfully.');
    }
}
