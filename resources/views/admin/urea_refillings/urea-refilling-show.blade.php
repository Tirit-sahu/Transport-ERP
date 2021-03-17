
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
					
                                <div class="col-sm-12">
                                <div class="box box-color box-bordered">
                                <div class="box-title">
                                <h3>
                                    Urea Refilling
								</h3>
								<a href="{{ url('/urea-refilling-create') }}" class="btn btn-satgreen pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New </a>
                                </div>
                                <div class="box-content nopadding">
									<x-alert />
                                <table id="FDataTable" class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                <th>SNO.</th>
                                <th>Truck Number</th>
                                <th>Driver</th>
								<th>Place</th>
                                <th>Meter Reading</th>
                                <th>Date</th>
								<th>Liter</th>
                                <th>Amount</th> 
                                <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
									@foreach($urea_refillings as $row)
                                    
                                <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ commonController::getValueStatic('trucks','truck_number','id',$row->truckNumber) }}</td>
                                <td>{{ commonController::getValueStatic('drivers','employeeName','id',$row->driverName) }}</td>   
                                <td>{{ $row->place }}</td> 
                                <td>{{ $row->meterReading }}</td>
                                <td>{{ date('d-m-Y', strtotime($row->date)) }}</td>
                                <td>{{ $row->liter }}</td>
                                <td>{{ $row->amount }}</td>								  
                                <td>                                
                                <a href="{{ url('urea-refilling-edit/'.$row->id) }}" class="btn" rel="tooltip" title="Edit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>                              
                                <a onclick="return confirm('Are Your Sure ?')" href="{{ url('commonDeleteRecord?table=urea_refillings&key=id&value='.$row->id) }}" class="btn" rel="tooltip" title="Delete">
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
</div>
