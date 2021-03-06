
@include('admin.layouts.head')
@include('admin.layouts.header')
<?php 
    $vehicle = '';
    $actionURI = '';
    $button = '';
    if (isset($rack_handling)) {
        $vehicle = $rack_handling->vehicle;
        $button = '- UPDATE -';
        $actionURI = url('rackHandlingUpdate/'.$rack_handling->id);  
    }else{
        $button = '- SAVE -';
        $actionURI = url('rackHandlingStore');
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
									<i class="fa fa-bars"></i>Rack Handling</h3>
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
                                <label for="bag" class="control-label"><strong>BAG </strong> </label>
                                <input type="text" name="bag" onkeyup="calPaymentAMT()" id="bag" 
                                placeholder="" value="{{ isset($rack_handling)?$rack_handling->bag:''}}" class="form-control">
                                </div>
                                </div>

                                <div class="col-sm-2">
                                <div class="form-group">
                                <label for="rate" class="control-label"><strong>RATE </strong> </label>
                                <input type="text" name="rate" onkeyup="calPaymentAMT()" id="rate" 
                                placeholder="" value="{{ isset($rack_handling)?$rack_handling->rate:''}}" class="form-control">
                                </div>
                                </div>

                                <div class="col-sm-2">
                                <div class="form-group">
                                <label for="comm_amt" class="control-label"><strong>COMMISSION AMT </strong> </label>
                                <input type="text" name="comm_amt" onkeyup="calPaymentAMT()" id="comm_amt" 
                                placeholder="" value="{{ isset($rack_handling)?$rack_handling->comm_amt:''}}" class="form-control">
                                </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="gate_pass_number" class="control-label"><strong>GATE PASS NUMBER</strong> </label>
                                    <input type="text" name="gate_pass_number" id="gate_pass_number" 
                                    placeholder="" value="{{ isset($rack_handling)?$rack_handling->gate_pass_number:''}}" class="form-control">
                                    </div>
                                    </div>

                                   
                                    <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="payment_amt" class="control-label"><strong>PAYMENT AMT</strong> </label>
                                    <input type="text" name="payment_amt" id="payment_amt" 
                                    placeholder="" value="{{ isset($rack_handling)?$rack_handling->payment_amt:''}}" class="form-control">
                                    </div>
                                    </div>


                                    <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="payment_date" class="control-label"><strong>PAYMENT DATE<span class="err" style="color:#F00;">*</span> </strong> </label>
                                    <input type="text" name="payment_date" id="payment_date" value="{{ isset($rack_handling)?$rack_handling->payment_date:''}}" 
                                    placeholder="DD-MM-YYYY" class="form-control">
                                    </div>
                                    </div>


                                    <center> 
                                    <button type="submit" class="btn btn-satgreen">{{ $button }}</button> &nbsp;&nbsp;
                                    <a href="{{ url('/rackHandling') }}" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                                    <a href="{{ url('/rackHandlingShow') }}" class="btn btn-teal">- REPORTS -</a></center>

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
				
				
				
				
			{{-- </div> --}}
		</div>

</div>

<script>
    function calPaymentAMT(){
    var payment_amt = $("#payment_amt");
    var comm_amt = $("#comm_amt").val();
    var rate = $("#rate").val();
    var bag = $("#bag").val();

    if(bag==''){ bag=0; }
    if(rate==''){ rate=0; }
    if(comm_amt==''){ comm_amt=0; }

    var payAMT = (parseInt(bag) * parseInt(rate)) - parseInt(comm_amt);
    payment_amt.val(payAMT);
}
</script>


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
  

    $("#payment_date").datepicker(
	{ 
	dateFormat: 'dd-mm-yy',
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	}
	);

});
</script>










