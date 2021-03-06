@extends('admin.layouts.body')
@section('content')

<script type="text/javascript">
	
	$(function() {
   
	 $('.receiving_date').datepicker({ dateFormat: 'dd-mm-yy' }).val();
	 $('#from_date').datepicker({ dateFormat: 'dd-mm-yy' }).val();
	 $('#payment_date').datepicker({ dateFormat: 'dd-mm-yy' }).val();

  });

</script>



<div class="col-sm-12">
</br>
</br>
		
<div class="row">
	<form action="/admin/dispatch/payment/create/" autocomplete="off">
										 <div class="col-sm-2">
											<div class="form-group">
											<label for="textfield" class="control-label"><strong>Vehicle NO.<span class="err" style="color:#F00;">*</span></strong></label>
												<select name="vehicle_no" id="vehicle_no" data-rule-required="true" class='chosen-select form-control'  onchange="search();">
                                               	<option> - Select - </option>
                                               	@foreach($trucks as $truck)
                                               		<option value="{{ $truck->id }}">{{ $truck->truck_number }}</option>
                                               	@endforeach	
												
											</select>

											<script>document.getElementById("vehicle_no").value = "@yield('vehicle_no')"; </script>
											</div>
										</div>


                                       <!--  <div class="col-sm-2">
											<div class="form-group">
											<label for="textfield" class="control-label"><strong>Owner Name</strong></label>
												<select name="owner" id="owner" data-rule-required="true" class='chosen-select form-control'>
                                               	<option> - Select - </option>
                                               	@foreach($owners as $owner)
                                               		<option value="{{ $owner->id }}">{{ $owner->owner_name }}</option>
                                               	@endforeach	
												
											</select>

											<script>document.getElementById("owner").value = "@yield('owner')"; </script>
											</div>
										</div> -->

										<div class="col-sm-2">
											<div class="form-group" style="margin-top: 22px;">
											<center> 
                                    <button class="btn btn-satgreen">Search</button>
                                      <a href="{{ route('payment.create') }}" class="btn btn-satgreen">Reset</a>
                                       </center>
											</div>
										</div>										
							</form>
										
										        
                               </div>

						<div class="box box-bordered box-color satblue">
					
								<x-alert />
							<div class="box-title">
								 <div class="col-sm-2">
											<div class="form-group">
											<label for="textfield" class="control-label" style="color:white;"><strong>LOADING NO.</strong></label>
												<select name="loading_no" id="loading_no" data-rule-required="true" class='chosen-select form-control' onchange="loading_fetch();">
                                               	<option> - Select - </option>
                                               	@foreach($loads as $load)
                                               		<option value="{{ $load->entry->id }}">{{ $load->entry->loading_no }}</option>
                                               	@endforeach	
												
											</select>

											<script>document.getElementById("loading_no").value = "@yield('loading_no')"; </script>
											</div>
										</div>		
								<a href="{{route('payment.index')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Payment Details</a>
							</div>
							<div class="box-content nopadding" style="overflow: scroll;">


<form action="{{route('payment.store')}}" method="post">
	@csrf

	<div class="col-sm-2">
							<div class="form-group">
							<label for="textfield" class="control-label" ><strong>Invoice No.</strong></label>
												<input type="text" name="invoice" class="form-control" value="{{Helpers::getinvoice()}}" readonly />	
											</div>
										</div>	

		<div class="col-sm-2">
							<div class="form-group">
							<label for="textfield" class="control-label" ><strong>Payment Date</strong></label>
												<input type="text" name="payment_date" id="payment_date" class="form-control" required />	
											</div>
										</div>	

<table class="table table-bordered table-hover table-nomargin "
>
	<thead>
<tr>
	<th>SNO.</th>
	<th>Loading DATE </th>
	<th>LOADING NO.</th>
	<th>TRUCK OWNER</th>
	<th>VEHICLE NO. </th>
	<th>WEIGHT(MT)</th>

    <th>BAGS</th>
     <th>RATE </th>
    <th>FROM PLACE</th>
    <th>TO PLACE </th>
    <th>Cash ADVANCE </th>
    <th>Petrol ADVANCE </th>
    <th>Commission </th>
    <th>RECIVING DATE </th>
    <th>RECEIVED MT </th>
    <th>type </th>
    <th>Shortge(MT) </th>
  
    <th>NARRATION </th>
	<th>Net Amount</th>

</tr>
</thead>

<tbody id="load_process">
	



</tbody>
<tfoot>
	<tr class="tr:last-child">
	<td colspan="18" style="text-align: right;">Grand Total</td>
	<td id="grand_total"> </td>
	
</tr>  		
	<tr>
		<td colspan="18" style="text-align: right;"></td>
		<td><button class="btn btn-satgreen" type="submit">Save</button></td>
		
	</tr>
</tfoot>

</table>
</form>
</div>					</div>
                                    
                                    
                                    
                                    
                                  
							</div>
						</div>
<script type="text/javascript">





	function loading_fetch(){

		var loading_no=document.getElementById('loading_no').value;
		
		$.ajax({
    	url:"{{url('load-fetch')}}?loading_no="+loading_no,
    	type:'get',
    	success:function(response){
    		
    		if(response!='')
    		{
var x=JSON.parse(response);
	var table = document.getElementById('load_process');  
    var rowCount = table.rows.length;  
    var row = table.insertRow(rowCount);  
    //Column 1  
	var grand_total=0;
 	
 	var netamount=(x.entry.weight*x.entry.fright_rate)-(x.entry.weight*x.entry.commision_rate)-x.entry.cash_advance-x.entry.diesel_advance-(x.shortage*x.entry.fright_rate);
    var cell1 = row.insertCell(0);  
    cell1.innerHTML = (rowCount + 1);  
    //Column 3  
    var cell2 = row.insertCell(1);  
    cell2.innerHTML=x.entry.loading_date;

    var cell3 = row.insertCell(2);  
    cell3.innerHTML=x.entry.loading_no;

    var cell4 = row.insertCell(3);  
    cell4.innerHTML=x.owner_name;

    var cell5 = row.insertCell(4);  
    cell5.innerHTML=x.truck_number;

    var cell6 = row.insertCell(5);  
    cell6.innerHTML=x.entry.weight;

    var cell7 = row.insertCell(6);  
    cell7.innerHTML=x.entry.bags;

    var cell8 = row.insertCell(7);  
    cell8.innerHTML=x.entry.fright_rate


        var cell9 = row.insertCell(8);  
    cell9.innerHTML=x.from_name;

        var cell10 = row.insertCell(9);  
    cell10.innerHTML=x.to_place;

    var cell11 = row.insertCell(10);  
    cell11.innerHTML=x.entry.cash_advance;

    var cell12 = row.insertCell(11);  
    cell12.innerHTML=x.entry.diesel_advance;


    var cell13 = row.insertCell(12);  
    cell13.innerHTML=x.entry.commision_rate;


    var cell14 = row.insertCell(13);  
    cell14.innerHTML=x.received_mt;


    var cell15 = row.insertCell(14);  
    cell15.innerHTML=moment(x.receiving_date).format('DD-MM-YYYY');


    var cell16 = row.insertCell(15);  
    cell16.innerHTML=x.type;

    var cell17 = row.insertCell(16);  
    cell17.innerHTML=x.shortage;

    

    var cell18 = row.insertCell(17);  
    cell18.innerHTML="<input type='text'  class='form-control' id='narresation"+x.loading_no+"' name='narresation[]' ><input type='hidden'  class='form-control loading_no' value='"+x.id+"' name='loading_no[]'>    ";


    var cell19 = row.insertCell(18);  
    cell19.innerHTML="<input type='text'  class='form-control netamount' id='netamount"+x.loading_no+"' value="+netamount.toFixed(2)+" name='netamount[]' readonly />";

setTotal();
    	}
		}
    });

	}
	

function setTotal()
{
	var grant_amt=0;
	$(".netamount").each(function(){

	amt = parseFloat($(this).val());
	
		grant_amt += amt;
			
	});
	grant_amt;
// alert(Grant_amt);
// 	$("#grand_total").val(Math.round(Grant_amt).toFixed(2));
document.getElementById('grand_total').innerHTML=grant_amt.toFixed(2);

}


// function save(){

// 	var json={};
// 		$(".loading_no").each(function(){
		
// 		amt=parseFloat($(this).val());
// 			var savev=json.push("key",amt);
// 			console.log(savev);
// 		});

// }


</script>

@endsection