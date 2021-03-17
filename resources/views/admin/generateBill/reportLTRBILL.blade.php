
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
                                    LTR BILL REPORT
								</h3>
								<a href="{{ url('/tyre-mapping-create') }}" class="btn btn-satgreen pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New </a>
                                </div>
                                <div class="box-content nopadding">
									<x-alert />
                                <table id="FDataTable" class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                <th>SNO.</th>
                                <th>Date</th>
                                <th>TO</th>
                                <th>GSTNO</th>
								<th>Name Of Center From - TO</th>
                                <th>Date Of Operation From - TO</th>
								<th>ITEM</th>
                                <th>Description</th> 
                                <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
									@foreach($generate_l_t_r_b_i_l_l_s as $row)                                   
                                <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ date('d-m-Y', strtotime($row->date)) }} </td>
                                <td>{{ $row->TO }}</td>
                                <td>{{ $row->GSTNO }}</td>
                                <td>{{ commonController::getValueStatic('places','placename','id',$row->NameOfCenterFrom)." - ".commonController::getValueStatic('places','placename','id',$row->NameOfCenterTO) }}</td>
                                <td>{{ date('d-m-Y', strtotime($row->DateOfOperationFrom))." - ".date('d-m-Y', strtotime($row->DateOfOperationTO)) }}</td>
                                <td>{{ commonController::getValueStatic('items','item_name','id',$row->ITEM) }}</td>
                                <td>{{ $row->description }}</td>
								 
                                <td>        
                                <a target="_blank" href="{{ url('invoice-ltr-bill/'.$row->id) }}"><i class="fa fa-print" aria-hidden="true"></i></a>                                                     
                                <a onclick="return confirm('Are Your Sure ?')" href="{{ url('commonDeleteRecord?table=generate_l_t_r_b_i_l_l_s&key=id&value='.$row->id) }}" class="btn" rel="tooltip" title="Delete">
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


