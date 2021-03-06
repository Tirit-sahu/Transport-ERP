
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
								
								@include('admin.tab_maintenance')

								<div class="tab-content padding tab-content-inline tab-content-bottom">                                  
                                    
                                
                                <div class="col-sm-12">
                                <div class="box box-color box-bordered">
                                <div class="box-title">
                                <h3>
                                    Item Issue Reports
								</h3>
								<a href="{{ url('/itemIssue') }}" class="btn btn-satgreen pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Item Issue</a>
                                </div>
                                <div class="box-content nopadding">
									<x-alert />
                                <table id="FDataTable" class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                <th>SNO.</th>
                                <th>Issue Number</th>
                                <th>Issue Date</th>
                                <th>Vehicle NO. </th>
								<th>Driver</th>
								<th>Meter Reading</th>
                                <th>Narration</th> 
                                <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
									@php $i=0; @endphp
									@foreach($item_issues as $row)
                                <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $row->issueNumber }}</td>
                                <td>{{ $row->issueDate }}</td>
                                <td >{{ commonController::getValueStatic('trucks','truck_number','id',$row->vehicle) }}</td>
								<td >{{ commonController::getValueStatic('drivers','employeeName','id',$row->driver) }}</td>   
								<td >{{ $row->meterReading }}</td>    
								<td >{{ $row->narration }}</td>  								                         
                                <td>
                                <a href="{{ url('ItemIssueDetails/'.$row->id) }}" class="btn" rel="tooltip" title="View">
                                <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ url('ItemIssueEdit/'.$row->id) }}" class="btn" rel="tooltip" title="Edit">
                                <i class="fa fa-edit"></i>
                                </a>
                                <a onclick="return confirm('Are Your Sure ?')" href="{{ url('itemIssueDelete/'.$row->id) }}" class="btn" rel="tooltip" title="Delete">
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


