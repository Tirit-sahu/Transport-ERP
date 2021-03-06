<?php use \App\Http\Controllers\Admin\commonController;
use Illuminate\Http\Request;
?>
@extends('admin.layouts.body')
@section('content')
 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<h3>
		Item Master Details
	</h3>
	<a href="{{route('item.create')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Add New Items</a>
</div>
<div class="box-content nopadding">
<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">
<thead>

<tr>
	<th>SN.</th>
	<th>Item Category</th>
	<th>Item Name</th>
	<th>Description</th>
	<th>Unit Messure</th>
	<th>Item Rate</th>	
    <th>HSN Code</th>
    <th>Action </th>
 

</tr>
</thead>
<tbody>
	@foreach($items as $item)
<tr>
	<td>{{$loop->index+1}}</td>
	<td>{{ commonController::getValueStatic('item_categories','item_category_name','id',$item->item_category)}}</td>
	<td>{{$item->item_name}}</td>
	
	<td>{{$item->description}}</td>
    <td>{{ commonController::getValueStatic('units','name','id',$item->unit_messure) }}</td>
    <td>{{$item->item_rate}}</td>
    <td>{{$item->hsncode}}</td>

       
	<td>
		
      
		<a href="{{route('item.edit',$item->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
		
		<form action="{{route('item.destroy',$item->id)}}" method="post">
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