@extends('admin.layouts.body')
@section('content')
 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<a href="{{route('petrol.create')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Add Petrol Pump  </a>
	<h3>
		Petrol Master Details
	</h3>
</div>
<div class="box-content nopadding"  style="overflow: scroll;">
<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">
<thead>

<tr>
	<th>SN.</th>
	<th>Petrol Pump Name</th>
	<th>Adress</th>
	<th>District</th>
	<th>State Name</th>
	<th>Mobile No.</th>
	<th>Alter Mobile No</th>
	<th>Email ID</th>
	<th>GST No</th>
	<th>PAN No.</th>
	
	<th>Contact Person Name</th>
	{{-- <th>Designation</th> --}}
	<th>Contact Person Mobile</th>
	<th>Contact Person Email</th>
	
	<th>Type</th>
    <th>Action </th>
 

</tr>
</thead>
<tbody>
	@foreach($petrols as $petrol)
<tr>
	<td>{{$loop->index+1}}</td>
	<td>{{$petrol->petrol_pump_name}}</td>
	<td>{{$petrol->address}}</td>
	<td>{{$petrol->district}}</td>
	<td>{{$petrol->State->statename}}</td>
	<td>{{$petrol->mobile}}</td>
	<td>{{$petrol->alter_mobile}}</td>
	<td>{{$petrol->email}}</td>
	<td>{{$petrol->gst_no}}</td>
	<td>{{$petrol->pan_no}}</td>
	
	<td>{{$petrol->contact_person_name}}</td>
	{{-- <td>{{$petrol->designation}}</td> --}}
	<td>{{$petrol->contact_person_mobile}}</td>
	<td>{{$petrol->contact_person_email}}</td>
	
	<td>{{$petrol->type}}</td>
	   
	<td>
		
      
		<a href="{{route('petrol.edit',$petrol->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
		
		<form action="{{route('petrol.destroy',$petrol->id)}}" method="post">
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