@extends('admin.layouts.body')
@section('content')
 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<a href="{{route('place.create')}}" style="float: right; margin-right: 10px;" class="btn btn-teal">Add Place</a>
	<h3>

		Place Master Details
	</h3>
</div>
<div class="box-content nopadding"  style="overflow: scroll;">
<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">

<thead>

<tr>
	<th>SN.</th>
	<th>Place Name</th>
	<th>City Code</th>    
     <th>Action </th>
</tr>

</thead>
<tbody>
	@foreach($places as $place)
<tr>
	<td>{{$loop->index+1}}</td>
	<td>{{$place->placename}}</td>
	<td>{{$place->city_code}}</td>
	<td>
		
      
		<a href="{{route('place.edit',$place->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
		
		<form action="{{route('place.destroy',$place->id)}}" method="post">
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