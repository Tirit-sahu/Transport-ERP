<?php use \App\Http\Controllers\Admin\commonController;
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
								<h3><i class="fa fa-bars"></i>Maintenance</h3>
							</div>
							<div class="box-content nopadding">
								
								@include('admin.tab_maintenance')

								<div class="tab-content padding tab-content-inline tab-content-bottom">                                  
                                    
                                
                                <div class="col-sm-12">
                                <div class="box box-color box-bordered">
                                <div class="box-title">
                                <h3> Driver Mapping Reports </h3>
                                <a href="{{ url('/driverMapping') }}" class="btn btn-satgreen pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Mapping</a>
                                </div>
                                <div class="box-content nopadding">
									<x-alert />
                                <table id="FDataTable" class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                <th>SNO.</th>                                                            
                                <th>Vehicle NO. </th>
                                <th>Driver</th>
								<th>Helper</th> 
								<th>Frome Date </th>    
                                <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
									@php $i=1; @endphp
									@foreach($driver_mappings as $row)
                                <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ commonController::getValueStatic('trucks','truck_number','id',$row->vehicle) }}</td>
                                <td>
									{{ commonController::getValueStatic('drivers','employeeName','id',$row->driver) }}
									<?php 
									if ($row->leaveDateD!='') {
										echo "<br>Leave : ".$row->leaveDateD;
									}
									?>
								</td>
                                <td >
									{{ commonController::getValueStatic('drivers','employeeName','id',$row->helper)}}
									<?php 
									if ($row->leaveDateH!='') {
										echo "<br>Leave : ".$row->leaveDateH;
									}
									?>
								</td>
                                <td >{{ $row->fromeDate }}</td>                              
                                <td>
                                
                                <a href="{{ url('driverMappingEdit/'.$row->id) }}" class="btn" rel="tooltip" title="Edit">
                                <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ url('driverMappingDelete/'.$row->id) }}" class="btn" rel="tooltip" title="Delete">
                                <i class="fa fa-times"></i>
								</a>
								
								<a style="cursor: pointer;" class="btn" rel="tooltip" title="Leave" onclick="leave_modal({{$row->id}})">
									<i class="fa fa-window-close" aria-hidden="true"></i> Leave
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
					@include('admin.modal_driver_mapping_leave');
					
				</div>
				
				
				
				
			</div>
		</div>

</div>

<script>
	function leave_modal(id){
		$("#leaveModal").modal('show');
		$("#mappingId").val(id);
	}
</script>

