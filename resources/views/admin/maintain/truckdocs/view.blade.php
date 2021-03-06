@extends('admin.layouts.body')
@section('content')

<style>
    table {
        border-spacing: 0px!important;
        font-size: 12px!important;
    }
    td  {
            padding: 4px!important;
            text-align: center;
        }
    th    {padding: 10px!important;}
</style>

 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<a href="{{route('truckdocs.create')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Add Truck Document  </a>
	<h3>
		Truck Document Details
	</h3>
</div>
<div class="box-content nopadding"  style="overflow: scroll;">
<table id="example1" class="table table-bordered table-hover table-nomargin table-striped dataTable-colreorder">
<thead>

<tr>
	<th>SN.</th>
	<th>Truck <br>Number</th>
	<th>Permit <br>Issue</th>
	<th>Permit <br>Expiry</th>
	<th>Permit <br> Document</th>

	<th>Fitness <br>Issue</th>
	<th>Fitness <br>Expiry</th>
	<th>Fitness <br> Document</th>

	<th>Insurance <br>Issue</th>
	<th>Insurance <br>Expiry</th>
	<th>Insurance <br> Document</th>

	<th>Road Tax Issue</th>
	<th>Road Tax Expiry</th>
	<th>Road Tax <br> Document</th>

	<th>Pollution <br>Issue</th>
	<th>Pollution <br>Expiry</th>
	<th>Pollution <br> Document</th>

	<th>National <br>Permit <br>Issue</th>
	<th>National <br>Permit <br>Expiry</th>
	<th>National <br>Permit <br>Document</th>

	<th>Khanij <br>Registration <br>Issue</th>
	<th>Khanij <br>Registration <br>Expiry</th>
	<th>Khanij <br>Registration <br>Document</th>

	

</tr>
</thead>
<tbody>
	@foreach($docs as $doc)
	<tr>
		<td>{{$loop->index+1}}</td>
		<td>{{ $doc->truck->truck_number }}</td>
		<td>{{$doc->permit_issue_date}}</td>
		<td>{{$doc->permit_expiry_date}}</td>
		<td>@if($doc->permit_file)
			<a class="label label-primary" target="_blank" href="{{ url('pdf?val='.$doc->permit_file.'&title=Permit Document') }}">
				<i class="fa fa-download" aria-hidden="true"></i> Download
			</a>
			@endif
		</td>
		<td>{{$doc->fitness_issue_date}}</td>
		<td>{{$doc->fitness_expiry_date}}</td>
		<td>@if($doc->fitness_file)
			<a class="label label-primary"  target="_blank" href="{{ url('pdf?val='.$doc->fitness_file.'&title=Fitness Document') }}">
				<i class="fa fa-download" aria-hidden="true"></i> Download
			</a>
			@endif
		</td>
		
		<td>{{$doc->ins_issue_date}}</td>
		<td>{{$doc->ins_expiry_date}}</td>
		<td>@if($doc->ins_file)
			<a class="label label-primary" target="_blank" href="{{ url('pdf?val='.$doc->ins_file.'&title=Insurance Document') }}">
				<i class="fa fa-download" aria-hidden="true"></i> Download
			</a>
			@endif
		</td>
		
		<td>{{$doc->road_issue_date}}</td>
		<td>{{$doc->road_expiry_date}}</td>
		<td>@if($doc->road_file)
			<a class="label label-primary" target="_blank" href="{{ url('pdf?val='.$doc->road_file.'&title=Road Tax Document') }}">
				<i class="fa fa-download" aria-hidden="true"></i> Download
			</a>
			@endif
		</td>
		<td>{{$doc->poll_issue_date}}</td>
		<td>{{$doc->poll_expiry_date}}</td>
		<td>@if($doc->poll_file)
			<a class="label label-primary" target="_blank" href="{{ url('pdf?val='.$doc->poll_file.'&title=Pollution Document') }}">
				<i class="fa fa-download" aria-hidden="true"></i> Download
			</a>
			@endif
		</td>
		<td>{{$doc->noti_issue_date}}</td>
		<td>{{$doc->noti_expiry_date}}</td>
		<td>@if($doc->nati_file)
			<a class="label label-primary" target="_blank" href="{{ url('pdf?val='.$doc->nati_file.'&title=National Permit Document') }}" >
				<i class="fa fa-download" aria-hidden="true"></i> Download
			</a>
			@endif
		</td>
		<td>{{$doc->khanij_issue_date}}</td>
		<td>{{$doc->khanij_expiry_date}}</td>
		
		<td>@if($doc->khanij_file)
			<a class="label label-primary" target="_blank" href="{{ url('pdf?val='.$doc->khanij_file.'&title=Khanij	Registration Document') }}" >
				<i class="fa fa-download" aria-hidden="true"></i> Download
			</a>
			@endif
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