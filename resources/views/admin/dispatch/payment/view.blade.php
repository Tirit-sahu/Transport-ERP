@extends('admin.layouts.body')
@section('content')
 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<a href="{{ url('admin/receivingPayment') }}" style="float:  right; margin-right: 10px;" class="btn btn-teal"><i class="fa fa-plus" aria-hidden="true"></i> Add New Receiving Payment  </a>
	<h3>
        Receiving Payment Details
	</h3>
</div>
<div class="box-content nopadding"  style="overflow: scroll;">


<table  class="table table-bordered table-hover table-striped" id="paymentFDataTable">
<thead>

<tr>
    <th>SN.</th>
    <th>Payment Date</th>
	<th>Payment Voucher Number</th>	
    <th>Action </th>
</tr>
</thead>
<tbody>
	@foreach($payments as $payment)
<tr>
    <td>{{$loop->index+1}}</td>
    <td>{{ date('d-m-Y', strtotime($payment->payment_date)) }}</td>
	<td>{{ $payment->voucher_no }}</td>
	   
	    <td>
        {{-- <a href="{{ url('/payment/invoice',$payment->id) }}" target="_blank" class="btn" rel="tooltip" title="View">
			<i class="fa fa-eye"></i> View
        </a> --}}
        
		<a href="{{ url('/payment/invoice',$payment->id) }}" target="_blank" class="btn" rel="tooltip" title="Print">
			<i class="fa fa-print"></i> Print
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