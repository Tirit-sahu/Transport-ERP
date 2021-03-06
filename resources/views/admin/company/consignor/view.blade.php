@extends('admin.layouts.body')
@section('content')
 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<h3>
		Consignor Master Details
	</h3>
	<a href="{{ url('/admin/company/consignor/create') }}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Add New Consignor</a>
</div>
<div class="box-content nopadding">
<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">
<thead>

<tr>
	<th>SN.</th>
	<th>Consignor Name</th>
	<th>Place</th>
	<th>Mobile No.</th>
	<th>Email ID</th>
	<th>GST No.</th>	
    <th>Address</th>
    <th>Company Commision(%)</th>
    <th>State</th>
    <th>Document</th>
    <th>Status</th>  
     <th>Action </th>
 

</tr>
</thead>
<tbody>
	@foreach($consignories as $consignor)
<tr>
	<td>{{$loop->index+1}}</td>
	<td>{{$consignor->consignor_name}}</td>
	<td>{{$consignor->Place->placename}}</td>
	
	<td>{{$consignor->consignor_mobile}}</td>
    <td>{{$consignor->consignor_email}}</td>
    <td>{{$consignor->consignor_gst_no}}</td>
    <td>{{$consignor->consignor_address}}</td>
    <td>{{$consignor->company_commission}}</td>
    <td>{{$consignor->State->statename}}</td>
    <td>
    		@if($consignor->document)
	<img src="{{ asset('public/storage/docsImg')}}/{{$consignor->document}}" alt="image" width="40px">
	@endif

	</td>
    <td>
    	@if($consignor->status==1)
    	Enable
    	@elseif($consignor->status==0)
    	Disable
    	@endif
    </td>
	<td>
		
      
		<a href="{{route('consignor.edit',$consignor->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
		
		<form action="{{route('consignor.destroy',$consignor->id)}}" method="post">
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