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
                                    <i class="fa fa-list" aria-hidden="true"></i> Item Issue Details Reports
								</h3>
								<a href="{{ url('/itemIssueReport') }}" class="btn btn-satgreen pull-right"><i class="fa fa-list" aria-hidden="true"></i> Item Issue Reports</a>
                                </div>
                                <div class="box-content nopadding">
                                    <x-alert />
                                <table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,null,text,null,text,text,text,null,null,null,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
                                <thead>
                                <tr>
                                <th>SNO.</th>
                                <th>Issue Number</th>
                                <th>Item</th>
                                <th>Unit</th>
                                <th>HSN</th>
                                <th>Exchange Receipt</th>
                                <th>Item Type</th> 
                                <th>QTY</th>
                                <th>Rate</th>
                                <th>AMT</th>
                                <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
									@php $i=0; @endphp
									@foreach($item_issue_details as $row)
                                <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $item_issues->issueNumber }}</td>
                                <td>{{ commonController::getValueStatic('items','item_name','id',$row->item) }}</td>
                                <td>{{ commonController::getValueStatic('units','name','id',$row->unit) }}</td>
                                <td >{{ $row->HSN }}</td>
                                <td >{{ $row->exchangeReceipt }}</td>   
                                <td >{{ $row->itemType }}</td>   
                                <td >{{ $row->QTY }}</td>  	
                                <td >{{ $row->rate }}</td>  	
                                <td >{{ $row->AMT }}</td>  	
                                <td>
                               
                                <a onclick="return confirm('Are Your Sure ?')" href="{{ url('itemIssueDetailsDelete/'.$row->id) }}" class="btn" rel="tooltip" title="Delete">
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


