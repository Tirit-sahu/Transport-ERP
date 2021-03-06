@extends('admin.layouts.body')
@section('content')
 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<a href="{{ url('godownCreate') }}" style="float:  right; margin-right: 10px;" class="btn btn-teal">Add Godown</a>
	<h3>
		Godown Datatable
	</h3>
</div>
<div class="box-content nopadding">
<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">
<thead>

<tr>
	<th>SN.</th>
	<th>Name</th>
    <th>City</th>
    <th>Godown Incharge</th>
    <th>Incharge Mobile</th>
	<th>Action </th>
</tr>
</thead>
<tbody>
	@foreach($godowns as $row)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $row->name }}</td>            
            <td>{{ $row->city }}</td>
            <td>{{ $row->godown_incharge }}</td>
            <td>{{ $row->incharge_mobile }}</td>
            <td>
                <a href="{{ url('godownEdit/'.$row->id) }}" class="btn" rel="tooltip" title="Edit">
                <i class="fa fa-edit"></i>
                </a>
                <a onclick="return confirm('Are Your Sure ?')" href="{{ url('/COMMOMdestroy') }}?table=godowns&key=id&value={{$row->id}}" class="btn" rel="tooltip" title="Delete">
                <i class="fa fa-times"></i>
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