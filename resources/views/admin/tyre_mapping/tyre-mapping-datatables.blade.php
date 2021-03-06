
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
                                    Tyre Mapping Report
								</h3>
								<a href="{{ url('/tyre-mapping-create') }}" class="btn btn-satgreen pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New </a>
                                </div>
                                <div class="box-content nopadding">
									<x-alert />
                                <table id="FDataTable" class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                <th>SNO.</th>
                                <th>Godown</th>
                                <th>Truck Number</th>
                                <th>Tyre Type</th>
								<th>Serial Number</th>
                                <th>Meter Reading</th>
								<th>Upload Date</th>
                                <th>Tyre Images</th> 
                                <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
									@foreach($tyre_mappings as $row)
                                    <?php 
                                    $itemId = commonController::getValueStatic('hsn_and_serialnumbers','item','id',$row->Serial_number);
                                    $item = commonController::getValueStatic('items','item_name','id',$itemId);
                                    ?>
                                <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ commonController::getValueStatic('godowns','name','id',$row->godown) }}</td>
                                <td>{{ commonController::getValueStatic('trucks','truck_number','id',$row->truck_number) }}</td>
                                <td>{{ commonController::getValueStatic('tyre_type','tyre_type','id',$row->tyre_type) }}</td>   
                                <td>{{ commonController::getValueStatic('hsn_and_serialnumbers','serial_number','id',$row->Serial_number) }} / {{$item}} </td> 
                                <td>{{ $row->meter_reading }}</td>
                                <td>{{ date('d-m-Y', strtotime($row->upload_date)) }}</td>
								<td>
                                    <?php 
                                    $imagedecode = json_decode($row->images);
                                    foreach ($imagedecode as $img) {
                                        ?>
                                        <a target="_blank" href="{{ asset('storage/app/public/TyreImages/'.$img) }}">
                                        <img style="width: 60px;height:60px;" src="{{ asset('storage/app/public/TyreImages/'.$img) }}" alt="Tyre Image">
                                        </a>
                                        <?php
                                    }
                                    ?>
                                    
                                </td>    
                                <td>
                                {{-- <a href="{{ url('purchase-item-details/'.$row->id) }}" class="btn" rel="tooltip" title="View">
                                <i class="fa fa-pen"></i>
                                </a> --}}
                              
                                <a onclick="return confirm('Are Your Sure ?')" href="{{ url('commonDeleteRecord?table=tyre_mappings&key=id&value='.$row->id) }}" class="btn" rel="tooltip" title="Delete">
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


