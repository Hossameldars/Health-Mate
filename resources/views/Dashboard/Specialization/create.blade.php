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
        <form action="{{ route('specialization.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
				<div class="row">
			
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								
								
								<div class="row">
									<div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
										<div class="card card-body pd-20 pd-md-40 border shadow-none">
											<h5 class="card-title mg-b-20">enter specialization name</h5>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">name</label> <input class="form-control" required="" name="name" type="text">
											</div>
                    
                
											{{-- <div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">Card Number</label>
												<div class="pos-relative">
													<input class="form-control pd-r-80" required="" type="text">
													<div class="d-flex pos-absolute t-5 r-10"><img alt="" class="wd-30 mg-r-5" src="{{URL::asset('Dashboard/img/visa.png')}}"> <img alt="" class="wd-30" src="{{URL::asset('Dashboard/img/mastercard.png')}}"></div>
												</div>
											</div> --}}
										
                          {{-- <div class="form-group">
												<div class="row row-sm">
                          	<label class="main-content-label tx-11 tx-medium tx-gray-600">rating</label>
													  <div class="col-md-6">
                                <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image_name" required>

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
												
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