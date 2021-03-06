@extends('admin.layouts.body')
@section('content')
 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<h3>
		Consignor Prefix Master Details
	</h3>
</div>
<div class="box-content nopadding" style="overflow: scroll;">
<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">
<thead>

<tr>
	<th>SN.</th>
	<th>Employee Name</th>
	<th>Designation</th>
	<th>Date of Join</th>
	<th>PAN No</th>
	<th>Lisence No</th>
	<th>Lisence Date</th> 
	<th>Lisence Date Expiry</th>
	<th>Company Name</th>
	<th>DOB</th>
	<th>Mobile</th>
	<th>Alter Mobile No.</th>
	<th>Salary</th>
	<th>Bank A\C No.</th>
	<th>Address</th>
	<th>Status</th>

	 <th>Edit </th>
 	<th>Delete</th>

</tr>
</thead>
<tbody>
	@foreach($emps as $emp)
<tr>
	<td>{{$loop->index+1}}</td>
	<td>{{$emp->name}}</td>
	<td>@if($emp->designation==1)
		Driver
		@elseif($emp->designation==2)
		Conductor
		@elseif($emp->designation==3)
		Office Staff
		@elseif($emp->designation==4)
		Owner
		@endif
		</td>
	<td>{{$emp->doj}}</td>
	<td>{{$emp->pan_no}}</td>
	<td>{{$emp->lisence_no}}</td>
	<td>{{$emp->lisence_date}}</td>
	<td>{{$emp->lisence_date_exp}}</td>
	<td>{{$emp->dob}}</td>
	<td>{{$emp->mobile}}</td>
	<td>{{$emp->mobile2}}</td>
	<td>{{$emp->salary}}</td>
		<td>{{$emp->bank_ac_no}}</td>
	<td>{{$emp->address}}</td>
	
	<td>
			@if($emp->status==1)
		Active
		@elseif($emp->status==0)
		In-Active
		@endif

				</td>
    
    
	<td>
		
      
		<a href="{{route('emp.edit',$emp->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a></td>
		<td>
		<a href="#" class="btn" rel="tooltip" title="Delete">
		
		<form action="{{route('emp.destroy',$emp->id)}}" method="post">
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