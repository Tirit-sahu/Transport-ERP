@extends('admin.layouts.body')
@section('content')
<?php use \App\Http\Controllers\Admin\commonController;
use Illuminate\Http\Request;
?>
<style>
    table {
        border-spacing: 0px!important;
        font-size: 12px!important;
    }
    td  {
            padding: 0px!important;
            text-align: center;
        }
    th    {padding: 10px!important;}
</style>

<?php
$vehicle_no = '';
$loading_no = '';
$from_date = '';
$to_date = '';

if (!empty($_GET['vehicle_no'])) {
	$vehicle_no = $_GET['vehicle_no'];
}
if (!empty($_GET['loading_no'])) {
	$loading_no = $_GET['loading_no'];
}
if (!empty($_GET['from_date'])) {
	$from_date = $_GET['from_date'];
}
if (!empty($_GET['to_date'])) {
	$to_date = $_GET['to_date'];
}
?>
<script type="text/javascript">
	
	$(function() {
   
	 $('.receiving_date').datepicker({ dateFormat: 'dd-mm-yy',
											changeMonth: true,
											changeYear: true,
											showButtonPanel: true, }).val();
	 $('#from_date').datepicker({ dateFormat: 'dd-mm-yy',
											changeMonth: true,
											changeYear: true,
											showButtonPanel: true, }).val();
	 $('#to_date').datepicker({ dateFormat: 'dd-mm-yy',
											changeMonth: true,
											changeYear: true,
											showButtonPanel: true, }).val();

  });

</script>



<div class="col-sm-12">
</br>
</br>
		
{{-- <div class="row">
<form action="{{ url('/admin/dispatch/receive/create') }}" method="GET" autocomplete="off">
										 <div class="col-sm-2">
											<div class="form-group">
											<label for="textfield" class="control-label"><strong>Vehicle NO.<span class="err" style="color:#F00;">*</span></strong></label>
												<select name="vehicle_no" id="vehicle_no" data-rule-required="true" class='chosen-select form-control'  onchange="search();">
                                               	<option value=""> Select All</option>
                                               	@foreach($trucks as $truck)
                                               		<option value="{{ $truck->id }}">{{ $truck->truck_number }}</option>
                                               	@endforeach	
												
											</select>

											<script>document.getElementById("vehicle_no").value = "{{ $vehicle_no }}"; </script>
											</div>
										</div>


                                        <div class="col-sm-2">
											<div class="form-group">
											<label for="textfield" class="control-label"><strong>LOADING NO.</strong></label>
												<select name="loading_no" id="loading_no" data-rule-required="true" class='chosen-select form-control'>
													<option value=""> Select All</option>
                                               	@foreach($loading_number as $load)
                                               		<option value="{{ $load->id }}">{{ $load->loading_no }}</option>
                                               	@endforeach	
												
											</select>

											<script>document.getElementById("loading_no").value = "{{ $loading_no }}"; </script>
											</div>
										</div>

										<div class="col-sm-2">
											<div class="form-group">
											<label for="textfield" class="control-label"><strong>FROM DATE</strong></label>
												<input type="text" name="from_date" data-rule-required="true" 	data-rule-maxlength="255" value="{{ $from_date }}" id="from_date" class="form-control">
											</div>
										</div>
 
										<div class="col-sm-2">
											<div class="form-group">
											<label for="textfield" class="control-label"><strong>TO DATE </strong></label>
												<input type="text" name="to_date" data-rule-required="true" data-rule-maxlength="255" value="{{ $to_date }}" id="to_date" class="form-control">
											</div>
										</div>

										<div class="col-sm-2">
											<div class="form-group">
											<center> 
                                    <button class="btn btn-satgreen">Search</button>
                                      <a href="{{ route('receive.create') }}" class="btn btn-primary">Reset</a>
                                       </center>
											</div>
										</div>										
							</form>
										
										        
                               </div> --}}

						<div class="box box-bordered box-color satblue">
					
								<x-alert />
<div class="box-title">
		
<h3>
	<i class="fa fa-bars"></i>@yield('formtitle')</h3>
</div>
<div class="box-content nopadding" style="overflow: scroll;">
<table id="receivingFDataTable" class="table table-bordered table-hover">
	<thead>
<tr>
	<th>SNO.</th>
	<th>LOADING <br> DATE </th>
	<th>RECEIVING <br> DATE </th>
	<th>LOADING NO.</th>
	<th>TRUCK OWNER</th>
	<th>VEHICLE NO. </th>
	<th>WEIGHT(MT)</th>
    <th>BAGS</th>
    <th>RATE </th>
    <th>FROM PLACE</th>
    <th>TO PLACE </th>
    <th>CASH <br> ADVANCE </th>
	<th>DIESEL <br> ADVANCE </th>
	<th>DIESEL <br> ADVANCE <br>LTR. </th>
	<th>CONMMISSION </th>
	<th>RECEIVED <br> BAG</th>
	<th>SHORTAGE <br> BAG </th>
    <th>RECEIVED <br> MT </th>
	<th>SHORTAGE <br> MT </th>
	<th>SHORTAGE <br> RS</th>
	<th>GROSS <br> AMT</th>
	<th>NET <br> AMT</th>
	<th>Is Payment</th>
	<th>Loading Type</th>
    <th>NARRATION </th>   
	<th style="width: 200px;">Options</th>
</tr>
</thead>
<tbody>
	<?php $weight=0; $commision_rate=0; $diesel_advance=0; $diesel_advance_ltr=0; $cash_advance=0; ?>
		@foreach($loading_receiveings as  $row)
		<?php 


		$loading_type = commonController::getValueStatic('loading_entries','loading_type','id',$row->loading_entries_id);

		$weight += $row->weight; 
		$commision_rate += $row->commision_rate; 
		$diesel_advance += $row->diesel_advance; 
		$cash_advance += $row->cash_advance; 
		$diesel_advance_ltr += $row->diesel_advance_ltr;
		?>
		<tr>
		<td>{{ $loop->index+1 }}</td>
		<td>{{ date('d-m-Y', strtotime($row->loading_date)) }}</td>
		<td>{{  date('d-m-Y', strtotime($row->receiving_date)) }}</td>
		<td>{{ $row->loading_no }}</td>
		<td>{{ $row->owner_name }}</td>
		<td>{{ $row->truck_number }}</td>
		<td>{{ $row->weight }}</td>
		<td>{{ $row->bag }}</td>
		<td>{{ $row->freight_rate }}</td>
		<td>{{ $row->from_place }}</td>
		<td>{{ $row->to_place }}</td>
		<td>{{ $row->cash_advance }}</td>
		<td>{{ $row->diesel_advance }}</td>
		<td>{{ $row->diesel_advance_ltr }}</td>
		<td>{{ $row->commision_rate }}</td>

		<td>{{ $row->received_bag }}</td>
		<td>{{ $row->shortage_bag }}</td>
		<td>{{ $row->received_mt }}</td>
		<td>{{ $row->shortage_mt }}</td>
		<td>{{ $row->shortage_rs }}</td>
		<td>{{ $row->gross_amt }}</td>
		<td>{{ $row->net_amt }}</td>
		<td><?php 
			if ($row->is_payment==0) {
				echo "Not Pay";
			}else{
				echo "Paid";
			}
		?></td>
		<td>{{ ($loading_type==1)?"Phad":"Main Trip" }}</td>
		<td>{{ $row->narration }}</td>		
		<td>			
			<a href="{{ url('admin/receiving?received_id='.$row->id)}}" class="btn" rel="tooltip" title="Edit">
				<i class="fa fa-edit"></i>
			</a>
			<a href="{{ url('admin/receiving/delete/'.$row->id)}}" class="btn" rel="tooltip" title="Delete">
				<i class="fa fa-trash"></i>
			</a>		
		</td>
		</tr>
		@endforeach					
</tbody>
<tfoot>
	<tr>
		<th></th>
		<th>TOTAL:</th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th>{{ $weight }}</th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th>{{ $cash_advance }}</th>
		<th>{{ $diesel_advance }}</th>
		<th>{{ $diesel_advance_ltr }}</th>
		<th>{{ $commision_rate }}</th>		
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>	   
		<th></th>
	</tr>
</tfoot>
</table>
</div>					
</div>
                                    
                                    
                                    
                                    
                                  
							</div>
						</div>
<script type="text/javascript">
	function save($id){
		var receiving_date=document.getElementById("receiving_date"+$id).value;
		var receiving_mt=document.getElementById("receiving_mt"+$id).value;
		var shortagetype=document.getElementById("shortagetype"+$id).value;
		var shiortage=document.getElementById("shiortage"+$id).value;
		var narres=document.getElementById("narres"+$id).value;
	if(receiving_date==''){
			document.getElementById("rec_date"+$id).innerHTML='Fill Receive Date';
	}

if(receiving_mt==''){
			document.getElementById("mt"+$id).innerHTML='Fill Receive MT';
	}
	
    $.ajax({
    	url:"{{url('receive-store')}}?receiving_date="+receiving_date+"&receiving_mt="+receiving_mt+"&shortagetype="+shortagetype+"&shiortage="+shiortage+"&narres="+narres+"&id="+$id,
    	type:'get',
    	success:function(response){
    		document.getElementById("alert"+$id).innerHTML=response;
    	}

    });
	}

	

</script>

@endsection