
@include('admin.layouts.head')
@include('admin.layouts.header')
<body>
	<div class="container-fluid" id="content">
		{{-- @include('admin.layouts.leftheader') --}}
	{{-- <div id="main"> --}}
	<div class="container-fluid">
		<div class="page-header">
		<div class="pull-left">
			<h2>Tamanna RoadCarrier</h2>
		</div>
		<div class="pull-right">
			
			@include('admin.dashboard_header');
			
		</div>
		</div>
		

	<div class="row">
		<div class="col-sm-12">
			<div class="box box-bordered box-color satblue">
				<div class="box-title">
					<h3>
						<i class="fa fa-bars"></i>Loading Process</h3>
				</div>
				<div class="box-content nopadding">
					<!-- Tab start -->
					@include('admin.tab')
					<!-- tab end -->
					<div class="tab-content padding tab-content-inline tab-content-bottom">
					
						
						
						<div>
						<form id="receiving_entry_form" action="#" method="get" class='form-vertical'>
						<div class="row">

						<div class="col-sm-2">
						<div class="form-group">
						<label for="vehicle_number" class="control-label"><strong>VEHICLE NO.  </strong> </label>
						<select onchange="getLoadingNumber(this.value)" name="vehicle_number" id="vehicle_number" class='chosen-select form-control'>  
							<option value=""></option>							
						</select>
						</div>
						</div>

						<div class="col-sm-2">
						<div class="form-group">
						<label for="textfield" class="control-label"><strong>LOADING NO.</strong></label>
						<select onchange="getLoadingEntryDetails(this.value)" name="loading_number" id="loading_number" class='chosen-select form-control'>  
							<option value=""></option>							
						</select>
						</div>
						</div>												

						<div class="col-sm-2">
							<div class="form-group">
							<label for="loading_date" class="control-label"><strong>LOADING DATE  </strong> </label>
							<input type="text" name="loading_date" id="loading_date" 
							placeholder="" class="form-control" readonly>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="form-group">
							<label for="weight_mt" class="control-label"><strong>WEIGHT(MT) </strong> </label>
							<input type="text" name="weight_mt" id="weight_mt" 
							placeholder="" class="form-control" readonly>
							</div>
						</div>


						<div class="col-sm-2">
							<div class="form-group">
							<label for="bags" class="control-label"><strong>BAGS </strong> </label>
							<input type="text" name="bags" id="bags" 
							placeholder="" class="form-control" readonly>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="form-group">
							<label for="rate" class="control-label"><strong>RATE </strong> </label>
							<input type="text" name="rate" id="rate" 
							placeholder="" class="form-control" readonly>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="form-group">
							<label for="diesel_advance" class="control-label"><strong>DIESEL ADVANCE  </strong> </label>
							<input type="text" name="diesel_advance" id="diesel_advance" 
							placeholder="" class="form-control" readonly>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="form-group">
							<label for="cash_advance" class="control-label"><strong>CASH ADVANCE  </strong> </label>
							<input type="text" name="cash_advance" id="cash_advance" 
							placeholder="" class="form-control" readonly>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="form-group">
							<label for="commision" class="control-label"><strong>COMMISION  </strong> </label>
							<input type="text" name="commision" id="commision" 
							placeholder="" class="form-control" readonly>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="form-group">
							<label for="from_place" class="control-label"><strong>FROM PLACE   </strong> </label>
							<input type="text" name="from_place" id="from_place" 
							placeholder="" class="form-control" readonly>
							</div>
						</div>

					
						<div class="col-sm-2">
							<div class="form-group">
							<label for="to_place" class="control-label"><strong>TO PLACE   </strong> </label>
							<input type="text" name="to_place" id="to_place" 
							placeholder="" class="form-control" readonly>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="form-group">
							<label for="truck_owner" class="control-label"><strong>TRUCK OWNER   </strong> </label>
							<input type="text" name="truck_owner" id="truck_owner" 
							placeholder="" class="form-control" readonly>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="form-group">
							<label for="receiving_date" class="control-label"><strong>RECIVING DATE<span class="err" style="color:#F00;">*</span> </strong> </label>
							<input type="text" name="receiving_date" id="receiving_date" 
							placeholder="DD-MM-YYYY" class="form-control">
							</div>
							</div>


							<div class="col-sm-2">
								<div class="form-group">
								<label for="received_bag" class="control-label"><strong>RECEIVING BAG  </strong> </label>
								<input type="text" onkeyup="netAmountCalc()" name="received_bag" id="received_bag" 
								placeholder="" class="form-control">
								</div>
								</div>

							
								<div class="col-sm-2">
									<div class="form-group">
									<label for="shortage_bag" class="control-label"><strong>SHORTAGE BAG  </strong> </label>
									<input type="text" onkeyup="netAmountCalc()" name="shortage_bag" id="shortage_bag" 
									placeholder="" class="form-control" readonly>
									</div>
								</div>


								<div class="col-sm-2">
								<div class="form-group">
								<label for="received_mt" class="control-label"><strong>RECEIVED MT  </strong> </label>
								<input type="text" onkeyup="netAmountCalc()" name="received_mt" id="received_mt" 
								placeholder="" class="form-control">
								</div>
								</div>

								<div class="col-sm-2">
									<div class="form-group">
									<label for="shortage_bag" class="control-label"><strong>SHORTAGE MT  </strong> </label>
									<input type="text" onkeyup="netAmountCalc()" name="shortage_mt" id="shortage_mt" 
									placeholder="" class="form-control" readonly>
									</div>
									</div>
	
	
								

							<div class="col-sm-2">
							<div class="form-group">
							<label for="shortage_rs" class="control-label"><strong>SHORTAGE BAG (RS)  </strong> </label>
							<input type="text" onkeyup="netAmountCalc()" name="shortage_rs" id="shortage_rs" 
							placeholder="" class="form-control">
							</div>
							</div>

							<div class="col-sm-2">
								<div class="form-group">
								<label for="shortage_mt_rs" class="control-label"><strong>SHORTAGE MT (RS) </strong> </label>
								<input type="text" onkeyup="netAmountCalc()" name="shortage_mt_rs" id="shortage_mt_rs" 
								placeholder="" class="form-control">
								</div>
							</div>
	
							
	
								<div class="col-sm-2">
									<div class="form-group">
									<label for="weight_gain" class="control-label"><strong>WEIGHT GAIN  </strong> </label>
									<input type="text" name="weight_gain" id="weight_gain" 
									placeholder="" class="form-control">
									</div>
								</div>	
	
	
							

						<div class="col-sm-2">
							<div class="form-group">
							<label for="gross_amt" class="control-label"><strong>GROSS AMT </strong> </label>
							<input type="text" name="gross_amt" id="gross_amt" 
							placeholder="" class="form-control">
							</div>
						</div>

						<div class="col-sm-2">
							<div class="form-group">
							<label for="net_amt" class="control-label"><strong>NET AMT</strong> </label>
							<input type="text" name="net_amt" id="net_amt" 
							placeholder="" class="form-control">
							</div>
						</div>


						<div class="col-sm-2">
							<div class="form-group">
							<label for="naration" class="control-label"><strong>NARATION  </strong> </label>
							<input type="text" name="naration" id="naration" 
							placeholder="" class="form-control">
							</div>
							</div>

						<div class="col-sm-12">
							<center> 
								<button id="btnReceiving" onclick="save_receiving_entry()" type="button" class="btn btn-satgreen">- SAVE -</button> &nbsp;&nbsp;
								   <a href="{{ url('/admin/receiving') }}" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
								   <a href="{{ url('/admin/dispatch/receive/create') }}" class="btn btn-teal">- REPORTS -</a></center>
						</div>
							
						 
							
						</div>
						
					</form>
					
							<div class="col-sm-12">
							<div class="box box-color box-bordered">
							<div class="box-title">
							<h3>
							Recent Reciving Entery
							</h3>
							</div>
							<div class="box-content nopadding">
							<table class="table table-hover">
							<thead>
							<tr>
							<th>SNO.</th>
							<th>LOADING DATE </th>
							<th>RECEIVING DATE </th>
							<th>LOADING NO.</th>
							<th>VEHICLE NO. </th>
							<th>WEIGHT(MT)</th>
							<th>BAGS</th>
							<th>RATE </th>
							<th>FROM PLACE</th>
							<th>TO PLACE </th>

							<th>Options</th>
							</tr>
							</thead>
							<tbody id="receiving_datatable">
							

							</tbody>
							</table>


							</div>
							<BR/>
							</div>
							</div>
							</div>
						
					
					</div>
				</div>
			</div>
		</div>

	</div>
	
	@include('admin.document_footer');

	</div>

	{{-- </div> --}}
	</div>
	
</body>

</html>


<script type="text/javascript">										
	$( function() {
	$( "#receiving_date").datepicker(
	{ 
	dateFormat: 'dd-mm-yy',
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	}
	);
	} );
</script>
<script>


function getVehicle(id=0){
	 $.ajax({
      url: "{{ url('get-vehicle') }}",
      type: 'get',
      success: function(response) {     
		//   console.log(response) 	
      	$("#vehicle_number").html(response);
		  $("#vehicle_number").val(id);
      	$('#vehicle_number').trigger("chosen:updated");
      }
      
    });
}
getVehicle();

	function getLoadingEntryDetails(id){
		$.ajax({
		url: "{{ url('getLoadingEntryDetails') }}?id="+id,
		type: 'get',
		success: function(response) {
			// console.log(response);
				var x = JSON.parse(response);
				// console.log(x);
				$("#vehicle_number").val(x.trucks.truck_number);
				$("#from_place").val(x.from_place);
				$("#to_place").val(x.to_place);
				$("#bags").val(x.loading_entries.bag);
				$("#cash_advance").val(x.cash_advance);

				$("#cash_advance").val(x.loading_entries.cash_advance);
				$("#commision").val(x.loading_entries.commision_rate);
				$("#truck_owner").val(x.truckowners);				
				$("#diesel_advance").val(x.loading_entries.diesel_advance);
				$("#loading_date").val(x.loading_entries.loading_date);
				$("#weight_mt").val(x.loading_entries.weight);
				$("#rate").val(x.loading_entries.freight_rate);
				// $("#cash_advance").val(x.cash_advance);
				
			}
		});
	}



	function netAmountCalc(){

		var bags = $("#bags").val();
		var weight_mt = $("#weight_mt").val();
		var received_bag = $("#received_bag").val();
		var shortage_bag = $("#shortage_bag").val();
		var shortage_mt = $("#shortage_mt").val();
		var received_mt = $("#received_mt").val();

		$("#shortage_bag").val(bags-received_bag);
		$("#shortage_mt").val((weight_mt-received_mt).toFixed(2));

		var shortage_mt_rs = $("#shortage_mt_rs").val();

		var shortage_rs = $("#shortage_rs").val();
		var weight_mt = $("#weight_mt").val();
		var rate = $("#rate").val();
		var diesel_advance = $("#diesel_advance").val();
		var cash_advance = $("#cash_advance").val();
		var commision = $("#commision").val();
		
		if(diesel_advance==''){ diesel_advance=0; }
		if(cash_advance==''){ cash_advance=0; }
		if(commision==''){ commision=0; }
		
		if(weight_mt < received_mt){
			var gain_weight = received_mt-weight_mt;
			$("#weight_gain").val(gain_weight.toFixed(2));
			$("#shortage_mt").val(0);
		}else{
			$("#weight_gain").val(0);
		}
		
		
		var shortage_bag_amt = shortage_bag * shortage_rs;
		var shortage_mt_amt = (shortage_mt*100) * shortage_mt_rs;
		var total_shortage_amt = parseInt(shortage_bag_amt)+parseInt(shortage_mt_amt);
		var gross_amt = weight_mt * rate;
		var totalAmtDeduct = parseInt(total_shortage_amt) + parseInt(diesel_advance) + parseInt(cash_advance) + parseInt(commision);
		var net_amt = gross_amt - totalAmtDeduct;
		$("#gross_amt").val(gross_amt.toFixed(2));
		$("#net_amt").val(net_amt.toFixed(2));
		// console.log(shortage_mt_amt);
	}


	function save_receiving_entry(){
		var loading_entries_id = $("#loading_number").val();
		var shortage_bag = $("#shortage_bag").val();
		var shortage_mt = $("#shortage_mt").val();
		var shortage_rs = $("#shortage_rs").val();
		var shortage_mt_rs = $("#shortage_mt_rs").val();
		var received_bag = $("#received_bag").val();
		var received_mt = $("#received_mt").val();
		var diesel_advance = $("#diesel_advance").val();
		var cash_advance = $("#cash_advance").val();
		var commision = $("#commision").val();
		var gross_amt = $("#gross_amt").val();
		var net_amt = $("#net_amt").val();
		var receiving_date = $("#receiving_date").val();
		var weight_gain = $("#weight_gain").val();
		var naration = $("#naration").val();
		$.ajax({
		url: "{{ url('save-receiving-entry') }}?loading_entries_id="+loading_entries_id+"&shortage_bag="+shortage_bag+"&shortage_mt="+shortage_mt+"&shortage_rs="+shortage_rs+"&shortage_mt_rs="+shortage_mt_rs+"&received_bag="+received_bag+"&received_mt="+received_mt+"&diesel_advance="+diesel_advance+"&cash_advance="+cash_advance+"&commision="+commision+"&gross_amt="+gross_amt+"&net_amt="+net_amt+"&receiving_date="+receiving_date+"&weight_gain="+weight_gain+"&naration="+naration,
		type: 'get',
		success: function(response) {
		console.log(response);
		if(response == 1){
			swal("Submitted Successfully", "receiving Entry Submitted", "success");
			getLoadingNumber();
			showReceivingEntry();
			$("#receiving_entry_form")[0].reset();
		}
		else if(response == 2){
			swal("Updated Successfully", "Receiving Entry Updated", "success");			
			showReceivingEntry();
			$("#btnReceiving").html('- SAVE -');
			$("#receiving_entry_form")[0].reset();
			var id = $("#vehicle_number").val();
			getLoadingNumber(id);
		}
		}      
		});

	}


	function getLoadingNumber(id){
		$.ajax({
		url: "{{ url('getLoadingNumber') }}?id="+id,
		type: 'get',
		success: function(response) {
			// console.log(response);
		$("#loading_number").html(response);
		$('#loading_number').trigger("chosen:updated");
		}      
	});
	}
	// getLoadingNumber();

	function showReceivingEntry(){
		$.ajax({
		url: "{{ url('showReceivingEntry') }}",
		type: 'get',
		success: function(response) {
			console.log(response);
		$("#receiving_datatable").html(response);
		}      
	});
	}
	showReceivingEntry();


	function receiving_edit(id){
		$.ajax({
		url: "{{ url('editReceivingEntry') }}?id="+id,
		type: 'get',
		success: function(response) {
			// console.log(response);
			var x = JSON.parse(response);
				console.log(x);
				$("#vehicle_number").val(x.trucks.truck_number);
				$("#from_place").val(x.from_place);
				$("#to_place").val(x.to_place);
				$("#bags").val(x.loading_entries.bag);
				$("#cash_advance").val(x.cash_advance);

				$("#cash_advance").val(x.loading_entries.cash_advance);
				$("#commision").val(x.loading_entries.commision_rate);
				$("#truck_owner").val(x.truckowners);				
				$("#diesel_advance").val(x.loading_entries.diesel_advance);
				$("#loading_date").val(x.loading_entries.loading_date);
				$("#weight_mt").val(x.loading_entries.weight);
				$("#rate").val(x.loading_entries.freight_rate);
				var receiving_date = moment(x.loading_receiveings.receiving_date).format('DD-MM-YYYY');
				// console.log('receiving_date='+receiving_date);
				$("#receiving_date").val(receiving_date);
				$("#received_bag").val(x.loading_receiveings.received_bag);
				$("#received_mt").val(x.loading_receiveings.received_mt);
				$("#shortage_bag").val(x.loading_receiveings.shortage_bag);
				$("#shortage_mt").val(x.loading_receiveings.shortage_mt);
				$("#shortage_rs").val(x.loading_receiveings.shortage_rs);
				$("#shortage_mt_rs").val(x.loading_receiveings.shortage_mt_rs);
				$("#weight_gain").val(x.loading_receiveings.weight_gain);
				$("#gross_amt").val(x.loading_receiveings.gross_amt);
				$("#net_amt").val(x.loading_receiveings.net_amt);
				$("#naration").val(x.loading_receiveings.narration);	
				$("#loading_number").html('<option value="'+x.loading_receiveings.id+'">'+x.loading_entries.loading_no+'</option>');
				$('#loading_number').trigger("chosen:updated");
				getVehicle(x.trucks.id);
				$("#btnReceiving").html('- UPDATE -');
		}      
		});
	}	

</script>


<script>
	<?php
	if(isset($_GET['received_id'])){
		?>
		receiving_edit({{ $_GET['received_id'] }});
		<?php
	}
	?>
</script>



