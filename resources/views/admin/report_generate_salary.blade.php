
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
								
								@include('admin.tab_accounts')

								<div class="tab-content padding tab-content-inline tab-content-bottom">                                  
                                    
                                
                                <div class="col-sm-12">
                                <div class="box box-color box-bordered">
                                <div class="box-title">
                                <h3>
                                    Generate Salary Reports
								</h3>
								<a href="{{ url('/generateSalary') }}" class="btn btn-satgreen pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Generate Salary</a>
                                </div>
                                <div class="box-content nopadding">
									<x-alert />
                                <table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,text,text,null,text,null,null,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
                                <thead>
                                <tr>
                                <th>SNO.</th>                                
                                <th>Vehicle NO. </th>
                                <th>Driver</th>
								<th>AMT</th>
                                <th>Payment Mode</th> 
                                <th>Payment Date</th>
                                <th>Remark</th>
                                <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
									@php $i=0; @endphp
									@foreach($generate_salaries as $row)
                                <tr>
                                <td>{{ ++$i }}</td>                              
                                <td >{{ commonController::getValueStatic('trucks','truck_number','id',$row->vehicle) }}</td>
                                <td >{{ commonController::getValueStatic('drivers','employeeName','id',$row->driver) }}</td>   
                                <td >{{ $row->AMT }}</td>    
                                <td >{{ $row->paymentMode }}</td>    
                                <td>{{ $row->paymentDate }}</td>								
								<td >{{ $row->remark }}</td>  								                         
                                <td>
                               
                                <a href="{{ url('generateSalaryEdit/'.$row->id) }}" class="btn" rel="tooltip" title="Edit">
                                <i class="fa fa-edit"></i>
                                </a>
                                <a onclick="return confirm('Are Your Sure ?')" href="{{ url('/COMMOMdestroy') }}?table=generate_salaries&key=id&value={{$row->id}}" class="btn" rel="tooltip" title="Delete">
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


