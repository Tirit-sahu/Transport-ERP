
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
			
				<div class="row">
                
                <div class="col-sm-12">
					
                                <div class="col-sm-12">
                                <div class="box box-color box-bordered">
                                <div class="box-title">
                                <h3>
                                    Battery Opening Balance Report
								</h3>
								<a href="{{ url('/battery-opening-balance-create') }}" class="btn btn-satgreen pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New </a>
                                </div>
                                <div class="box-content nopadding">
									<x-alert />
                                <table id="FDataTable" class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                <th>SNO.</th>
                                <th>Truck NO.</th>
                                <th>Battery 1 Name</th>
                                <th>Battery 1 Serial No.</th>
								<th>Battery 1 Images</th>
                                <th>Battery 2 Name</th>
                                <th>Battery 2 Serial No.</th>
								<th>Battery 2 Images</th>
                                <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
									@foreach($battery_opening_balances as $row)
                                    
                                <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>
                                    {{ commonController:: getValueStatic('trucks','truck_number','id',$row->truck_number) }}
                                </td>
                                <td>{{ $row->battery1Name }}</td>
                                <td>{{ $row->battery1SerialNo }}</td>
                                <td>
                                    <?php 
                                    $battery1ImagesDecode = json_decode($row->battery1Images);
                                    if($battery1ImagesDecode!=''){                                        
                                        foreach ($battery1ImagesDecode as $img) {
                                        ?>
                                        <a target="_blank" href="{{ asset('storage/app/public/BatteryImages/'.$img) }}">
                                        <img style="width: 60px;height:60px;" src="{{ asset('storage/app/public/BatteryImages/'.$img) }}" alt="Tyre Image">
                                        </a>
                                        <?php
                                        }
                                    }                                    
                                    ?>
                                    
                                </td> 
                                <td>{{ $row->battery2Name }}</td>
                                <td>{{ $row->battery2SerialNo }}</td>
                                <td>
                                    <?php 
                                    $battery2ImagesDecode = json_decode($row->battery2Images);
                                    if($battery2ImagesDecode!=''){                                        
                                        foreach ($battery2ImagesDecode as $img) {
                                        ?>
                                        <a target="_blank" href="{{ asset('storage/app/public/BatteryImages/'.$img) }}">
                                        <img style="width: 60px;height:60px;" src="{{ asset('storage/app/public/BatteryImages/'.$img) }}" alt="Tyre Image">
                                        </a>
                                        <?php
                                        }
                                    }
                                    ?>
                                    
                                </td> 
								   
                                <td>
                                
                                <a href="{{ url('battery-opening-balance-edit/'.$row->id) }}" class="btn" rel="tooltip" title="View">
                                <i class="fa fa-pen"></i>
                                </a>
                              
                                <a onclick="return confirm('Are Your Sure ?')" href="{{ url('commonDeleteRecord?table=battery_opening_balances&key=id&value='.$row->id) }}" class="btn" rel="tooltip" title="Delete">
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


