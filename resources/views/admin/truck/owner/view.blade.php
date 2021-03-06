@extends('admin.layouts.body')
@section('content')
 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<a href="{{route('owner.create')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Add Trcuk Owner </a>
	<h3>
		Truck Owner Master Details
	</h3>
</div>
<div class="box-content nopadding"  style="overflow: scroll;">
<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">
<thead>

<tr>
	<th>SN.</th>
	<th>Owner Name</th>
	<th>Father's / Husband's Name</th>
	<th>Mobile No.</th>
	<th>PAN No</th>
	<th>Upload Declaration Document</th>
	<th>Upload PAN Card</th>
	<th>Upload Aadhar Card</th>
	<th>Adress</th>
	<th>Owner Type</th>
	<th>GST No</th>
	<th>State Code</th>
	<th>Bank A/C No</th>
	<th>Bank Name</th>
	<th>Branch Name</th>
	<th>IFSC Code</th>
	<th>Alter Bank A/C No</th>
	<th>Alter Bank Name</th>
	<th>Alter Branch Name</th>
	<th>Alter IFSC Code</th>
	<th>TDS Status</th>
    <th>Action </th>
</tr>
</thead>
<tbody>
	@foreach($owners as $owner)
<tr>
	<td>{{$loop->index+1}}</td>
	<td>{{$owner->owner_name}}</td>
	<td>{{$owner->father_name}}</td>
	<td>{{$owner->mobile}}</td>
	<td>{{$owner->pan_no}}</td>

	
	<td>@if($owner->document) <a target="_blank" href="{{ asset('storage/app/public/documnetowner/'.$owner->document) }}"><img width="60" src="{{ asset('storage/app/public/documnetowner/'.$owner->document) }}" alt="PAN CARD"/></a>
	    @endif
	</td>
	
	
	<td>@if($owner->upload_pan_card) <a target="_blank" href="{{ asset('storage/app/public/documnetowner/'.$owner->upload_pan_card) }}"><img width="60" src="{{ asset('storage/app/public/documnetowner/'.$owner->upload_pan_card) }}" alt="PAN CARD"/></a>
	    @endif
	</td>
	
	<td>@if($owner->upload_aadhar_card) <a target="_blank" href="{{ asset('storage/app/public/documnetowner/'.$owner->upload_aadhar_card) }}"><img width="60" src="{{ asset('storage/app/public/documnetowner/'.$owner->upload_aadhar_card) }}" alt="PAN CARD"/></a>
	    @endif
	</td>
	
	
	<td>{{$owner->address}}</td>
	<td>{{$owner->owner_type}}</td>
	<td>{{$owner->gst_no}}</td>
	<td>@if($owner->state_ccode)
		{{$owner->state}}
		@endif
	</td>
	<td>{{$owner->ac_no}}</td>
	<td>{{$owner->bank_name}}</td>
	<td>{{$owner->branch_name}}</td>
	<td>{{$owner->ifsc_code}}</td>

	<td>{{$owner->alter_ac_no}}</td>
	<td>{{$owner->alter_bank_name}}</td>
	<td>{{$owner->alter_branch_name}}</td>
	<td>{{$owner->alter_ifsc_code}}</td>
	
	<td>{{$owner->tds_status}}</td>

	   
	<td>
		
      
		<a href="{{route('owner.edit',$owner->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
		
		<form action="{{route('owner.destroy',$owner->id)}}" method="post">
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