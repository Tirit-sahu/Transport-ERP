<?php use \App\Http\Controllers\Admin\commonController;
use Illuminate\Http\Request;
?>
@extends('admin.layouts.body')
@section('content')
 
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

	$vehicle = 0;
	$consignor = 0;
	$consignee = 0;
	$from_place = 0;
	$to_place = 0;

	if (isset($_GET['vehicle'])) {
		$vehicle = $_GET['vehicle'];
	}
	if (isset($_GET['consignor'])) {
		$consignor = $_GET['consignor'];
	}
	if (isset($_GET['consignee'])) {
		$consignee = $_GET['consignee'];
	}
	if (isset($_GET['from_place'])) {
		$from_place = $_GET['from_place'];
	}
	if (isset($_GET['to_place'])) {
		$to_place = $_GET['to_place'];
	}
?>

<div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<a href="{{ url('/admin/loading')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"><i class="fa fa-plus" aria-hidden="true"></i> Add Loading Entry  </a>
	<h3>
	Loading Entry Datatables
	</h3>
</div>
<div class="box-content nopadding"  style="overflow: scroll;">

	<form action="{{ url('admin/dispatch/load') }}">
		<div class="row">		
			
			<center>

			<div class="col-sm-2">
			<div class="form-group">
			<label for="vehicle" class="control-label"><strong>VEHICLE NO</strong></label>
			<select name="vehicle" id="vehicle" class='chosen-select form-control'>                                                
			</select>
			</div>
			</div>

			<div class="col-sm-2">
			<div class="form-group">
			<label for="consignor" class="control-label"><strong>Consignor</strong></label>
			<select name="consignor" id="consignor" class='chosen-select form-control'>                                                
			</select>
			</div>
			</div>

			<div class="col-sm-2">
			<div class="form-group">
			<label for="consignee" class="control-label"><strong>Consignee</strong></label>
			<select name="consignee" id="consignee" class='chosen-select form-control'>                                                
			</select>
			</div>
			</div>

			<div class="col-sm-2">
			<div class="form-group">
			<label for="from_place" class="control-label"><strong>From Place </strong></label>
			<select name="from_place" id="from_place" class='chosen-select form-control'>                                                
			</select>
			</div>
			</div>

			<div class="col-sm-2">
			<div class="form-group">
			<label for="to_place" class="control-label"><strong>TO Place	</strong></label>
			<select name="to_place" id="to_place" class='chosen-select form-control'>                                                
			</select>
			</div>
			</div>

			<div class="col-sm-2">
				<div class="form-group">
					<br>
					<button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Serach</button>
					<a href="{{route('load.index')}}" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> Reset</a>

					<a href="{{route('load.index')}}" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel</a>

				</div>
			</div>
		</center>
		</div>
	</form>

<table  class="table table-bordered table-hover">
<thead>
<tr>
	<th>SN.</th>
	<th>Loading Date</th>
	<th>Loading NO</th>	
	<th>Vehicle No</th>
	<th>Item</th>
	<th>Weight </th>
	<th>Bags</th>
	<th>Fright Rate</th>
	<th>Commision Amt</th>
	<th>Consignor</th>
	<th>From Place / <br> TO Place</th>
	<th>Consignee</th>
	<th>Petrol <br> Pump</th>
	<th>Diesel <br> Advance</th>
	<th>Diesel <br> Advance <br> Ltr. </th>
	<th>Cash <br> Advance.</th>	
	<th>Hemal</th>
	<th>Hemal Rate</th>
	<th>Loading Type</th>
	<th>Is Receiving</th>
    <th style="width: 150px!important;">Action </th>
</tr>
</thead>
<tbody>
<?php $weight=0; $commision_rate=0; $diesel_advance=0; $diesel_advance_ltr=0; $cash_advance=0; ?>
@foreach($loads as $index => $load)

<tr>
	<td>{{ $index + $loads->firstItem() }}</td>
	<td>{{ $load->loading_date }}</td>
	<td>{{ $load->loading_no }}</td>
	<td>{{ commonController::getValueStatic('trucks','truck_number','id',$load->vehicle_no) }}</td>
	<td>{{ commonController::getValueStatic('items','item_name','id',$load->item_master) }}</td>
	<td>{{ $load->weight }}</td>
	<td>{{ $load->bag }}</td>
	<td>{{ $load->freight_rate }}</td>
	<td>{{ $load->commision_rate }}</td>
	<td>{{ commonController::getValueStatic('consignors','consignor_name','id',$load->consignor) }}</td>
	<td>{{ commonController::getValueStatic('places','placename','id',$load->from_place) }}/{{ commonController::getValueStatic('places','placename','id',$load->to_plce) }}</td>
	<td>{{ commonController::getValueStatic('consignees','consignee_name','id',$load->consignee) }}</td>
	<td>{{ commonController::getValueStatic('petrolpumps','petrol_pump_name','id',$load->pentrol_pump) }}</td>
	<td>{{ $load->diesel_advance }}</td>
	<td>{{ $load->diesel_advance_ltr }}</td>	
	<td>{{ $load->cash_advance }}</td>
	<td>{{ commonController::getValueStatic('hemals','tolly_name','id',$load->hemal) }}</td>
	<td>{{ $load->hema_rate }}</td>
	<td>{{ ($load->loading_type==1)?"Phad":"Main Trip" }}</td>
	<td><?php 
		$id = commonController::getValueStatic('loading_receiveings','loading_entries_id','loading_entries_id',$load->id); 
		if ($id=='') {
			echo "NO";
		}else{
			echo "YES";
		}
	?></td>
	   
	<td>
		<a href="{{route('load.show',$load->id)}}" target="_blank" class="btn" rel="tooltip" title="Print">
			<i class="fa fa-print"></i>
		</a>
		<a href="{{route('load.edit',$load->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">		
		<form action="{{route('load.destroy',$load->id)}}" method="post">
			@csrf
			@method('delete')
			<button type="submit">
			<i class="fa fa-trash" onclick="return confirm('Are you sure to Delete?')"></i>
			</button>
		</form>
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
		<th> {{ $tfootData->weight }} </th>
		<th></th>
		<th></th>
		<th>{{ $tfootData->commision_rate }}</th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th>{{ $tfootData->diesel_advance }}</th>
		<th>{{ $tfootData->diesel_advance_ltr }}</th>
		<th>{{ $tfootData->cash_advance }}</th>	
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
</tfoot>
</table>
{{ $loads->links() }}

</div>
<BR/>
</div>
</div>
</div>

<script>

	function getVehicle(){
		$.ajax({
		url: "{{ url('get-vehicle') }}",
		type: 'get',
		success: function(response) {
		
		$("#vehicle").html(response);
		$("#vehicle").val(@php echo $vehicle; @endphp);
		$('#vehicle').trigger("chosen:updated");
		}
		
	});
	}
	getVehicle();

	function getConsignee(){
		$.ajax({
		url: "{{ url('get-consignee') }}",
		type: 'get',
		success: function(response) {
		$("#consignee").html(response);
			$("#consignee").val(@php echo $consignee; @endphp);
		$('#consignee').trigger("chosen:updated");
		}
		
	});
	}
	getConsignee();

	function getConsignor(){
		$.ajax({
		url: "{{ url('get-consignor') }}",
		type: 'get',
		success: function(response) {
		$("#consignor").html(response);
		$("#consignor").val(@php echo $consignor; @endphp);
		$('#consignor').trigger("chosen:updated");
		}
		
	});
	}

	getConsignor();

	function getPlace(){
		$.ajax({
		url: "{{ url('get-place') }}",
		type: 'get',
		success: function(response) {

		$("#to_place").html(response);
		$("#from_place").html(response);
		$("#from_place").val(@php echo $from_place; @endphp);
		$('#from_place').trigger("chosen:updated");
		$("#to_place").val(@php echo $to_place; @endphp);
		$('#to_place').trigger("chosen:updated");
		}
		
	});
	}
	getPlace();
</script>

@endsection


