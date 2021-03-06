
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
                                    Tyre Opening Balance Report
								</h3>
								<a href="{{ url('/tyre-mapping-create') }}" class="btn btn-satgreen pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New </a>
                                </div>
                                <div class="box-content nopadding">
									<x-alert />
                                <table id="FDataTable" class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                <th>SNO.</th>
                                <th>Truck Number</th>
                                <th>Tyre Type</th>
								<th>Serial Number</th>
                                <th>Tyre Name</th>
                                <th>Meter Reading</th>
								<th>Upload Date</th>
                                <th>Tyre Images</th> 
                                <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
									@foreach($tyre_opening_balances as $row)
                                    
                                <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ commonController::getValueStatic('trucks','truck_number','id',$row->truck_number) }}</td>
                                <td>{{ commonController::getValueStatic('tyre_type','tyre_type','id',$row->tyre_type) }}</td>   
                                <td>{{ $row->serial_number }}</td> 
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->meter_reading }}</td>
                                <td>{{ date('d-m-Y', strtotime($row->upload_date)) }}</td>
								<td>
                                    <?php 
                                    if($row->images!=''){
                                    $imagedecode = json_decode($row->images);
                                    foreach ($imagedecode as $img) {
                                        ?>
                                        <a target="_blank" href="{{ asset('storage/app/public/TyreImages/'.$img) }}">
                                        <img style="width: 60px;height:60px;" src="{{ asset('storage/app/public/TyreImages/'.$img) }}" alt="Tyre Image">
                                        </a>
                                        <?php
                                    }
                                    }
                                    ?>
                                    
                                </td>    
                                <td>
                                
                                <a href="{{ url('tyre-opening-edit/'.$row->id) }}" class="btn" rel="tooltip" title="View">
                                <i class="fa fa-pen"></i>
                                </a>
                              
                                <a onclick="return confirm('Are Your Sure ?')" href="{{ url('commonDeleteRecord?table=tyre_opening_balances&key=id&value='.$row->id) }}" class="btn" rel="tooltip" title="Delete">
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


