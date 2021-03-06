
@include('admin.layouts.head')
@include('admin.layouts.header')
<?php 
    $vehicle = '';
    $driver = ''; 
    $actionURI = '';
    $paymentMode = '';
    $button = '';
    if (isset($generate_salary)) {
        $vehicle = $generate_salary->vehicle;
        $driver = $generate_salary->driver;
        $paymentMode = $generate_salary->paymentMode;
        $button = '- UPDATE -';
        $actionURI = url('generateSalaryStoreUpdate/'.$generate_salary->id);  
    }else{
        $button = '- SAVE -';
        $actionURI = url('generateSalaryStore');
    }
?>
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
								@include('admin.tab_accounts')
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									
                                    
                            <div>
                            
                                <form action="{{ $actionURI }}" method="post" class='form-vertical'>
                                    @csrf
                                    <x-alert />
                                    <div class="row">
    
                                    <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="textfield" class="control-label"><strong>DRIVER/HELPER  <a href="#" id="add_new" data-form="short_truck" tabindex="49"></a><span class="err" style="color:#F00;">*</span></strong></label>
                                    <select name="driver" id="driver" class='chosen-select form-control'>                                                
                                    </select>
                                    </div>
                                    </div>
                                    <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="textfield" class="control-label"><strong>VEHICLE NO. <span class="err" style="color:#F00;">*</span> </strong> <a href="#" id="add_new" data-form="short_truck" tabindex="49"></a></label>
                                    <select name="vehicle" id="vehicle" class='chosen-select form-control'>                                                
                                    </select>
                                    </div>
                                    </div>
    
                                    <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="AMT" class="control-label"><strong>AMOUNT</strong></label>
                                    <input type="text" name="AMT" id="AMT" value="{{ isset($generate_salary)?$generate_salary->AMT:'' }}" class="form-control">
                                    </div>
                                    </div>
    
                                    <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="textfield" class="control-label"><strong>PAYMENT MOOD <span class="err" style="color:#F00;">*</span> 
                                    </strong><a href="#" id="add_new" data-form="short_truck" tabindex="49"></a></label>
                                    <?php 
                                    $payModeArray = ['Cash', 'Check', 'A/C Transfer', 'Other'];
                                    ?>
                                    <select name="paymentMode" id="paymentMode" class='chosen-select form-control'>
                                    <option value="">Select Payment Mode</option>
                                    @foreach($payModeArray as $PMA)                     
                                    <option <?php if($paymentMode==$PMA){ echo 'selected'; } ?> value="{{ $PMA }}">{{ $PMA }}</option>
                                    @endforeach    
                                    </select>
                                    </div>
                                    </div>

                                    <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="paymentDate" class="control-label"><strong>PAYMENT DATE</strong></label>
                                    <input type="text" name="paymentDate" value="{{ isset($generate_salary)?$generate_salary->paymentDate:'' }}" id="paymentDate"  class="form-control">
                                    </div>
                                    </div>
    
                                    <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="remark" class="control-label"><strong>REMARK</strong></label>
                                    <input type="text" name="remark" id="remark" value="{{ isset($generate_salary)?$generate_salary->remark:'' }}" class="form-control">
                                    </div>
                                    </div>
    
    
    
    
    
    
                                    <center> 
                                    <button type="submit" class="btn btn-satgreen">{{ $button }}</button> &nbsp;&nbsp;
                                    <a href="#" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                                    <a href="{{ url('/generateSalaryShow') }}" class="btn btn-teal">- REPORTS -</a></center>
    
                                    </div>
    
    
    
                                    </form>
                            
							</div>
									
										
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


<script>
$( function() {

function getVehicle(){
    $.ajax({
    url: "{{ url('get-vehicle') }}",
    type: 'get',
    success: function(response) {
    $("#vehicle").html(response);
    $("#vehicle").val(<?php echo $vehicle; ?>);
    $('#vehicle').trigger("chosen:updated");
    }

    });
    }
    getVehicle();

    function getDrivers(){
    $.ajax({
    url: "{{ url('get-select-option2') }}?table=drivers&id=designation&key=Driver&value=id&column=employeeName&column2=mobile",
    type: 'get',
    success: function(response) {
    // console.log(response);
    $("#driver").html(response);
    $("#driver").val(<?php echo $driver; ?>);
    $('#driver').trigger("chosen:updated");
    }

    });
    }
    getDrivers();


    

    $("#paymentDate").datepicker(
	{ 
	dateFormat: 'dd-mm-yy',
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	}
	);

});
</script>










