@extends('Dashboard.layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('Dashboard/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('Dashboard/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Dashboard/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('Dashboard/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Dashboard/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">7
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto"style="color: #5D9CEC;" >Specialization</h4>
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
							<div class="btn-group dropdown">
							
							
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
          <div class="row row-sm">
            <div class="col-xl-12">
              <div class="card">
                <div class="card-header pb-0">
                  <div class="d-flex justify-content-between">
                    <div  class="row justify-content-center mt-4">
                      {{-- <div class="col-md-10 d-flex justify-content-end">
                        
                          <a href="{{ route('specialization.create') }}" class="btns btn-add">

                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                              <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                          </svg>
                      
                          </a>
              ` 
                      </div> --}}
                        <div class="col-md-10 d-flex justify-content-end">
    <a href="{{ route('specialization.create') }}" class="btn btn-primary">
         Add
    </a>
</div>
                  
                  </div>
                            </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example1">
                      <thead>
                        <tr>
                          
                          <th class="wd-15p border-bottom-0">id</th>
                          <th class="wd-15p border-bottom-0">name</th>
                          

                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($specs as $spec)
                        <tr>
                          <th>{{$spec->id}}</th>
                  
                          <td>{{ $spec->name }}</td>
                      
                          
                        @endforeach
                    
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!--/div-->
  
            <!--div-->
           
            <!--/div-->
  
            <!--div-->
          
            <!--/div-->
  
            <!--div-->
          
        
          </div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('Dashboard/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('Dashboard/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('Dashboard/js/table-data.js')}}"></script>
@endsection