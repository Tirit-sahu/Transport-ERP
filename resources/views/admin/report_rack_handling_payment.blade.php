
@include('admin.layouts.head')
@include('admin.layouts.header')
<?php 
use \App\Http\Controllers\Admin\commonController;
use Illuminate\Http\Request;
?>
<div class="container-fluid" id="content">
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
								
								{{-- @include('admin.tab_maintenance') --}}

								<div class="tab-content padding tab-content-inline tab-content-bottom">                                  
                                    
                                
                                <div class="col-sm-12">
                                <div class="box box-color box-bordered">
                                <div class="box-title">
                                <h3>
                                    Rack Handling Payment Reports
								</h3>
								<a href="{{ url('/rackHandlingPayment') }}" class="btn btn-satgreen pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Rack Handling Payment</a>
                                </div>
                                <div class="box-content nopadding">
									<x-alert />
                                <table id="FDataTable" class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                <th>SNO.</th>  
								<th>Rack Loading Date</th>                               
                                <th>Vehicle NO. </th>
                                <th>Owner Name</th>
								<th>Mobile</th>
								<th>Gate Pass Number</th>
                                <th>Bag</th>
                                <th>Rate</th>
                                <th>Commission AMT</th>								
                                <th>Rack Handling AMT</th>
                                <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
									@php $i=0; @endphp
									@foreach($rack_handling_payments as $row)
									<?php 
										$vehicle = commonController::getValueStatic('rack_handlings','vehicle','id',$row->rack_handlings_id)
									?>
                                <tr>
                                <td>{{ ++$i }}</td>      
								<td>{{ $row->payment_date }}</td>                        
                                <td >{{ commonController::getValueStatic('trucks','truck_number','id',$vehicle) }}</td>
                                <td >{{ commonController::getValueStatic('truckowners','owner_name','id',$vehicle) }}</td>
								<td >{{ commonController::getValueStatic('truckowners','mobile','id',$vehicle) }}</td>

								<td>{{ commonController::getValueStatic('rack_handlings','gate_pass_number','id',$row->rack_handlings_id) }}</td>	
                                <td >{{ commonController::getValueStatic('rack_handlings','bag','id',$row->rack_handlings_id) }}</td>   
                                <td >{{ commonController::getValueStatic('rack_handlings','rate','id',$row->rack_handlings_id) }}</td>    
                                <td >{{ commonController::getValueStatic('rack_handlings','comm_amt','id',$row->rack_handlings_id) }}</td>   
                                							
                                <td >{{ $row->payment_amt }}</td> 			
                                <td>
                               
                                {{-- <a href="{{ url('rackHandlingEdit/'.$row->id) }}" class="btn" rel="tooltip" title="Edit">
                                <i class="fa fa-edit"></i>
                                </a> --}}
                                <a onclick="return confirm('Are Your Sure ?')" href="{{ url('/COMMOMdestroy') }}?table=rack_handling_payments&key=id&value={{$row->id}}" class="btn" rel="tooltip" title="Delete">
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

</div>


