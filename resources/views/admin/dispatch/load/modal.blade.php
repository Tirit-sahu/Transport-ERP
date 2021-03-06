	<div id="new-task" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Add VEHICLE NO. </h4>
				</div>
				<form action="#" class='new-task-form form-horizontal form-bordered' id="add_vehicle">
					<div class="modal-body nopadding">
						

						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Truck Number <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="truck_number" id="truck_vehicle_number" value="@yield('truck_number')" 
                                                placeholder="Truck Number" class="form-control"  required  autocomplete="off" >

                                   <span style="color:red;" id="truck_number_alert"> </span>
							</div>
						</div>

						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">Owner Name  <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<select name="owner_name" id="owner_name" required class='form-control chosen-select'>
									<option value="">Select</option>
									@foreach($owners as $owner)
										<option value="{{ $owner->id }}">{{ $owner->owner_name }}</option>
									@endforeach
									
								</select>
								<span style="color:red;" id="owner_name_alert"> </span>
							</div>
						</div>
						<style type="text/css">
							
							.chosen-container{
								width: 100%!important;
							}

						</style>
						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">Truck Type  <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<select name="tructype_id" id="tructype_id" class='chosen-select form-control' required style="width: 100%" required>
                                                <option value="">Select</option>
                                   					@foreach($types as $type)
										                <option value="{{$type->id}}">{{$type->trucktype}}</option> 
                                                    @endforeach 
											</select>
								<span style="color:red;" id="tructype_id_alert"> </span>
									
							</div>
						</div>
						
						
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-primary" value="Save" onclick="vehicle_noo();">
					</div>
				</form>
			</div>
		</div>
	</div>



	<div id="Consignormodal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Add Consignor </h4>
				</div>
				<form action="#" id="addconsignor" class='new-task-form form-horizontal form-bordered'>
					<div class="modal-body nopadding">
						

						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Consignor Name <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="consignor_name" id="consignor_name" value="@yield('consignor_name')" 
                                                placeholder="Consignor Name" class="form-control"    autocomplete="off" >

                                      <span style="color:red;" id="consignor_name_alert"> </span>
							</div>
						</div>

						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">Place<span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<select name="place_name" id="place_name" class='form-control chosen-select'>
									<option value="">Select</option>
									@foreach($places as $place)
										<option value="{{ $place->id }}">{{ $place->placename }}</option>
									@endforeach
									
								</select>

                                      <span style="color:red;" id="place_name_alert"> </span>

							</div>
						</div>
						<style type="text/css">
							
							.chosen-container{
								width: 100%!important;
							}

						</style>
						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">State  <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<select name="statename" id="statename" class='chosen-select form-control' style="width: 100%" required>
                                                <option value="">Select</option>
                                   					@foreach($states as $state)
										                <option value="{{$state->id}}">{{$state->statename}}</option> 
                                                    @endforeach 
											</select>

                                      <span style="color:red;" id="statename_alert"> </span>

							</div>
						</div>
						
						
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-primary" value="Save" onclick="consignor_store();">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--- Start Consignee ---->
		<div id="Consignee-modal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Add Consignee </h4>
				</div>
				<form action="#" id="myform" class='new-task-form form-horizontal form-bordered'>
					<div class="modal-body nopadding">
						

						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Consignee Name <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="consignee_name" id="consignee_name" value="@yield('consignee_name')" 
                                                placeholder="Consignee Name" class="form-control"    autocomplete="off" >
                                      <span style="color:red;" id="consignee_name_alert"> </span>

							</div>
						</div>

						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">Place<span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<select name="place" id="place" class='form-control chosen-select'>
									<option value="">Select</option>
									@foreach($places as $place)
										<option value="{{ $place->id }}">{{ $place->placename }}</option>
									@endforeach
									
								</select>

                                      <span style="color:red;" id="place_alert"> </span>

							</div>
						</div>
						<style type="text/css">
							
							.chosen-container{
								width: 100%!important;
							}

						</style>
						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">State  <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<select name="state" id="state" class='chosen-select form-control' style="width: 100%" required>
                                                <option value="">Select</option>
                                   					@foreach($states as $state)
										                <option value="{{$state->id}}">{{$state->statename}}</option> 
                                                    @endforeach 
											</select>
                                      <span style="color:red;" id="state_alert"> </span>

							</div>
						</div>
						
						
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-primary" value="Save" onclick="consignee_store();">
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- //End Consignee Moal -->


	<!--- Start Place ---->
		<div id="Place-modal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Add Place </h4>
				</div>
				<form action="#" id="addplace" class='new-task-form form-horizontal form-bordered'>
					<div class="modal-body nopadding">
						

						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Place Name <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="Addplace_name" id="Addplace_name" value="@yield('Addplace_name')" 
                                                placeholder="Place Name" class="form-control"    autocomplete="off" >
                                      <span style="color:red;" id="Addplace_name_alert"> </span>
							
							</div>
						</div>

						
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-primary" value="Save" onclick="place_store();">
					</div>
				</form>
			</div>
		</div>
	</div>


		<div id="Petrol-modal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Add Diesel </h4>
				</div>
				<form action="#" class='new-task-form form-horizontal form-bordered' id="addpentrol">
					<div class="modal-body nopadding">
						

						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Diesel Pump Name <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="petrol_pump_name" id="petrol_pump_name" value="@yield('petrol_pump_name')" 
                                 placeholder="Petrol Pump Name" class="form-control"    autocomplete="off" >
							</div>
						</div>

						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">State  <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<select name="addstatename" id="addstatename" class='chosen-select form-control' style="width: 100%" required>
                                                <option value="">Select</option>
                                   					@foreach($states as $state)
										                <option value="{{$state->id}}">{{$state->statename}}</option> 
                                                    @endforeach 
											</select>
                                      <span style="color:red;" id="addstatename_alert"> </span>

							</div>
						</div>

						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">Type  <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<select name="petrol_type" id="petrol_type" class='chosen-select form-control' style="width: 100%" required>
                                             <option value="">Type</option>
                                   			 <option value="Self">Self</option> 
                                   			 <option value="Other">Other</option> 
                                                    
											</select>
                                      <span style="color:red;" id="petrol_type_alert"> </span>

							</div>
						</div>

						
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-primary" value="Save" onclick="petrol_store();">
					</div>
				</form>
			</div>
		</div>
	</div>




	<!-- item master modal -->
	<div id="Item-master-modal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Add Items </h4>
				</div>
				<form action="#" class='new-task-form form-horizontal form-bordered' id="addItems">
					<div class="modal-body nopadding">
						

						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Item Category <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<select name="item_category" id="item_category" class='chosen-select form-control' >                                            
									<option value=""> - Select - </option>
									@foreach($cates as $cate)
								   <option value="{{$cate->id}}">{{$cate->item_category_name}}</option>
								   @endforeach
									</select>
									<span style="color:red;" id="item_category_alert"> </span>
							</div>
						</div>

						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">Item Name  <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="item_name" id="item_name" value="@yield('item_name')" 
                                                placeholder="Item Name" class="form-control" required   autocomplete="off" >
                                      <span style="color:red;" id="item_name_alert"> </span>

							</div>
						</div>

						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">Unit Messure  <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<select name="unit_messure" id="unit_messure" class='chosen-select form-control' >

									<option value=""> - Select - </option>
									@foreach($units as $unit)
									<option value="{{$unit->id}}">{{$unit->name}}</option>
									@endforeach
									</select>
                                      <span style="color:red;" id="unit_messure_alert"> </span>

							</div>
						</div>

						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">Item Rate  <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="item_rate" id="item_rate" value="@yield('item_rate')"  
                                                placeholder="Item Rate" class="form-control"    autocomplete="off">
                                      <span style="color:red;" id="item_rate_alert"> </span>

							</div>
						</div>

						
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-primary" value="Save" onclick="item_store();">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end item master modal -->


	<!-- Hemal master modal -->
	<div id="Hemal-master-modal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Add Hemal </h4>
				</div>
				<form action="#" class='new-task-form form-horizontal form-bordered' id="addHemal">
					<div class="modal-body nopadding">	

						

						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">Hemal Tolly Name  <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="tolly_name" id="tolly_name" value="@yield('tolly_name')" 
                                                placeholder="Item Name" class="form-control" required   autocomplete="off" >
                                      <span style="color:red;" id="tolly_name_alert"> </span>

							</div>
						</div>
						

						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">Head Name  <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="head_name" id="head_name" value="@yield('head_name')"  
                                                placeholder="Item Rate" class="form-control"    autocomplete="off">
                                      <span style="color:red;" id="head_name_alert"> </span>

							</div>
						</div>

						
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-primary" value="Save" onclick="hemal_store();">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- End Hemal master modal -->


<script type="text/javascript">

// Shortcut Place  Start

function hemal_store(){
	
	var tolly_name=document.getElementById("tolly_name").value;
	var head_name=document.getElementById("head_name").value;
	var status = false;
	if(tolly_name==''){
		document.getElementById('tolly_name_alert').innerHTML='Tolly name field is required.';
		status = false;
	}else{
		document.getElementById('tolly_name_alert').innerHTML=' ';
		status = true;
	}
	if(head_name==''){
		document.getElementById('head_name_alert').innerHTML='Head name field is required.';
		status = false;
	}else{
		document.getElementById('head_name_alert').innerHTML=' ';
		status = true;
	}
	
	if(status == true){
			$.ajax({
			url: "{{ url('hemal-store') }}?tolly_name="+tolly_name+"&head_name="+head_name,
			type: 'get',
			success: function(response) {
			console.log(response);
			$("#addHemal")[0].reset();
			$("#Hemal-master-modal").modal('hide');

			getHemal();

			}
			});
	}
	 
}


function getHemal(){
	 $.ajax({
      url: "{{ url('get-hemal') }}",
      type: 'get',
      success: function(response) {
		  console.log(response);
      	$("#hemal").html(response);
		$("#hemal").val("@yield('hemal')");
      	$('#hemal').trigger("chosen:updated");
      }
      
    });
}
getHemal();



function item_store(){
	
	var item_category=document.getElementById("item_category").value;
	var item_name=document.getElementById("item_name").value;
	var unit_messure=document.getElementById("unit_messure").value;
	var item_rate=document.getElementById("item_rate").value;
	var status = false;
	if(item_category==''){
		document.getElementById('item_category_alert').innerHTML='Category field is required.';
		status = false;
	}else{
		document.getElementById('item_category_alert').innerHTML=' ';
		status = true;
	}
	if(item_name==''){
		document.getElementById('item_name_alert').innerHTML='Item Name field is Required.';
		status = false;
	}else{
		document.getElementById('item_name_alert').innerHTML=' ';
		status = true;
	}
	if(unit_messure==''){
		document.getElementById('unit_messure_alert').innerHTML='Unit Messure field is Required.';
		status = false;
	}else{
		document.getElementById('unit_messure_alert').innerHTML=' ';
		status = true;
	}
	if(item_rate==''){
		document.getElementById('item_rate_alert').innerHTML='Item Rate field is Required.';
		status = false;
	}else{
		document.getElementById('item_rate_alert').innerHTML=' ';
		status = true;
	}
	if(status == true){
			$.ajax({
			url: "{{ url('items-store') }}?item_category="+item_category+"&item_name="+item_name+"&unit_messure="+unit_messure+"&item_rate="+item_rate,
			type: 'get',
			success: function(response) {
			//var x=JSON.parse(response);	
			$("#addItems")[0].reset();


			$(" #Item-master-modal ").modal('hide');

			getItems();

			}
			});
	}
	 
}


function getItems(){
	 $.ajax({
      url: "{{ url('get-items-for-loading') }}",
      type: 'get',
      success: function(response) {
		  console.log(response);
      	$("#item_master").html(response);
		$("#item_master").val("@yield('item_master')");
      	$('#item_master').trigger("chosen:updated");
      }      
    });
}
getItems();


function petrol_store(){
	var petrol_pump_name=document.getElementById("petrol_pump_name").value;
	var addstatename=document.getElementById("addstatename").value;
	var petrol_type=document.getElementById("petrol_type").value;
	
	if(petrol_pump_name==''){
		document.getElementById('petrol_pump_name_alert').innerHTML='Petrol Pump Name required.'
	}
	if(addstatename==''){
		document.getElementById('addstatename_alert').innerHTML='State Required.'
	}
	if(petrol_type==''){
		document.getElementById('petrol_type_alert').innerHTML='Petrol Type Required.'
	}
	 $.ajax({
      url: "{{ url('petrol-store') }}?petrol_pump_name="+petrol_pump_name+"&addstatename="+addstatename+"&petrol_type="+petrol_type,
      type: 'get',
      success: function(response) {
       //var x=JSON.parse(response);	
        	$("#addpentrol")[0].reset();
        

            $(" #Petrol-modal ").modal('hide');

             getPetrol();
         
     }
    });
}






function getPetrol(){
	 $.ajax({
      url: "{{ url('get-petrol') }}",
      type: 'get',
      success: function(response) {
      	$("#pentrol_pump").html(response);
		  $("#pentrol_pump").val("@yield('pentrol_pump')");
      	$('#pentrol_pump').trigger("chosen:updated");
      }      
    });
}
getPetrol();
//End Shortcut Place 
</script>
<script type="text/javascript">
// Shortcut Place  Start

function place_store(){
	var place_name=document.getElementById("Addplace_name").value;
	if(place_name==''){
		document.getElementById('Addplace_name_alert').innerHTML='Place Name Required.'
	}else{
	 $.ajax({
      url: "{{ url('place-store') }}?place_name="+place_name,
      type: 'get',
      success: function(response) {
       //var x=JSON.parse(response);	
        
            $(" #Place-modal ").modal('hide');
            $("#addplace")[0].reset();
             getPlace();
         
     }
    });

	}

}





function getPlace(){
	 $.ajax({
      url: "{{ url('get-place') }}",
      type: 'get',
      success: function(response) {
 
      	$("#to_plce").html(response);
      	$("#from_place").html(response);
		  $("#from_place").val("@yield('from_place')");
		  $("#to_plce").val("@yield('to_plce')");
      	$('#from_place').trigger("chosen:updated");
      	$('#to_plce').trigger("chosen:updated");
      }
      
    });
}
getPlace();
//End Shortcut Place 

</script>
<script type="text/javascript">
// Shortcut Consignee  Start

function consignee_store(){
	var consignee_name=document.getElementById("consignee_name").value;
	var place=document.getElementById("place").value;
	var state=document.getElementById("state").value;
		if(consignee_name==''){
		document.getElementById('consignee_name_alert').innerHTML='Consignee Name Required.'
		}

	if(place==''){
		document.getElementById('place_alert').innerHTML='Place Name Required.'
		}
			if(state==''){
		document.getElementById('state_alert').innerHTML='State Name Required.'
		} 		
	 $.ajax({

      url: "{{ url('consignee-store') }}?consignee_name="+consignee_name+"&place="+place+"&state="+state,
      type: 'get',
      success: function(response) {
       //var x=JSON.parse(response);	
        document.getElementById("consignee_name").value=' ';
		document.getElementById("place").value=' ';
		document.getElementById("state").value=' ';

            $(" #Consignee-modal ").modal('hide');
              $("#addpentrol")[0].reset();
             getConsignee();
         
     }
    });
	 

}





function getConsignee(){
	 $.ajax({
      url: "{{ url('get-consignee') }}",
      type: 'get',
      success: function(response) {
      	$("#consignee").html(response);
		  $("#consignee").val("@yield('consignee')");
      	$('#consignee').trigger("chosen:updated");
      }
      
    });
}
getConsignee();
//End Shortcut Consignee 
</script>
<script type="text/javascript">
//Shortcut  Vehicle Start

function vehicle_noo(){
	var truck_number=document.getElementById("truck_vehicle_number").value;
	var owner_name=document.getElementById("owner_name").value;
	var tructype_id=document.getElementById("tructype_id").value;
		if(truck_number==''){
			document.getElementById('truck_number_alert').innerHTML='Truck Number required.';
		}
		if(owner_name==''){
			document.getElementById('owner_name_alert').innerHTML='Onwer Name required.';
		}
		if(tructype_id==''){
			document.getElementById('tructype_id_alert').innerHTML='Truck Type required.';
		}
	 $.ajax({
      url: "{{ url('vehicle-store') }}?truck_number="+truck_number+"&owner_name="+owner_name+"&tructype_id="+tructype_id,
      type: 'get',
      success: function(response) {
            $("#new-task").modal('hide');
           $("#add_vehicle")[0].reset();
             getVehicle();
         
     }
    });
	 	
}




function getVehicle(){
	 $.ajax({
      url: "{{ url('get-vehicle') }}",
      type: 'get',
      success: function(response) {
      	
      	$("#vehicle_fetch").html(response);
		$("#vehicle_fetch").val("@yield('vehicle_no')");
      	$('#vehicle_fetch').trigger("chosen:updated");
      }
      
    });
}
getVehicle();
//Shortcut End Vehicle
</script>
<script type="text/javascript">
//shortcut Consignor Start
function consignor_store(){
	var consignor_name=document.getElementById("consignor_name").value;
	var place_name=document.getElementById("place_name").value;
	var statename=document.getElementById("statename").value;
	
	if(consignor_name==''){
	document.getElementById("consignor_name_alert").innerHTML='Consignor name Required'
	}
	if(place_name==''){
	document.getElementById("place_name_alert").innerHTML='Place name Required'
	}
	if(statename=='' ){
	document.getElementById("statename_alert").innerHTML='State name Required'
	}
	 $.ajax({
      url: "{{ url('consignor-store') }}?consignor_name="+consignor_name+"&place_name="+place_name+"&statename="+statename,
      type: 'get',
      success: function(response) {	

            $("#Consignormodal").modal('hide');
             getConsignor();
         
     }
    });
	 
}


function getConsignor(){
	 $.ajax({
      url: "{{ url('get-consignor') }}",
      type: 'get',
      success: function(response) {
      	$("#consignor_fetch").html(response);
		$("#consignor_fetch").val("@yield('consignor')");
      	$('#consignor_fetch').trigger("chosen:updated");
      }
      
    });
}

getConsignor();


//End shortcut Consignor 
</script>