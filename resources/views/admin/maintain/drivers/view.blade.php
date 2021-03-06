@extends('admin.layouts.body')
@section('content')

<style>
    table {
        border-spacing: 0px!important;
        font-size: 12px!important;
    }
    td  {
            padding: 0px!important;
            text-align: center;
        }
    th    {padding: 10px!important;}
</style>

 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<a href="{{ url('/driver/create')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Add New Driver / Conductor  </a>
	<h3>
		Driver / Conductor Datatables
	</h3>
</div>
<div class="box-content nopadding"  style="overflow: scroll;">
<table id="FDataTable" class="table table-bordered table-hover table-nomargin table-striped">
<thead>

<tr>
	<th>SN.</th>
	<th>Employee Name</th>
	<th>Designation </th>
	<th>Date Of Joining</th>
	<th>Mobile NO.</th>
	<th>ESIC No</th>
	<th>PAN</th>
	<th>Lisence No</th>
	<th>Lisence Issue Date</th>
	<th>Lisence Expire Date</th>
	<th>Company Name</th>
	<th>Date of Birth</th>
	<th>Medical Expire Date</th>
	<th>Salary</th>
	<th>Address</th>
	<th>Upload Driver Lic.</th>
	<th>Status</th>
	<th>Action</th>
</tr>
</thead>
<tbody>
	@foreach($drivers as $row)
	<tr>
		<td>{{$loop->index+1}}</td>
		<td>{{ $row->employeeName }}</td>
		<td>{{ $row->designation }}</td>
		<td>{{ isset($row->DOJ)?date('d-m-Y', strtotime($row->DOJ)):'' }}</td>		
		<td>{{ $row->mobile }}</td>
		<td>{{ $row->ESIC }}</td>
		<td>{{ $row->PAN }}</td>
		<td>{{ $row->lisenceNo }}</td>
		<td>{{ $row->lisenceIssueDate }}</td>
		<td>{{ $row->lisenceExpireDate }}</td>
		<td>{{ $row->companyName }}</td>
		<td>{{ $row->DOB }}</td>
		<td>{{ $row->medicalExpireDate }}</td>
		<td>{{ $row->Salary }}</td>
		<td>{{ $row->address }}</td>
		<td>@if($row->uploadDriverLisence)
			<a target="_blank" href="{{ url('pdf?val='.$row->uploadDriverLisence.'&title=Driver Lic Document') }}" >
				<img width="60" title="Download" src="{{ asset('storage/app/public/DriverDocs/'.$row->uploadDriverLisence) }}" alt="Khanij Registration Document">
			</a>
			@endif
		</td>
		<td>{{ $row->status }}</td>
		<td>
			<a href="{{ url('driverEdit/'.$row->id) }}" class="btn" rel="tooltip" title="Edit">
				<i class="fa fa-edit"></i>
			</a>

			<a href="{{ url('driverDestroy/'.$row->id) }}" onclick="return confirm('Are you sure to Delete?')" class="btn" rel="tooltip" title="Delete">
				<i class="fa fa-trash" style="color: red;"></i>
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