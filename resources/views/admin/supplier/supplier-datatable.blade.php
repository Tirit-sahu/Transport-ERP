@extends('admin.layouts.body')
@section('content')
 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<a href="{{ url('supplierAdd') }}" style="float:  right; margin-right: 10px;" class="btn btn-teal">Add Supplier</a>
	<h3>
		Supplier Datatable
	</h3>
</div>
<div class="box-content nopadding">
<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">
<thead>

<tr>
	<th>SN.</th>
	<th>Name</th>
    <th>Mobile</th>
    <th>GST NO.</th>
    <th>PAN NO.</th>
    <th>City</th>
    <th>Address</th>
    <th>Open. Bal.</th>
    <th>Open Bal Date</th>
	<th>Action </th>
</tr>
</thead>
<tbody>
	@foreach($suppliers as $row)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->mobile }}</td>
            <td>{{ $row->gst }}</td>
            <td>{{ $row->pan }}</td>
            <td>{{ $row->city }}</td>
            <td>{{ $row->address }}</td>
            <td>{{ $row->opening_bal }}</td>
            <td>{{ $row->opening_bal_date }}</td>
            <td>
                <a href="{{ url('supplierEdit/'.$row->id) }}" class="btn" rel="tooltip" title="Edit">
                <i class="fa fa-edit"></i>
                </a>

                <a onclick="return confirm('Are Your Sure ?')" href="{{ url('/COMMOMdestroy') }}?table=suppliers&key=id&value={{$row->id}}" class="btn" rel="tooltip" title="Delete">
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