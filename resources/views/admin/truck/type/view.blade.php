@extends('admin.layouts.body')
@section('content')
 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<a href="{{route('type.create')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal">Add Trcuk Type </a>
	<h3>
		Truck Type Master Details
	</h3>
</div>
<div class="box-content nopadding">
<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">
<thead>

<tr>
	<th>SN.</th>
	<th>Truck Type</th>
	<th>Avg Criteria</th>
	
    <th>Action </th>
 

</tr>
</thead>
<tbody>
	@foreach($types as $type)
<tr>
	<td>{{$loop->index+1}}</td>
	<td>{{$type->trucktype}}</td>
	<td>{{$type->avg_criteria}}</td>
	   
	<td>
		
      
		<a href="{{route('type.edit',$type->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
		
		<form action="{{route('type.destroy',$type->id)}}" method="post">
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