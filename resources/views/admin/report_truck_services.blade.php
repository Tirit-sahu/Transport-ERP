
<?php 
use \App\Http\Controllers\Admin\commonController;
use Illuminate\Http\Request;
?>
@include('admin.layouts.head')
@include('admin.layouts.header')

<div class="container-fluid" id="content">
{{-- @include('admin.layouts.leftheader') --}}
		{{-- <div id="main"> --}}
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h2>Tamanna RoadCarrier</h2>
					</div>
					<div class="pull-right">
						
						@include('admin.dashboard_header');
						
					</div>
				</div>
				
				<div class="row">
                
                <div class="col-sm-12">
						<div class="box box-bordered box-color satblue">
							<div class="box-title">
								<h3>
									<i class="fa fa-bars"></i>Maintenance</h3>
							</div>
							<div class="box-content nopadding">
								
								@include('admin.tab_maintenance')

								<div class="tab-content padding tab-content-inline tab-content-bottom">                                  
                                    
                                
                                <div class="col-sm-12">
                                <div class="box box-color box-bordered">
                                <div class="box-title">
                                <h3>
                                    Truck Service Reports
								</h3>
								<a href="{{ url('/truckService') }}" class="btn btn-satgreen pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Truck Service</a>
                                </div>
                                <div class="box-content nopadding">
									<x-alert />
                                <table id="FDataTable" class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                <th>SNO.</th>
                                <th>Service Number</th>
                                <th>Service Date</th>
                                <th>Vehicle NO. </th>
                                <th>Driver</th>
                                <th>Meter Reading</th>
                                <th>Narration</th> 
                                <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
									@php $i=0; @endphp
									@foreach($truck_services as $row)
                                <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $row->serviceNumber }}</td>
                                <td>{{ $row->serviceDate }}</td>
                                <td >{{ commonController::getValueStatic('trucks','truck_number','id',$row->vehicle) }}</td>
                                <td >{{ commonController::getValueStatic('drivers','employeeName','id',$row->driver) }}</td>     
                                <td >{{ $row->meterReading }}</td>     
								<td >{{ $row->narration }}</td>  								                         
                                <td>
                                <a href="{{ url('truckServiceDetails/'.$row->id) }}" class="btn" rel="tooltip" title="View">
                                <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ url('truckServiceEdit/'.$row->id) }}" class="btn" rel="tooltip" title="Edit">
                                <i class="fa fa-edit"></i>
                                </a>

                                <a onclick="return confirm('Are Your Sure ?')" href="{{ url('/COMMOMdestroy') }}?table=truck_services&key=id&value={{$row->id}}" class="btn" rel="tooltip" title="Delete">
                                <i class="fa fa-times"></i>
                                </a>
                                
                                </td>
                                </tr>
								@endforeach

                                </tbody>
                                </table>


                                </div>
                                <BR/>
                                </div>
                                </div>
                                    

								</div>
							</div>
						</div>
					</div>
                    
					@include('admin.document_footer');
					
				</div>
				
				
				
				
			</div>
		{{-- </div> --}}

</div>


