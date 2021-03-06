<?php 
use \App\Http\Controllers\Admin\commonController;
use Illuminate\Http\Request;
?>

@include('admin.layouts.head')
@include('admin.layouts.header')

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
								
								@include('admin.tab_maintenance')

								<div class="tab-content padding tab-content-inline tab-content-bottom">                                  
                                    
                                
                                <div class="col-sm-12">
                                <div class="box box-color box-bordered">
                                <div class="box-title">
                                <h3>
                                    <i class="fa fa-list" aria-hidden="true"></i> Turck Service Details Reports
								</h3>
								<a href="{{ url('/truckServiceShow') }}" class="btn btn-satgreen pull-right"><i class="fa fa-list" aria-hidden="true"></i> Truck Service Reports</a>
                                </div>
                                <div class="box-content nopadding">
                                    <x-alert />
                                <table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,null,text,null,null,null,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
                                <thead>
                                <tr>
                                <th>SNO.</th>
                                <th>Issue Number</th>
                                <th>Service Type</th>
                                <th>Expiry Date</th>
                                <th>AMT</th>
                                <th>Remark</th>
                                <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
									@php $i=0; @endphp
									@foreach($truck_service_details as $row)
                                <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $truck_services->serviceNumber }}</td>
                                <td>{{ commonController::getValueStatic('head_masters','headName','id',$row->serviceType) }}</td>
                                <td >{{ $row->expiryDate }}</td>
                                <td >{{ $row->AMT }}</td>   
                                <td >{{ $row->remark }}</td>   
                                <td>
                               
                                <a onclick="return confirm('Are Your Sure ?')" href="{{ url('/COMMOMdestroy') }}?table=truck_service_details&key=id&value={{$row->id}}" class="btn" rel="tooltip" title="Delete">
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


