<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\City;
use App\Models\User;
use App\Models\Doctor;
use App\Models\DoctorImage;
use Illuminate\Http\Request;
use App\Models\DoctorArchive;
use App\Models\Specialization;
use App\Models\DoctorInformation;
use App\Models\DoctorImageArchive;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use App\Models\DoctorInformationArchive;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
    

        //dd('hossan');         
      $doctors = Doctor::all(); 
    
        // return $col=Http::get('http://127.0.0.1:8000/api/doctors');
      return view('Dashboard.Doctor.index', compact('doctors'));
      
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
      $citys=City::all();
      $users= User::all(); 
      $specs=Specialization::all();
    return view('Dashboard.Doctor.create',compact('citys','users','specs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $validated= $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:doctors,username',
            'email' => 'required|string|email|max:255|unique:doctors,email',
            'password' => 'required|string|min:8',
            'phoneNumber' => 'required|string|max:15',
            'city_id' => 'required|exists:cities,id',
            'spec_id' => 'required|exists:specializations,id',
            'user_id' => 'required|exists:users,id',
            'rating' => 'nullable|numeric|min:0|max:5',]);
    $doctor=  Doctor::create ([
        'firstName'=>$request->firstName,
        'lastName'=>$request->lastName,
        'username'=>$request->username,
        'email'=>$request->email,
        'password'=> Hash::make($request->password),
        'phoneNumber'=>$request->phoneNumber,
        "city_id"=>$request->city_id,
        "spec_id"=>$request->spec_id,
        "user_id"=>$request->user_id,
        "rating"=>$request->rating,
        "gender"=>$request->gender
        
       ]);
      
         $image = $request->file('image_name')->getClientOriginalName();
    $path=  $request->file('image_name')->storeAs('doctor_img', $image, 'images');
  
      DoctorImage::create([
            'image_name' => $image,
            'doctor_id' => $doctor->id,
        ]);
        return redirect()->route('Doctor.index')->with('success', 'Doctor created successfully.');
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
        return view('Dashboard.Doctor.edit', [
            'doctor' => Doctor::findOrFail($id),
            'citys' => City::all(),
            'users' => User::all(),
            'specs' => Specialization::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $doctor= Doctor::find($id);
      
      $doctor->update([
        'firstName'=>$request->firstName,
        'lastName'=>$request->lastName,
        'username'=>$request->username,
        'email'=>$request->email,
        'password'=> Hash::make($request->password),
        'phoneNumber'=>$request->phoneNumber,
        "city_id"=>$request->city_id,
        "spec_id"=>$request->spec_id,
        "user_id"=>$request->user_id,
        "rating"=>$request->rating,
      ]);
    
      
      return redirect()->route('Doctor.index')->with('success', 'Doctor created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
  public function destroy(string $id)
{
    $doctor = Doctor::findOrFail($id);
    $doctorImage = DoctorImage::where('doctor_id', $doctor->id)->first();
  $doctorInformation =DoctorInformation::where('doctor_id', $doctor->id)->first();
    // أولاً أنشئ السجل المؤرشف للطبيب
    $doctorArchive = DoctorArchive::create([
        'firstName' => $doctor->firstName,
        'lastName' => $doctor->lastName,
        'username' => $doctor->username,
        'email' => $doctor->email,
        'phoneNumber' => $doctor->phoneNumber,
        'password' => $doctor->password,
        'city_id' => $doctor->city_id,
        'spec_id' => $doctor->spec_id,
        'user_id' => $doctor->user_id,
        'rating' => $doctor->rating,
        'deleted_at' => now(),
    ]);

    // ثم أنشئ نسخة من الصورة مع تعديل الـ doctor_id
    if ($doctorImage) {
        $imageData = $doctorImage->toArray();
        $imageData['doctor_id'] = $doctorArchive->id;
        DoctorImageArchive::create($imageData);
    }
    if($doctorInformation) {
        $infoData = $doctorInformation->toArray();
        $infoData['doctor_id'] = $doctorArchive->id;
        $infoData['deleted_at'] = now(); // إضافة حقل الحذف
        DoctorInformationArchive::create($infoData);
    }
    $doctorInformation->delete();

    // ثم احذف الطبيب الأصلي
    $doctor->delete();


    return redirect()->route('Doctor.index')->with('success', 'Doctor deleted successfully.');
}}
