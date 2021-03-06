<style>
    table {
        border-spacing: 0px!important;
        font-size: 12px!important;
    }
    td  {
            padding: 0px!important;
            text-align: center;
        }
    th    {
		padding: 10px!important;
		}
</style>
<?php use \App\Http\Controllers\Admin\commonController;
use Illuminate\Http\Request;
?>
@extends('admin.layouts.body')
@section('content')
 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	{{-- <button class="exportToExcel btn btn-warning" style="float: right">Export to XLS</button> --}}
	<a style="float: right" class="btn btn-warning" id="downloadLink" onclick="exportF(this)">Export to excel</a>
	<a href="{{route('truck.create')}}" style="float:  right; margin-right: 10px;" class="btn btn-success"> Add Trcuk  </a>
	<h3>
		Truck  Master Details
	</h3>
</div>
<div class="box-content nopadding"  style="overflow: scroll;">
<table id="table2excel" class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-tableName="Truck Master" data-column_filter_types="null,text,text,text,null,null,null,null,null,null">
<thead>

<tr>
	<th>SN.</th>
	<th>Truck Number</th>
	<th>Owner Name</th>
	<th>Truck Type</th>
	<th>Truck Model</th>
	<th>Document</th>
	<th>Manufacturer</th>
	<th>Chassis No</th>
	<th>Engine No</th>	
    <th>Action </th>
 

</tr>
</thead>
<tbody>
	@foreach($trucks as $truck)
<tr>
	<td>{{ $loop->index+1 }}</td>
	<td>{{ $truck->truck_number }}</td>
	<td >{{ commonController::getValueStatic('truckowners','owner_name','id',$truck->truckowner_id) }}</td>
	<td>{{ $truck->tructype->trucktype }}</td>
	<td>{{ $truck->truck_model }}</td>
	<td>@if($truck->document!='') 
		<a target="_blank" href="{{ asset('storage/app/public/doctruck/'.$truck->document) }}">
			<img src="{{ asset('storage/app/public/doctruck/document00.png') }}" alt="Image Not Available" style="width: 60px;">
		</a>
		@endif
		</td>
	<td>{{$truck->manufacturer}}</td>
	<td>{{$truck->chassisno}}</td>
	<td>{{$truck->engineno}}</td>
	
	   
	<td>
		
      
		<a href="{{route('truck.edit',$truck->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
		
		<form action="{{route('truck.destroy',$truck->id)}}" method="post">
			@csrf
			@method('delete')
			<button type="submit" class="btn btn-link">
			<i class="fa bg-red fa-trash pr-1 pl-1 cursor" onclick="return confirm('Are you sure to Delete?')" style="cursor: pointer;color:red;"></i>
			</button>
		</form>
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
@endsection

<script>
function exportF(elem) {
  var table = document.getElementById("table2excel");
  var html = table.outerHTML;
  var url = 'data:application/vnd.ms-excel,' + escape(html); // Set your html table into url 
  elem.setAttribute("href", url);
  elem.setAttribute("download", "Truck_Master.xls"); // Choose the file name
  return false;
}
</script>