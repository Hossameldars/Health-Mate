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
							<h4 class="content-title mb-0 my-auto">Forms</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Form-Layouts</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
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
        <form action="{{ route('medical_appointment.update',$appointment->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
				<div class="row">
			
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
								
								</div>
								
								<div class="row">
									<div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
										<div class="card card-body pd-20 pd-md-40 border shadow-none">
											<h5 class="card-title mg-b-20"></h5>
											<div class="form-group">
												<div class="row row-sm">
													<div class="col-sm-9">
														<label class="main-content-label tx-11 tx-medium tx-gray-600">patient</label>
														<div class="row row-sm">
															<div class="col-sm-7">
																<select class="form-control select2-no-search"name="pat_id">
																	<option label="hhgjh one">
                                {{ $appointment->patient->fullName }}
																	</option>
                                  @foreach ($patients as $patient)
																	<option value="{{ $patient->id }}" {{ old('pat_id') == $patient->id ? 'selected' : '' }}>
                                    {{ $patient->fullName }}
                                
																	</option>
																@endforeach
                                </option>
																</select>
															</div>
														
														</div>
													</div>
												
												</div>
                        
											</div>
                        <div class="form-group">
												<div class="row row-sm">
													<div class="col-sm-9">
														<label class="main-content-label tx-11 tx-medium tx-gray-600">test_name</label>
														<div class="row row-sm">
															<div class="col-sm-7">
																<select class="form-control select2-no-search"name="test_id">
																	<option label="hhgjh one">
                                {{ $appointment->MedicalTest->test_name }}
																	</option>
                                  @foreach ($medicals as $medical)
																	<option value="{{ $medical->id}}">
                                    {{ $medical->test_name }}
                                  
																	
																	</option>
																@endforeach
                                </option>
																</select>
															</div>
														
														</div>
													</div>
												
												</div>
                        
											</div>
                      <div class="form-group">
												<div class="row row-sm">
													<div class="col-sm-9">
														<label class="main-content-label tx-11 tx-medium tx-gray-600">Doctor</label>
														<div class="row row-sm">
															<div class="col-sm-7">
																<select class="form-control select2-no-search"name="doc_id">
																	<option label="hhgjh one">
                                {{ $appointment->doctor->fristName }} {{ $appointment->doctor->lastName }}
																	</option>
                                  @foreach ($doctors as $doctor)
																	<option value="{{ $doctor->id}}">
                                    {{ $doctor->fristName }} {{ $doctor->lastName  }}
                                  
																	
																	</option>
																@endforeach
                                </option>
																</select>
															</div>
														
														</div>
													</div>
												
												</div>
                        
											</div>
                      <div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">appointment_date</label> <input class="form-control" required="" name="appoint_date" type="date" value="{{ $appointment->appoint_date }}">
											</div>
                        <div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">appointment_date</label> <input class="form-control" required="" name="appoint_time" type="time" value="{{ $appointment->appoint_time }}">
											</div>
                    
                      
                  
											{{-- <div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">Card Number</label>
												<div class="pos-relative">
													<input class="form-control pd-r-80" required="" type="text">
													<div class="d-flex pos-absolute t-5 r-10"><img alt="" class="wd-30 mg-r-5" src="{{URL::asset('Dashboard/img/visa.png')}}"> <img alt="" class="wd-30" src="{{URL::asset('Dashboard/img/mastercard.png')}}"></div>
												</div>
											</div> --}}
											
                    <br>
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