
@include('admin.layouts.head')
@include('admin.layouts.header')
<?php 
use \App\Http\Controllers\Admin\commonController;
use Illuminate\Http\Request;
?>
<div class="container-fluid" id="content">
@include('admin.layouts.leftheader')
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h2>Tamanna RoadCarrier</h2>
					</div>
					<div class="pull-right">
						
						@include('admin.dashboard_header');
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="index.php">Dashboard</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
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
                                    Rack Handling Reports
								</h3>
								<a href="{{ url('/rackHandling') }}" class="btn btn-satgreen pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Rack Handling</a>
                                </div>
                                <div class="box-content nopadding">
									<x-alert />
                                <table id="FDataTable" class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                <th>SNO.</th>                                
                                <th>Vehicle NO. </th>
                                <th>Owner Name</th>
								<th>Mobile</th>
								<th>Gate Pass Number</th>
                                <th>Bag</th>
                                <th>Rate</th>
                                <th>Commission AMT</th>								
                                <th>Payment AMT</th> 
                                <th>Payment Date</th> 
                                <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
									@php $i=0; @endphp
									@foreach($rack_handlings as $row)
                                <tr>
                                <td>{{ ++$i }}</td>                              
                                <td >{{ commonController::getValueStatic('trucks','truck_number','id',$row->vehicle) }}</td>
                                <td >{{ commonController::getValueStatic('truckowners','owner_name','id',$row->vehicle) }}</td>
								<td >{{ commonController::getValueStatic('truckowners','mobile','id',$row->vehicle) }}</td>
								<td>{{ $row->gate_pass_number }}</td>	
                                <td >{{ $row->bag }}</td>   
                                <td >{{ $row->rate }}</td>    
                                <td >{{ $row->comm_amt }}</td>   
                                							
                                <td >{{ $row->payment_amt }}</td>  			
                                <td>{{ $row->payment_date }}</td>					                         
                                <td>
                               
                                <a href="{{ url('rackHandlingEdit/'.$row->id) }}" class="btn" rel="tooltip" title="Edit">
                                <i class="fa fa-edit"></i>
                                </a>
                                <a onclick="return confirm('Are Your Sure ?')" href="{{ url('/COMMOMdestroy') }}?table=rack_handlings&key=id&value={{$row->id}}" class="btn" rel="tooltip" title="Delete">
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

</div>


