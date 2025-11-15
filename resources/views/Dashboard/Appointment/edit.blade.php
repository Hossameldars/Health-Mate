@extends('Dashboard.layouts.master')

@section('content')
<div class="container">
    <h1 class="mb-4">Update appointment</h1>

    <form action="{{ route('Appointment.update',$appointment->id) }}" method="POST" > 
        @csrf
              @method('PUT') 
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="pat_id" class="form-label">Patient</label>
                <select name="pat_id" id="pat_id" class="form-select" required>
                    <option value="">{{$appointment->Patient->fullName}}</option>
                         @foreach($patients as $patient)
                        <option value="{{ $patient->id }}">
                            {{ $patient->fullName }} 
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label for="doc_id" class="form-label">Doctor</label>
                <select name="doc_id" id="doc_id" class="form-select" required>
                    <option value="">{{$appointment->Doctor->firstName}}</option>
                    @foreach($doctors as $doctor)
                        <option value="{{ $doctor->id }}">
                            {{ $doctor->firstName }} {{ $doctor->lastName }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="appoint_date" class="form-label">Appointment date</label>
                <input type="date" name="appoint_date" id="appoint_date" class="form-control" required  value ="{{ $appointment->appoint_date }}">
            </div>

            <div class="col-md-6">
                <label for="appoint_time" class="form-label">ِAppointment time</label>
                <input type="time" name="appoint_time" id="appoint_time" class="form-control" required value ="{{ $appointment->appoint_time }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">save</button>
        {{-- <a href="{{ route('appointments.index') }}" class="btn btn-secondary">إلغاء</a> --}}
    </form>
</div>
@endsection