<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\MedicalTest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
class MedicalTestAppointment extends Model
{
      use HasApiTokens, HasFactory;

    protected $table = 'medical_test_appointments';

    protected $fillable = [
        'pat_id',
        'test_id',
        'doc_id',
        'appoint_time',
        'appoint_date',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'pat_id');
    }

    public function medicalTest()
    {
        return $this->belongsTo(MedicalTest::class, 'test_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doc_id');
    }
}
