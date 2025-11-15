@extends('Dashboard.layouts.master')
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('Dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto"></h4><span class="text-muted mt-1 tx-13 mr-2 mb-0"></span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
						
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
				
						</div>
						<div class="mb-3 mb-xl-0">
							
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
				
			
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
				
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
			
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
			
				</div>
				<!-- /row -->

				<!-- row -->
        <form action="{{ route('Doctor_informations.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
				<div class="row">
			<!-- /resources/views/post/create.blade.php -->


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									
								</div>
							
								<div class="row">
									<div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
										<div class="card card-body pd-20 pd-md-40 border shadow-none">
											<h5 class="card-title mg-b-20">Your Doctor_informations Details</h5>
											  <div class="form-group">
												<div class="row row-sm">
													<div class="col-sm-9">
														<label class="main-content-label tx-11 tx-medium tx-gray-600">Doctor's name</label>
														<div class="row row-sm">
										<div class="col-sm-7">
    <select class="form-control select2-no-search @error('doctor_id') is-invalid @enderror" name="doctor_id" required>
        <option value="" selected disabled>Choose one</option>
        @foreach ($doctors_info as $doctor)
            <option value="{{ $doctor->id }}" @if(old('doctor_id') == $doctor->id) selected @endif>
                {{ $doctor->firstName }}
            </option>
        @endforeach
    </select>
    @error('doctor_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
														
														</div>
													</div>
												
												</div>
                        
											</div>
                      <div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">experience</label> <input class="form-control" required="" name="experience" type="text" value="{{ old('experience') }}">
											</div>
                      <div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">number_of_patients</label> <input class="form-control" required="" name="number_of_patients" type="text" value="{{ old('number_of_patients') }}" >
											</div>
                      {{-- <div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">about</label> <input class="form-control" required="" name="about" type="text">
											</div> --}}
                      <div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">schedule</label> <input class="form-control" required="" name="schedule" type="text" value="{{ old('schedule') }}">
											</div>
                        <div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">salary</label> <input class="form-control" required="" name="salary" type="text" value="{{ old('salary') }}">
											</div>
                      
                         <div class="form-group">
                      <label class="main-content-label tx-11 tx-medium tx-gray-600">about</label> 
                          <textarea class="form-control" aria-label="With textarea" name="about"  >{{ old('about') }}</textarea>
                            @error('about')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
                          </div>
									
										
                    
                  
											<button class="btn btn-main-primary btn-block">submit</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
      
				</div>
      </form>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Select2 js -->
<script src="{{URL::asset('Dashboard/plugins/select2/js/select2.min.js')}}"></script>
<!-- Form-layouts js -->
<script src="{{URL::asset('Dashboard/js/form-layouts.js')}}"></script>
@endsection