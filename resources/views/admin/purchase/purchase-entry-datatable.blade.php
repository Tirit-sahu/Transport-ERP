
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
                                    Purchase Entry Report
								</h3>
								<a href="{{ url('/purchase-entry-create') }}" class="btn btn-satgreen pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New </a>
                                </div>
                                <div class="box-content nopadding">
									<x-alert />
                                <table id="FDataTable" class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                <th>SNO.</th>
                                <th>Supplier Name</th>
                                <th>Bill NO.</th>
                                <th>Date</th>
								<th>Receiving Proof</th>
								<th>Discount</th>
                                <th>Purchase Type</th> 
                                <th>Godown</th>
                                <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
									@php $i=0; @endphp
									@foreach($purchase_entries as $row)
                                <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ commonController::getValueStatic('suppliers','name','id',$row->supplier_name) }}</td>
                                <td>{{ $row->bill_number }}</td>
                                <td >{{ date('d-m-Y', strtotime($row->date)) }}</td>
								<td >{{ $row->receiving_proof }}</td>   
								<td >{{ $row->discount }}</td>    
								<td >{{ $row->purchase_type }}</td>  							
                                
                                <td >{{ commonController::getValueStatic('godowns','name','id',$row->godown) }}</td> 
                                <td>
                                <a href="{{ url('purchase-item-details/'.$row->id) }}" class="btn" rel="tooltip" title="View">
                                <i class="fa fa-eye"></i> Item Details
                                </a>
                                <a href="{{ url('purchase-entry-pdf/'.$row->id) }}" class="btn" rel="tooltip" title="PDF">
                                    <i class="fa fa-file-pdf-o"></i> PDF
                                </a>
                                {{-- <a href="{{ url('ItemIssueEdit/'.$row->id) }}" class="btn" rel="tooltip" title="Edit">
                                <i class="fa fa-edit"></i>
                                </a> --}}
                                <a onclick="return confirm('Are Your Sure ?')" href="{{ url('commonDeleteRecord?table=purchase_entries&key=id&value='.$row->id) }}" class="btn" rel="tooltip" title="Delete">
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
                    
					@include('admin.document_footer');
					
				</div>
				
				
				
				
			</div>
		</div>

</div>


