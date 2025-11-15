<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\MedicalTest;
use Faker\Provider\Medical;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicalTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tests= MedicalTest::all();
        return view('Dashboard.medical_tests.index',compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Dashboard.medical_tests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MedicalTest::create([
        'test_name'=>$request->test_name,
        'schedule'=>$request->schedule,
        'description'=>$request->description,
        'cost'=>$request->cost
        ]);
        return redirect()->route('medical_test.index');
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
    $medical =  MedicalTest::findorfail($id);
       return view ('Dashboard.medical_tests.edit' ,compact('medical'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { 

      $med=MedicalTest::findorfail($id);
        $med->update([
        'test_name'=>$request->test_name,
        'schedule'=>$request->schedule,
        'description'=>$request->description,
        'cost'=>$request->cost
        ]);
        return redirect()->route('medical_test.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $dele = MedicalTest::findorfail(($id ));

      $dele->delete();
    return redirect()->route('medical_test.index');
    }

}
