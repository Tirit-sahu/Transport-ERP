@extends('admin.layouts.body')
@section('content')
 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<h3>
			Consignee Master Details
	</h3>
	<a href="{{ url('/admin/company/consignee/create') }}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Add New Consignee</a>
</div>
<div class="box-content nopadding" style="overflow: scroll;">
<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">
<thead>

<tr>
	<th>SN.</th>
	<th>Consignee Name</th>
	<th>Place</th>
	<th>Mobile No.</th>
	<th>Email ID</th>
	<th>GST No.</th>
    <th>Address</th>
    <th>State</th>
    <th>Type</th>
    <th>Document</th>
    <th>Status</th>  
     <th>Action </th>
 

</tr>
</thead>
<tbody>
	@foreach($consignees as $consignee)
<tr>
	<td>{{$loop->index+1}}</td>
	<td>{{$consignee->consignee_name}}</td>
	<td>{{$consignee->Place->placename}}</td>
	
	<td>{{$consignee->consignee_mobile}}</td>
    <td>{{$consignee->consignee_email}}</td>
    <td>{{$consignee->consignee_gst_no}}</td>
    <td>{{$consignee->consignee_address}}</td>
     <td>{{$consignee->State->statename}}</td>
    <td>@if($consignee->Type)
    	Dumb
    	@else
    		Party
    	@endif
    </td>

    <td>
    	
    	@if($consignee->document)
	<img src="{{asset('public/storage/docsConsi')}}/{{$consignee->document}}" alt="image" width="40px">
	@endif

    </td>
    <td>@if($consignee->Type)
    		Disable
    	@else
    		Enable
    	@endif</td>
    
	<td>
		
      
		<a href="{{route('consignee.edit',$consignee->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
		
		<form action="{{route('consignee.destroy',$consignee->id)}}" method="post">
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