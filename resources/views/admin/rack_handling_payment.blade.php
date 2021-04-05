
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
        $actionURI = url('rackHandlingPaymentStore');
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
									<i class="fa fa-bars"></i>Rack Handling Payment
                                </h3>
							</div>
							<div class="box-content nopadding">
								<!-- Tab start -->
                                @include('admin.tab_rack_proccess')
                                <!-- tab end -->
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									
                                    
                            <div>
                            
                                <form action="{{ $actionURI }}" method="post" class='form-vertical'>
                                    @csrf
                                    <x-alert />
                                    <div class="row">
                                
                                <div class="col-sm-2">
                                <div class="form-group">
                                <label for="payment_date" class="control-label"><strong>PAYMENT DATE </strong> </label>
                                <input type="text" name="payment_date" id="payment_date" value="{{ isset($rack_handling)?$rack_handling->payment_date:''}}" 
                                placeholder="DD-MM-YYYY" class="form-control" required>
                                </div>
                                </div>

                                <div class="col-sm-2">
                                <div class="form-group">
                                <label for="vehicle" class="control-label"><strong>VEHICLE NO / Gate Pass NO.</strong></label>
                                <select name="vehicle" id="vehicle" class='chosen-select form-control' required onchange="getRecord(this.value)">                                                
                                </select>
                                </div>
                                </div>

                                <div class="col-sm-2">
                                <div class="form-group">
                                <label for="bag" class="control-label"><strong>BAG </strong> </label>
                                <input type="text" name="bag" id="bag" 
                                placeholder="" value="{{ isset($rack_handling)?$rack_handling->bag:''}}" class="form-control" readonly>
                                </div>
                                </div>

                                <div class="col-sm-2">
                                <div class="form-group">
                                <label for="rate" class="control-label"><strong>RATE </strong> </label>
                                <input type="text" name="rate" id="rate" 
                                placeholder="" value="{{ isset($rack_handling)?$rack_handling->rate:''}}" class="form-control" readonly>
                                </div>
                                </div>

                                <div class="col-sm-2">
                                <div class="form-group">
                                <label for="comm_amt" class="control-label"><strong>COMMISSION AMT </strong> </label>
                                <input type="text" name="comm_amt" id="comm_amt" 
                                placeholder="" value="{{ isset($rack_handling)?$rack_handling->comm_amt:''}}" class="form-control" readonly>
                                </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="gate_pass_number" class="control-label"><strong>GATE PASS NUMBER</strong> </label>
                                    <input type="text" name="gate_pass_number" id="gate_pass_number" 
                                    placeholder="" value="{{ isset($rack_handling)?$rack_handling->gate_pass_number:''}}" class="form-control" readonly>
                                    </div>
                                    </div>

                                   
                                    <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="payment_amt" class="control-label"><strong>PAYMENT AMT</strong> </label>
                                    <input type="text" name="payment_amt" id="payment_amt" 
                                    placeholder="" value="{{ isset($rack_handling)?$rack_handling->payment_amt:''}}" class="form-control" required>
                                    </div>
                                    </div>                                  


                                    <center> 
                                    <button type="submit" class="btn btn-satgreen">{{ $button }}</button> &nbsp;&nbsp;
                                    <a href="{{ url('/rackHandling') }}" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                                    <a href="{{ url('/rackHandlingPaymentShow') }}" class="btn btn-teal">- REPORTS -</a></center>
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

    function getRecord(id){
        $.ajax({
        url: "{{ url('editDataGet') }}?table=rack_handlings&key=id&value="+id,
        type: 'get',
        success: function(response) {
            // console.log(response);
            var x = JSON.parse(response);
            $("#bag").val(x.bag);
            $("#rate").val(x.rate);
            $("#comm_amt").val(x.comm_amt);
            $("#gate_pass_number").val(x.gate_pass_number);
            $("#payment_amt").val(x.payment_amt);
        }
        });
    }
</script>


<script>
$( function() {

function getVehicle(){
    $.ajax({
    url: "{{ url('get-vehicle-with-gate-pass') }}",
    type: 'get',
    success: function(response) {
    $("#vehicle").html(response);
    $("#vehicle").val(@php echo $vehicle; @endphp);
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










