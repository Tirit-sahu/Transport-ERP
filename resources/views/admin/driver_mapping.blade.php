<?php 
$button = '';
$action = '';
$vehicle = '';
$driver = '';
$helper = '';
	if (isset($driver_mapping)) {
		$button = '-UPDATE-';
		$action = url('driverMappingUpdate/'.$driver_mapping->id);
		$driver = $driver_mapping->driver;
		$helper = $driver_mapping->helper;
		$vehicle = $driver_mapping->vehicle;
	}else{
		$button = '-SAVE-';
		$action = url('/driverMappingStore');
	}
?>
@include('admin.layouts.head')
@include('admin.layouts.header')

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
									<i class="fa fa-bars"></i>Maintenance</h3>
							</div>
							<div class="box-content nopadding">
								
								@include('admin.tab_maintenance')

								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
									<form action="{{ $action }}" method="post" class='form-vertical'>
										@csrf
									<div class="row">
										<x-alert />
										<div class="col-sm-2">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>VEHICLE NO. <span class="err" style="color:#F00;">*</span> </strong> <!--<img src="add.png" id="shortcut_truck"><a href="#" id="add_new" data-form="short_truck" tabindex="49"></a>-->
												</label>
												<select name="vehicle" id="vehicle_fetch" class='chosen-select form-control'>
												<option value="">Select</option>
											</select>
											<span class="text-danger">{{ $errors->first('vehicle') }}</span>
											</div>
										</div>
										
                                        
                                        <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>DRIVER  <!--<img src="add.png" id="shortcut_truck"><a href="#" id="add_new" data-form="short_truck" tabindex="49"></a><span class="err" style="color:#F00;">*</span>-->
												</strong></label>
												<select name="driver" id="drivers" class='chosen-select form-control'>
												<option value="0">Select</option></select>
												<span class="text-danger">{{ $errors->first('driver') }}</span>
											</div>
										</div>
                                        
                                        <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>CONDUCTOR <span class="err" style="color:#F00;">*</span> 
												</strong><!--<img src="add.png" id="shortcut_truck"><a href="#" id="add_new" data-form="short_truck" tabindex="49"></a>--></label>
												<select name="helper" id="conductor" class='chosen-select form-control'>
                                                <option value="0">Select</option>
												</select>
												<span class="text-danger">{{ $errors->first('helper') }}</span>
											</div>
										</div>
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>FROM DATE</strong></label>
												<input type="text" name="fromeDate" id="fromedate"  class="form-control datePicker" value="{{ isset($driver_mapping)?$driver_mapping->fromeDate:'' }}">
												<span class="text-danger">{{ $errors->first('fromeDate') }}</span>
											</div>
										</div>
                                        
                                        
                                        
                                        
                                     <center> 
                                    <button class="btn btn-satgreen" type="submit">{{ $button }}</button> &nbsp;&nbsp;
                                       <a href="#" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                                       <a href="{{ url('/driverMappingReport') }}" class="btn btn-teal">- REPORTS -</a></center>
                                        
									</div>
									
									
									
									
									
									
									
								</form>
                                
                                
									</div>
                                    

								</div>
							</div>
						</div>
					</div>
                    
					@include('admin.document_footer');
					
				</div>
				
				
				
				
			</div>
		{{-- </div> --}}

</div>


<script type="text/javascript">										
	$( function() {
	
	$("#fromedate").datepicker(
	{ 
	dateFormat: 'dd-mm-yy',
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	}
	);

		function getVehicle(){
			$.ajax({
			url: "{{ url('get-vehicle') }}",
			type: 'get',
			success: function(response) {
			
			$("#vehicle_fetch").html(response);
			$("#vehicle_fetch").val(<?php echo $vehicle; ?>);
			$('#vehicle_fetch').trigger("chosen:updated");
			}
			
		});
		}
		getVehicle();


		function getDrivers(){
			$.ajax({
			url: "{{ url('get-select-option') }}?table=drivers&id=designation&key=Driver&value=id&column=employeeName",
			type: 'get',
			success: function(response) {
			console.log(response);
			$("#drivers").html(response);
			$("#drivers").val(<?php echo $driver; ?>);
			$('#drivers').trigger("chosen:updated");
			}
			
		});
		}
		getDrivers();

		function getConductor(){
			$.ajax({
			url: "{{ url('get-select-option') }}?table=drivers&id=designation&key=Conductor&value=id&column=employeeName",
			type: 'get',
			success: function(response) {
			console.log(response);
			$("#conductor").html(response);
			$("#conductor").val(<?php echo $helper; ?>);			
			$('#conductor').trigger("chosen:updated");
			}
			
		});
		}
		getConductor();


	} );
</script>

