@extends('Dashboard.layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('Dashboard/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('Dashboard/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Dashboard/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('Dashboard/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Dashboard/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<style>
    /* التعديلات الجديدة فقط */
    #example1 {
        width: 100% !important;
        margin: 0 auto;
    }
    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
</style>
@endsection

@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto"style="color: #5D9CEC;">Doctor_archives</h4>
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
								
								
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									
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
          <div class="row row-sm">
            <div class="col-xl-12">
              <div class="card">
                <div class="card-header pb-0">
                  <div class="d-flex justify-content-between">
                    <div  class="row justify-content-center mt-4">
                    
                  
                  </div>
                  
                
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example1" style="width:100%">
                      <thead>
                        <tr>
                          
                          <th class="wd-15p border-bottom-0">id</th>
                          <th class="wd-15p border-bottom-0">image</th>
                          <th class="wd-15p border-bottom-0">firstName</th>
                          <th class="wd-15p border-bottom-0">lastName</th>
                          <th class="wd-20p border-bottom-0">username</th>
                          <th class="wd-15p border-bottom-0">E-mail</th>
                          <th class="wd-10p border-bottom-0">gender</th>
                          <th class="wd-10p border-bottom-0">phoneNumber</th>
                          <th class="wd-25p border-bottom-0">rating</th>
                          <th class="wd-25p border-bottom-0">secp_name</th>
                          <th class="wd-25p border-bottom-0">city_name</th>
                          <th class="wd-25p border-bottom-0">controls</th>

                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($doctors as $doctor)
                        <tr>
                          <td>{{$doctor->id}}</td>
                  <td>
                    @if ($doctor->image)
                      <img src="{{Url::asset('images/doctor_img/' . $doctor->image->image_name) }}" 
         alt="Doctor Image" 
         class="img-fluid rounded-circle" 
         style="width: 50px; height: 50px;">
                    @endif
    
                    </td>
                          <td>{{ $doctor->firstName }}</td>
                          <td>{{ $doctor->lastName }}</td>
                          <td>{{ $doctor->username }}</td>
                          <td>{{ $doctor->email }}</td>
                          <td>{{ $doctor->gender }}</td>
                          <td>{{ $doctor->phoneNumber }}</td>
                          <td>{{ $doctor->rating }}</td>
                          <td>{{ $doctor->City->name }}</td>
                          <td>{{ $doctor->Specialization->name }}</td>
                          <th>
                            <div class="buttons-container">
                            <a href="{{ route('Doctor_archives.show', $doctor->id) }}" class="btns btn-edit" title="Restore">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="icon" viewBox="0 0 24 24">
        <path d="M13 3a9 9 0 1 0 8.94 10.24 1 1 0 0 0-1.98-.28A7 7 0 1 1 12 5a7.09 7.09 0 0 1 4.9 2H15a1 1 0 0 0 0 2h5a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v2.14A8.94 8.94 0 0 0 13 3z"/>
    </svg>
</a>

                            @include('Dashboard.Doctor_archives.delete') 
                          </div>
                          </th>
                        </tr>
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
{{-- <script>
    $(document).ready(function() {
        $('#example1').DataTable({
            responsive: true,
            autoWidth: false,
            scrollX: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script> --}}
@endsection