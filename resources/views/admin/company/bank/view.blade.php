@extends('admin.layouts.body')
@section('content')
 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<h3>
		Bank Master Details
	</h3>
</div>
<div class="box-content nopadding">
<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">
<thead>

<tr>
	<th>SN.</th>
	<th>
Bank Name</th>
	<th>Bank Branch</th>
	<th>A\C No.</th>
	<th>A|C Holder Name</th>
	<th>Bank IFSC</th>
    <th>mobile No.</th>
    <th>Address</th>
     <th>Action </th>
 

</tr>
</thead>
<tbody>
	@foreach($banks as $bank)
<tr>
	<td>{{$loop->index+1}}</td>
	<td>{{$bank->bank_name}}</td>
	<td>{{$bank->bank_branch}}</td>
	
	<td>{{$bank->bank_ac}}</td>
    <td>{{$bank->ac_holder_name}}</td>
    <td>{{$bank->bank_IFSC}}</td>
    <td>{{$bank->holder_mobile}}</td>
     <td>{{$bank->bank_address}}</td>
    
	<td>
		
      
		<a href="{{route('bank.edit',$bank->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
		
		<form action="{{route('bank.destroy',$bank->id)}}" method="post">
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