<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Doctor;
use App\Models\DoctorImage;
use Illuminate\Http\Request;
use App\Models\DoctorArchive;
use App\Models\DoctorInformation;
use App\Models\DoctorImageArchive;
use App\Http\Controllers\Controller;
use App\Models\DoctorInformationArchive;

class DoctorArchivesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
      $doctors = DoctorArchive::with('image')->get();
//return $doctors;
    return view('Dashboard.Doctor_archives.index', compact('doctors'));
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
    
      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $doctorarch=DoctorArchive::findOrFail($id);
         $doctorImage = DoctorImageArchive::where('doctor_id', $doctorarch->id)->first();
         $doctorInformation = DoctorInformationArchive::where('doctor_id', $doctorarch->id)->first();
      $doctor= Doctor::create([
            'firstName' => $doctorarch->firstName,
            'lastName' => $doctorarch->lastName,
            'username' => $doctorarch->username,
            'email' => $doctorarch->email,
            'phoneNumber' => $doctorarch->phoneNumber,
            'password' => $doctorarch->password,
            'city_id' => $doctorarch->city_id,
            'spec_id' => $doctorarch->spec_id,
            'user_id' => $doctorarch->user_id,
            'rating' => $doctorarch->rating,
           
       ]);
       if ($doctorImage) {
        $imageData = $doctorImage->toArray();
        $imageData['doctor_id'] = $doctor->id;
        DoctorImage::create($imageData);
        DoctorInformation::create([
            'experience' => $doctorInformation->experience,
            'number_of_patients' => $doctorInformation->number_of_patients,
            'about' => $doctorInformation->about,
            'schedule' => $doctorInformation->schedule,
            'salary' => $doctorInformation->salary,
            'doctor_id' => $doctor->id,
        ]);
    }

    // ثم احذف 
       $doctorarch->delete();
        
        return redirect()->route('Doctor_archives.index')->with('success', 'Doctor archived successfully.');
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
        $doctorArchive = DoctorArchive::findOrFail($id);
        $doctorImageArchive = DoctorImageArchive::where('doctor_id', $doctorArchive->id)->first();

        // حذف السجل المؤرشف للطبيب
        $doctorArchive->delete();

        // حذف الصورة المؤرشفة للطبيب إذا كانت موجودة
        if ($doctorImageArchive) {
            $doctorImageArchive->delete();
        }

        return redirect()->route('Doctor_archives.index')->with('success', 'Doctor archive deleted successfully.');
    }
}
