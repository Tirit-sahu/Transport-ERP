@extends('admin.layouts.body')
@section('content')
 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<a href="{{route('state.create')}}" style="float: right; margin-right: 10px;" class="btn btn-teal">Add State</a>
	<h3>

		State Master Details
	</h3>
</div>
<div class="box-content nopadding">
<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">
<thead>

<tr>
	<th>SN.</th>
	<th>State Name</th>
	<th>State Code</th>    
     <th>Action </th>
 

</tr>
</thead>
<tbody>
	@foreach($states as $state)
<tr>
	<td>{{$loop->index+1}}</td>
	<td>{{$state->statename}}</td>
	<td>{{$state->state_code}}</td>
	<td>
		
      
		<a href="{{route('state.edit',$state->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
		
		<form action="{{route('state.destroy',$state->id)}}" method="post">
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