<?php 
use \App\Http\Controllers\Admin\commonController;
use Illuminate\Http\Request;
?>
@include('admin.layouts.head')
@include('admin.layouts.header')
<body>
	<div class="container-fluid" id="content">
	{{-- @include('admin.layouts.leftheader') --}}
		{{-- <div id="main"> --}}
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
					<form action="{{ url('/receiving/payment') }}" method="POST">
						@csrf
                <div class="col-sm-12">
						<div class="box box-bordered box-color satblue">
							<div class="box-title">
								<h3>
									<i class="fa fa-bars"></i>Receiving Payment</h3>
							</div>
							<div class="box-content nopadding">
                                <!-- Tab start -->
                                @include('admin.tab')
                                <!-- tab end -->
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
									<div class="row">
										
										@if (Session::has('success'))
										<div class="alert alert-success alert-dismissible">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<center>
										<i class="icon fa fa-check"></i> Successfully Submitted Receiving Payment										
										<a style="text-decoration: none;" target="_blank" href="{{ url('/payment/invoice/'.Session::get('success')) }}">
										<span class="label label-info"> <i class="fa fa-print" aria-hidden="true"></i> Print Recept</span>
										</a>
										</center>
										</div>
										@endif

															                                    

                                        <div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Voucher Number</strong>
												</label>
												<input type="text" class="form-control" name="voucher_number" value="<?php echo $vnumber; ?>" readonly>										
											</div>
                                        </div>

                                        <div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Payment Date</strong>
												</label>
												<input type="text" class="form-control" value="{{ date('d-m-Y', strtotime(now())) }}" name="paymentDate" id="paymentDate">									
											</div>
                                        </div>                                                                         
                                        						
                                            
									</div>
									
									</form>
									
                               
									
									
									
									
									
	 <div class="col-sm-12">
<div class="box box-color box-bordered">
	
<div class="box-title">
	<h3>
		Receiving Payment 
	</h3>
</div>
<div style="overflow: scroll;">
	<x-alert />

<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,text,null,text,text,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null">
<thead>

<tr>
	<th>SN.</th>
    <th>Loading NO.</th>
    <th>Received Date</th>
	<th>Truck NO.</th>
	<th>Truck Owner</th>
    <th>Weight</th>
    <th>Received Weight</th>
    <th>Bag</th>
    <th>Received Bag</th>
    <th>Shortage Bag</th>
    <th>Shortage MT</th>
    <th>Shortage RS</th>
    <th>Weight Gain</th>
    <th>Diesel Advance</th>
    <th>Case Advance</th>
    <th>Commission</th>
    <th>Gross Amt</th>
    <th>Net Amt</th>
    <th>Narration</th>
    {{-- <th>Action</th> --}}
</tr>
</thead>
<tbody>
	<?php $i=0; ?>
	@foreach($loading_receiveings as $row)
	<tr>
		<td>{{ ++$i }} </td>
        <td><input name="loading_receiveing_id[]" value="{{ $row->id }}" type="checkbox"> {{ $row->loading_no }}</td>
        <td>{{ date('d-m-Y',strtotime($row->receiving_date)) }}</td>
		<td>{{ $row->truck_number }}</td>
		<td>{{ $row->owner_name }}</td>
        <td>{{ $row->weight }}</td>
        <td>{{ $row->received_mt }}</td>
        <td>{{ $row->bag }}</td>
        <td>{{ $row->received_bag }}</td>
        <td>{{ $row->shortage_bag }}</td>
        <td>{{ $row->shortage_mt }}</td>
        <td>{{ $row->shortage_rs }}</td>
        <td>{{ $row->weight_gain }}</td>
        <td>{{ $row->diesel_advance }}</td>
        <td>{{ $row->cash_advance }}</td>
        <td>{{ $row->commision_rate }}</td>
        <td>{{ $row->gross_amt }}</td>
        <td>{{ $row->net_amt }}</td>
        <td>{{ $row->narration }}</td>
		{{-- <td><a href="{{ url('/receiving/payment/'.$row->id)}}" class="btn" rel="tooltip" title="pay">
			<i class="fa fa-edit"></i> Pay
		</a></td> --}}
	</tr>
	@endforeach	
</tbody>
</table>
<center>
<button class="btn btn-primary" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>	Submit</button>
<a href="{{ url('/paymentReport') }}" class="btn btn-teal">- REPORTS -</a></center>
</center>
<br>
</div>
<BR/>
</div>
</div>
									</div>
									</div>                                   
							
								{{-- </div> --}}
							</div>
						</div>
					</form>
					</div>
                    
                    
                    
                    					
				</div>
				
				
				
				
			</div>
		</div>
	</div>
	

</body>



</html>

<script type="text/javascript">										
    $( function() {
    $( "#paymentDate").datepicker(
    { 
    dateFormat: 'dd-mm-yy',
    changeMonth: true,
    changeYear: true,
    showButtonPanel: true,
    }
    );
    } );
</script>



