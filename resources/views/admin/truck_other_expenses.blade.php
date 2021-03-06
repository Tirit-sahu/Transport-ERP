
@include('admin.layouts.head')
@include('admin.layouts.header')
<?php 
    $vehicle = '';
    $driver = ''; 
    $head = '';
    $actionURI = '';
    $button = '';
    if (isset($truck_other_expenses)) {
        $vehicle = $truck_other_expenses->vehicle;
        $driver = $truck_other_expenses->driver;
        $head = $truck_other_expenses->HEAD;
        $button = '- UPDATE -';
        $actionURI = url('TruckOtherExpenseUpdate/'.$truck_other_expenses->id);  
    }else{
        $button = '- SAVE -';
        $actionURI = url('TruckOtherExpenseStore');
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
									<i class="fa fa-bars"></i> Truck Other Expenses</h3>
							</div>
							<div class="box-content nopadding">
								{{-- @include('admin.tab_maintenance') --}}
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									
                                    
                            <div>
                            
                                <form action="{{ $actionURI }}" method="post" class='form-vertical'>
                                    @csrf
                                    <x-alert />
                                    <div class="row">
                                    <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="vehicle" class="control-label"><strong>VEHICLE NO</strong></label>
                                    <select name="vehicle" id="vehicle" class='chosen-select form-control'>                                                
                                    </select>
                                    </div>
                                    </div>


                                    <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="driver" class="control-label"><strong>Driver Name </strong> </label>
                                    <select name="driver" id="driver" class='chosen-select form-control'>                                                
                                    </select>
                                    </div>
                                    </div>


                                    <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="expensesDate" class="control-label"><strong>EXPENSES DATE<span class="err" style="color:#F00;">*</span> </strong> </label>
                                    <input type="text" name="expensesDate" id="expensesDate" value="{{ isset($truck_other_expenses)?$truck_other_expenses->expensesDate:''}}" 
                                    placeholder="DD-MM-YYYY" class="form-control">
                                    </div>
                                    </div>



                                    <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="textfield" class="control-label"><strong>EXPANCE HEAD</strong> </label>
                                    <select name="HEAD" id="HEAD" class='chosen-select form-control'>                                                
                                    </select> 
                                    </div>
                                    </div>
                                    <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="AMT" class="control-label"><strong>AMT </strong> </label>
                                    <input type="text" name="AMT" id="AMT" 
                                    placeholder="20015" value="{{ isset($truck_other_expenses)?$truck_other_expenses->AMT:''}}" class="form-control">
                                    </div>
                                    </div>



                                    <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="narration" class="control-label"><strong>NARATION  </strong> </label>
                                    <input type="text" name="narration" id="narration" 
                                    placeholder="" value="{{ isset($truck_other_expenses)?$truck_other_expenses->narration:''}}" class="form-control">
                                    </div>
                                    </div>



                                    <center> 
                                    <button type="submit" class="btn btn-satgreen">{{ $button }}</button> &nbsp;&nbsp;
                                    <a href="{{ url('/TruckOtherExpense') }}" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                                    <a href="{{ url('/TruckOtherExpenseShow') }}" class="btn btn-teal">- REPORTS -</a></center>

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
    url: "{{ url('get-select-option') }}?table=drivers&id=designation&key=Driver&value=id&column=employeeName",
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


    function getServiceType(){
    $.ajax({
        url: "{{ url('get-select-option') }}?table=head_masters&id=status&key=0&value=id&column=headName",
    type: 'get',
    success: function(response) {
    // console.log(response);
    $("#HEAD").html(response);
    $("#HEAD").val(<?php echo $head; ?>);
    $("#HEAD").trigger("chosen:updated");
    }
    });
    }
    getServiceType();

    $("#expensesDate").datepicker(
	{ 
	dateFormat: 'dd-mm-yy',
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	}
	);

});
</script>










