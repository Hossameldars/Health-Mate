@extends('Dashboard.layouts.master')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    Add a doctor to favorites
                </div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('favorite_doctors.edit') }}">
                      
                        @csrf
                        
                        <div class="mb-3">
                            <label for="patient_id" class="form-label">Patient</label>
                            <select class="form-select" id="patient_id" name="patient_id" required>
                                <option value="">choose patient</option>
                                @foreach($patients as $patient)
                                    <option value="{{ $patient->id }}" 
                                        {{ old('patient_id') == $patient->id ? 'selected' : '' }}>
                                        {{ $patient->fullName }} 
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="doctor_id" class="form-label">Doctor</label>
                            <select class="form-select" id="doctor_id" name="doctor_id" required>
                                <option value="">choose Doctor</option>
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}" 
                                        {{ old('doctor_id') == $doctor->id ? 'selected' : '' }}>
                                        {{ $doctor->firstName }} {{ $doctor->lastName }} 
                                        ({{ $doctor->specialization->name ?? 'غير محدد' }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-heart"></i>  Add to Favorites
                            </button>
                            {{-- <a href="{{ route('favorite-doctors.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> رجوع
                            </a> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection