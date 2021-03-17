@extends('admin.layouts.body')
@section('content')
 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<h3>
		Company Master Details
	</h3>
</div>
<div class="box-content nopadding" style="overflow: scroll;">
<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">
<thead>

<tr>
	<th>SN.</th>
	<th>Company Name</th>
	<th>Company Owner Name</th>
	<th>Company Head Name</th>
	<th>Phone</th>
	<th>Mobile no.</th>
    <th>Alter Mobile no.</th>
    <th>Head Office Address</th>
    <th>Address</th>
    <th>PAN No.</th>
    <th>GST No.</th>
    <th>State</th>
    <th>Loading Prefix</th>
    <th>Logo</th>
    
     <th>Action </th>
 

</tr>
</thead>
<tbody>
	@foreach($companies as $company)
<tr>
	<td>{{$loop->index+1}}</td>
	<td>{{$company->company_name}}</td>
	<td>{{$company->company_owner_name}}</td>
	
	<td>{{$company->company_head_name}}</td>
	<td>{{$company->company_phone}}</td>
    <td>{{$company->company_mobile}}</td>
    <td>{{$company->company_mobile2}}</td>
    <td>{{$company->head_office_address}}</td>
    <td>{{$company->company_address}}</td>
    <td>{{$company->company_pan_card}}</td>
    <td>{{$company->company_gst_no}}</td>
    <td>{{$company->company_state}}</td>
    <td>{{$company->company_Loading_prefix}}</td>
    <td>
    		@if($company->company_logo)
	<img src="{{asset('Storage/companyimg')}}/{{$company->company_logo}}" alt="image" width="40px">
	@endif
</td>
	<td>
		
      
		<a href="{{route('company.edit',$company->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		{{-- <a href="#" class="btn" rel="tooltip" title="Delete">
		
		<form action="{{route('company.destroy',$company->id)}}" method="post">
			@csrf
			@method('delete')
			<button type="submit" class="btn btn-link">
			<i class="fa bg-red fa-trash pr-1 pl-1 cursor" onclick="return confirm('Are you sure to Delete?')" style="cursor: pointer;color:red;"></i>
			</button>
		</form>
		</a> --}}
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