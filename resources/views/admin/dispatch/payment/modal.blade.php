	<div id="new-task" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Add VEHICLE NO. </h4>
				</div>
				<form action="#" class='new-task-form form-horizontal form-bordered'>
					<div class="modal-body nopadding">
						

						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Truck Number <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="truck_number" id="truck_number" value="@yield('truck_number')" 
                                                placeholder="Truck Number" class="form-control"    autocomplete="off" >
							</div>
						</div>

						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">Owner Name  <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<select name="owner_name" id="owner_name" class='form-control chosen-select'>
									<option > - Select - </option>
									@foreach($owners as $owner)
										<option value="{{ $owner->id }}">{{ $owner->owner_name }}</option>
									@endforeach
									
								</select>
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
								<select name="tructype_id" id="tructype_id" class='chosen-select form-control' style="width: 100%" required>
                                                <option >Select</option>
                                   					@foreach($types as $type)
										                <option value="{{$type->id}}">{{$type->trucktype}}</option> 
                                                    @endforeach 
											</select>
							</div>
						</div>
						
						
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-primary" value="Save" onclick="vehicle_no();">
					</div>
				</form>
			</div>
		</div>
	</div>



	<div id="Consignor-modal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Add Consignor </h4>
				</div>
				<form action="#" class='new-task-form form-horizontal form-bordered'>
					<div class="modal-body nopadding">
						

						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Consignor Name <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="consignor_name" id="consignor_name" value="@yield('consignor_name')" 
                                                placeholder="Consignor Name" class="form-control"    autocomplete="off" >
							</div>
						</div>

						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">Place<span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<select name="place_name" id="place_name" class='form-control chosen-select'>
									<option > - Select - </option>
									@foreach($places as $place)
										<option value="{{ $place->id }}">{{ $place->placename }}</option>
									@endforeach
									
								</select>
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
                                                <option >Select</option>
                                   					@foreach($states as $state)
										                <option value="{{$state->id}}">{{$state->statename}}</option> 
                                                    @endforeach 
											</select>
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
				<form action="#" class='new-task-form form-horizontal form-bordered'>
					<div class="modal-body nopadding">
						

						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Consignee Name <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="consignee_name" id="consignee_name" value="@yield('consignee_name')" 
                                                placeholder="Consignee Name" class="form-control"    autocomplete="off" >
							</div>
						</div>

						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">Place<span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<select name="place" id="place" class='form-control chosen-select'>
									<option > - Select - </option>
									@foreach($places as $place)
										<option value="{{ $place->id }}">{{ $place->placename }}</option>
									@endforeach
									
								</select>
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
                                                <option >Select</option>
                                   					@foreach($states as $state)
										                <option value="{{$state->id}}">{{$state->statename}}</option> 
                                                    @endforeach 
											</select>
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


		<div id="Consignor-modal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Add Consignor </h4>
				</div>
				<form action="#" class='new-task-form form-horizontal form-bordered'>
					<div class="modal-body nopadding">
						

						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Consignor Name <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="consignor_name" id="consignor_name" value="@yield('consignor_name')" 
                                                placeholder="Consignor Name" class="form-control"    autocomplete="off" >
							</div>
						</div>

						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">Place<span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<select name="place_name" id="place_name" class='form-control chosen-select'>
									<option > - Select - </option>
									@foreach($places as $place)
										<option value="{{ $place->id }}">{{ $place->placename }}</option>
									@endforeach
									
								</select>
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
                                                <option >Select</option>
                                   					@foreach($states as $state)
										                <option value="{{$state->id}}">{{$state->statename}}</option> 
                                                    @endforeach 
											</select>
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
		<div id="Place-modal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Add Place </h4>
				</div>
				<form action="#" class='new-task-form form-horizontal form-bordered'>
					<div class="modal-body nopadding">
						

						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Place Name <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="Addplace_name" id="Addplace_name" value="@yield('Addplace_name')" 
                                                placeholder="Place Name" class="form-control"    autocomplete="off" >
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
					<h4 class="modal-title" id="myModalLabel">Add Petrol </h4>
				</div>
				<form action="#" class='new-task-form form-horizontal form-bordered'>
					<div class="modal-body nopadding">
						

						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Petrol Pump Name <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="petrol_pump_name" id="petrol_pump_name" value="@yield('petrol_pump_name')" 
                                 placeholder="Petrol Pump Name" class="form-control"    autocomplete="off" >
							</div>
						</div>

						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">State  <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<select name="addstatename" id="addstatename" class='chosen-select form-control' style="width: 100%" required>
                                                <option >Select</option>
                                   					@foreach($states as $state)
										                <option value="{{$state->id}}">{{$state->statename}}</option> 
                                                    @endforeach 
											</select>
							</div>
						</div>

						<div class="form-group">
							<label for="tasktitel" class="col-sm-3 control-label">Type  <span class="err" style="color:#F00;">*</span></label>
							<div class="col-sm-9">
								<select name="petrol_type" id="petrol_type" class='chosen-select form-control' style="width: 100%" required>
                                             <option >Type</option>
                                   			 <option value="Self">Self</option> 
                                   			 <option value="Other">Other</option> 
                                                    
											</select>
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


<script type="text/javascript">

// Shortcut Place  Start

function petrol_store(){
	var petrol_pump_name=document.getElementById("petrol_pump_name").value;
	var addstatename=document.getElementById("addstatename").value;
	var petrol_type=document.getElementById("petrol_type").value;
	
	 $.ajax({
      url: "{{ url('petrol-store') }}?petrol_pump_name="+petrol_pump_name+"&addstatename="+addstatename+"&petrol_type="+petrol_type,
      type: 'get',
      success: function(response) {
       //var x=JSON.parse(response);	
        
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
      	//console.log(response);
      	$("#pentrol_pump").html(response);
      	$('#pentrol_pump').trigger("chosen:updated");
      }
      
    });
}
getPetrol();
//End Shortcut Place 

// Shortcut Place  Start

function place_store(){
	var place_name=document.getElementById("Addplace_name").value;
	
	 $.ajax({
      url: "{{ url('place-store') }}?place_name="+place_name,
      type: 'get',
      success: function(response) {
       //var x=JSON.parse(response);	
        
            $(" #Place-modal ").modal('hide');
             getPlace();
         
     }
    });

}





function getPlace(){
	 $.ajax({
      url: "{{ url('get-place') }}",
      type: 'get',
      success: function(response) {
      	//console.log(response);
      	$("#to_plce").html(response);
      	$("#from_place").html(response);
      	$('#from_place').trigger("chosen:updated");
      	$('#to_plce').trigger("chosen:updated");
      }
      
    });
}
getPlace();
//End Shortcut Place 


// Shortcut Consignee  Start

function consignee_store(){
	var consignee_name=document.getElementById("consignee_name").value;
	var place=document.getElementById("place").value;
	var state=document.getElementById("state").value;

	 $.ajax({
      url: "{{ url('consignee-store') }}?consignee_name="+consignee_name+"&place="+place+"&state="+state,
      type: 'get',
      success: function(response) {
       //var x=JSON.parse(response);	
        
            $(" #Consignee-modal ").modal('hide');
             getConsignee();
         
     }
    });

}





function getConsignee(){
	 $.ajax({
      url: "{{ url('get-consignee') }}",
      type: 'get',
      success: function(response) {
      	//console.log(response);
      	$("#consignee").html(response);
      	$('#consignee').trigger("chosen:updated");
      }
      
    });
}
getConsignee();
//End Shortcut Consignee 

//Shortcut  Vehicle Start

function vehicle_no(){
	var truck_number=document.getElementById("truck_number").value;
	var owner_name=document.getElementById("owner_name").value;
	var tructype_id=document.getElementById("tructype_id").value;

	 $.ajax({
      url: "{{ url('vehicle-store') }}?truck_number="+truck_number+"&owner_name="+owner_name+"&tructype_id="+tructype_id,
      type: 'get',
      success: function(response) {
       //var x=JSON.parse(response);	
        
            $("#new-task").modal('hide');
             getVehicle();
         
     }
    });

}




function getVehicle(){
	 $.ajax({
      url: "{{ url('get-vehicle') }}",
      type: 'get',
      success: function(response) {
      	//console.log(response);
      	$("#vehicle_fetch").html(response);
      	$('#vehicle_fetch').trigger("chosen:updated");
      }
      
    });
}
getVehicle();
//Shortcut End Vehicle

//shortcut Consignor Start
function consignor_store(){
	var consignor_name=document.getElementById("consignor_name").value;
	var place_name=document.getElementById("place_name").value;
	var statename=document.getElementById("statename").value;

	 $.ajax({
      url: "{{ url('consignor-store') }}?consignor_name="+consignor_name+"&place_name="+place_name+"&statename="+statename,
      type: 'get',
      success: function(response) {
       //var x=JSON.parse(response);	
        
            $("#Consignor-modal").modal('hide');
             getConsignor();
         
     }
    });

}


function getConsignor(){
	 $.ajax({
      url: "{{ url('get-consignor') }}",
      type: 'get',
      success: function(response) {
      	//console.log(response);
      	$("#consignor_fetch").html(response);
      	 $('#consignor_fetch').trigger("chosen:updated");
      }
      
    });
}

getConsignor();


//End shortcut Consignor 
</script>