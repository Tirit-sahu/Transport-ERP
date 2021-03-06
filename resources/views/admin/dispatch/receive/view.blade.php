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
	<a href="{{route('receive.create')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Add Receive  </a>
	<h3>
	Loading Entry Master Details
	</h3>
</div>
<div class="box-content nopadding"  style="overflow: scroll;">

		<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
                                    <form action="{{url('/')}}/admin/@yield('formaction')" id="form" method="post" class='form-vertical form-validate' autocomplete="off" enctype="multipart/form-data">
                                    	@csrf
                                    	@yield('method')
					<div class="row">
										<div class="col-sm-2"> 
											<div class="form-group">
								<label for="textfield" class="control-label"><strong>LOADING DATE <span class="err" style="color:#F00;">*</span> </strong></label>
												<input type="text" name="loading_date" id="loading_date" value="@yield('loading_date')" data-rule-required="true" 	data-rule-maxlength="255"
                                                placeholder="DD/MM/YYYY" class="form-control">
											</div>
										</div>
									</form>
								</div>
									</div>

<table id="example2"  class="table table-bordered table-hover">
<thead>

<tr>
	<th>SN.</th>
	<th>Loading Date</th>
	<th>Loading NO</th>
	<th>Vehicle No</th>
	<th>Weight </th>
	<th>Bags</th>
	<th>Fright Rate</th>
	<th>Commision Amt</th>
	<th>Consignor</th>
	<th>From Place</th>
	<th>Consignee</th>
	<th>TO Place</th>
	<th>Diesel Adv.</th>
	<th>Petrol Pump</th>
	<th>Cash Adv.</th>
	<th>Create By</th>
    <th>Action </th>
 

</tr>
</thead>
<tbody>
	@foreach($loads as $load)
<tr>
	<td>{{$loop->index+1}}</td>
	<td>{{$load->receiving_date}}</td>
	<td>{{$load->loading_no}}</td>
	<td>{{$load->truck->truck_number}}</td>
	<td>{{$load->weight}}</td>
	<td>{{$load->bags}}</td>
	<td>{{$load->fright_rate}}</td>
	<td>{{$load->commision_rate}}</td>
	<td>{{$load->Consignor->consignor_name}}</td>
	<td>{{$load->place->placename}}</td>
	<td>{{$load->Consignee->consignee_name}}</td>
	<td>{{$load->toplace->placename}}</td>
	<td>{{$load->diesel_advance}}</td>
	<td>@if($load->pentrol_pump) 
		{{$load->petrolpumps->petrol_pump_name}}
		@endif
	</td>
	<td>{{$load->cash_advance}}</td>
	<td>{{$load->user->name}}</td>
	   
	<td>
		<a href="{{route('load.show',$load->id)}}" target="_blank" class="btn" rel="tooltip" title="Print">
			<i class="fa fa-print"></i>
		</a>
      
		<a href="{{route('load.edit',$load->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
		
		<form action="{{route('load.destroy',$load->id)}}" method="post">
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

<script type="text/javascript">
	$('#example1').DataTable({

    dom: 'Bfrtip',

    buttons: [

            {
              extend: 'excelHtml5',
              footer: true,
              exportOptions: {
                    columns: ':visible'
                }
            },

            {
             extend: 'pdf',
             footer: true,
              exportOptions: {
                    columns: ':visible'
                }
            },
            {
              extend: 'colvis'
            }

        ]
    } );
</script>
	@endsection