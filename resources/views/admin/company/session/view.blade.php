@extends('admin.layouts.body')
@section('content')
 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<a href="{{route('session.create')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal">Add Session</a>
	<h3>
		Session Details
	</h3>
</div>
<div class="box-content nopadding">
<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">
<thead>

<tr>
	<th>SN.</th>
	<th>Session Name </th>
	<th>Start Date</th>
	<th>End Date</th>

     <th>Action </th>
 

</tr>
</thead>
<tbody>
	@foreach($sessions as $session)
<tr>
	<td>{{$loop->index+1}}</td>
	<td>{{$session->name}}</td>
	<td>{{$session->startdate}}</td>
	<td>{{$session->enddate}}</td>
	<td>
		
        <a href="#" class="btn" rel="tooltip" title="Print">
			<i class="fa fa-print"></i>
		</a>
		<a href="{{route('session.edit',$session->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
		
		<form action="{{route('session.status',$session->id)}}" method="post">
			@csrf
			@method('put')
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