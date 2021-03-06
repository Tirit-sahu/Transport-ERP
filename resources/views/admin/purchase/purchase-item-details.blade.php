
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
                    <x-alert />
                <div class="col-sm-12">
					
                                
                                <div class="col-sm-12">
                                <div class="box box-color box-bordered">
                                <div class="box-title">
                                <h3>
                                    Purchase Entry Report
								</h3>
								<a href="{{ url('/purchase-entry-report') }}" class="btn btn-satgreen pull-right"><i class="fa fa-list" aria-hidden="true"></i> Purchase Entry Datatable </a>
                                </div>
                                <div class="box-content nopadding">
                                <table id="FDataTable" class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                <th>SNO.</th>
                                <th>Item</th>
                                <th>Unit</th>
                                <th>Rate</th>
								<th>Qty</th>
								<th>GST</th>
                                <th>GST Type</th> 
                                <th>Total Without Tax</th>
                                <th>Total Amount</th>
                                <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
									@php $i=0; @endphp
									@foreach($purchase_entry_details as $row)
                                <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ commonController::getValueStatic('items','item_name','id',$row->item) }}</td>
                                <td>{{ commonController::getValueStatic('units','name','id',$row->unit) }}</td>
                                <td >{{ $row->rate }}</td>
								<td >{{ $row->qty }}</td>   
								<td >{{ $row->gst."%" }}</td>    
								<td >{{ $row->gst_type }}</td>  							
                                
                                <td >{{ $row->total_without_tax }}</td> 
                                <td >{{ $row->total_amount }}</td> 
                                <td>
                                
                                <a href="#" onclick="ItemSerialNumber({{$row->id}})" class="btn" rel="tooltip" title="View">
                                    <i class="fa fa-eye"></i> S.NO.
                                </a>
                                {{-- <a href="{{ url('ItemIssueEdit/'.$row->id) }}" class="btn" rel="tooltip" title="Edit">
                                <i class="fa fa-edit"></i>
                                </a> --}}
                                <a onclick="return confirm('Are Your Sure ?')" href="{{ url('commonDeleteRecord?table=purchase_entry_details&key=id&value='.$row->id) }}" class="btn" rel="tooltip" title="Delete">
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
                    
					{{-- @include('admin.document_footer'); --}}
					
				</div>
				
				
				
				
			</div>
		</div>

</div>


<div class="modal fade" id="serialNumberModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
              Item Serial Number
              <span id="hidden"></span>
          </h4>
        </div>
        <div class="modal-body" id="serialNumberModalBody">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>

<script>
    function ItemSerialNumber(id){
        // alert(id);
        $("#serialNumberModal").modal('show');
        $.ajax({
            type:'GET',
            url:'{{ url("getItemSerialNumber") }}?id='+id,
            success:function(res){
                console.log(res);
                $("#serialNumberModalBody").html(res);
            }
        });
    }
</script>


