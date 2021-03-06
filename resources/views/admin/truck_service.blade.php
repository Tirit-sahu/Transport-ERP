
@include('admin.layouts.head')
@include('admin.layouts.header')
<?php 
    $vehicle = '';
    $driver = ''; 
    $index = 1;
    $actionURI = '';
    $button = '';
    if (isset($truck_service)) {
        $vehicle = $truck_service->vehicle;
        $driver = $truck_service->driver;
        $index = sizeof($truck_service_details);      
        $button = '- UPDATE -';
        $actionURI = url('truckServiceUpdate/'.$truck_service->id);  
    }else{
        $button = '- SAVE -';
        $actionURI = url('truckServiceStore');
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
									<i class="fa fa-bars"></i>Truck Service</h3>
							</div>
							<div class="box-content nopadding">
								{{-- @include('admin.tab_maintenance') --}}
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									
                                    
                            <div>
                            <form action="{{ $actionURI }}" method="post" class='form-vertical'>
                                @csrf
                                <x-alert />
                                <input type="hidden" value="{{ $index }}" id="index">
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
                            <label for="serviceDate" class="control-label"><strong>Service Date<span class="err" style="color:#F00;">*</span> </strong> </label>
                            <input type="text" name="serviceDate" 
                            placeholder="DD-MM-YYYY" value="{{ isset($truck_service)?$truck_service->serviceDate:'' }}" class="expiryDate form-control">
                            </div>
                            </div>



                            <div class="col-sm-2">
                            <div class="form-group">
                            <label for="serviceNumber" class="control-label"><strong>Service No. </strong> </label>
                            <input type="text" name="serviceNumber" id="serviceNumber" 
                            placeholder="" value="{{ isset($truck_service)?$truck_service->serviceNumber:$service_number }}" readonly class="form-control">
                            </div>
                            </div>
                            <div class="col-sm-2">
                            <div class="form-group">
                            <label for="meterReading" class="control-label"><strong>Meter Reading  </strong> </label>
                            <input type="text" name="meterReading" id="meterReading" 
                            placeholder="20015" value="{{ isset($truck_service)?$truck_service->meterReading:'' }}" class="form-control">
                            </div>
                            </div>



                            <div class="col-sm-2">
                            <div class="form-group">
                            <label for="narration" class="control-label"><strong>NARATION  </strong> </label>
                            <input type="text" name="narration" id="narration" 
                            placeholder="" value="{{ isset($truck_service)?$truck_service->narration:'' }}" class="form-control">
                            </div>
                            </div>

                            <table class="table table-hover table-nomargin table-bordered">
                            <thead>
                            <tr>
                            <th></th>
                            <th>SERVICE TYPE </th>
                            <th>EXPIRY DATE</th>
                            <th>AMT </th>
                            <th>REMARK</th>
                           
                            </tr>
                            </thead>
                            <tbody id="TableAddRow">
                            
                            <tr>
                            <td><input type="checkbox" name="record"></td>
                            <td>
                                <select style="width: 140px;" name="serviceType[]" id="serviceType1" class='serviceType1 chosen-select form-control'>                                                
                                </select>                                
                            </td>
                            
                            <td>
                                <input style="width: 140px;" type="text" name="expiryDate[]" class="expiryDate form-control">
                            </td>
                           
                            <td>
                                <input style="width: 140px;" type="text" name="AMT[]" class="form-control">
                            </td>
                          
                            <td>
                                <input style="width: 140px;" type="text" name="remark[]" class="form-control" >
                            </td>
                           
                            </tr>                            

                            </tbody>
                            </table>     



                            <br>

                            <center> 
                            <button type="submit" class="btn btn-satgreen">{{ $button }}</button> &nbsp;&nbsp;
                            <a href="{{ url('/itemIssue') }}" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                            <a href="{{ url('/truckServiceShow') }}" class="btn btn-teal">- REPORTS -</a>&nbsp;&nbsp;

                            <a style="cursor: pointer;" class="btn btn-satgreen add-row">- ADD ROW -</a> &nbsp;&nbsp;

                            <button type="button" class="btn btn-red delete-row">- DELETE ROW -</button>
                            </center>

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
    $(document).ready(function(){
        var i = $("#index").val();
        $(".add-row").click(function(){
            i++;
            var markup = '<tr> <td><input type="checkbox" name="record"></td> <td> <select style="width: 140px;" name="serviceType[]" id="serviceType'+i+'" class="serviceType'+i+' chosen-select form-control"> </select> </td> <td> <input style="width: 140px;" type="text" name="expiryDate[]" class="expiryDate'+i+' form-control"> </td> <td> <input style="width: 140px;" type="text" name="AMT[]" class="form-control"> </td> <td> <input style="width: 140px;" type="text" name="remark[]" class="form-control" > </td> </tr>';


            $("#TableAddRow").append(markup);
            $("#index").val(i);

            $.ajax({
            url: "{{ url('get-select-option') }}?table=head_masters&id=status&key=0&value=id&column=headName",
            type: 'get',
            success: function(response) {
            $("#serviceType"+i).html(response);
            $("#serviceType"+i).chosen();
            }
            });

            $(".expiryDate"+i).datepicker({ 
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            });

            

        });
        
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });    
</script>


<script>
    function calTotalAMT(index){        
        var QTY = $("#QTY"+index).val();
        var rate = $("#rate"+index).val();
        if(QTY==''){ QTY = 0; }
        if(rate==''){ rate = 0; }
        var AMT = parseFloat(QTY)*parseFloat(rate);
        $("#AMT"+index).val(AMT);
        console.log('AMT='+AMT);
    }
</script>


<script>
    $( function() {
	
	$(".expiryDate").datepicker({ 
	dateFormat: 'dd-mm-yy',
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	});


    function getEditTruckServiceDetails(id){
    $.ajax({
    url: "{{ url('getEditTruckServiceDetails') }}?id="+id,
    type: 'get',
    success: function(response) {
    // console.log(response);    
    var x = JSON.parse(response);
    console.log(x);
    $("table tbody").empty();     
        var i=0;
        for (k = 0; k < x.length; k++) {
            i++;
            var itemIndex = 'item'+i;
            var markup = '<tr> <td><input type="checkbox" name="record"></td> <td> <select style="width: 140px;" name="serviceType[]" id="serviceType'+i+'" class="serviceType'+i+' chosen-select form-control"> </select> </td> <td> <input style="width: 140px;" type="text" name="expiryDate[]" class="expiryDate'+i+' form-control"> </td> <td> <input style="width: 140px;" type="text" name="AMT[]" id="AMT'+i+'" class="form-control"> </td> <td> <input style="width: 140px;" type="text" name="remark[]" id="remark'+i+'" class="form-control" > </td> </tr>';
            
            $("#TableAddRow ").append(markup);    

            getEditServiceType(i,x[k].serviceType);
            
            $(".expiryDate"+i).datepicker({ 
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            });

            $(".expiryDate"+i).val(x[k].expiryDate);
            $("#remark"+i).val(x[k].remark);     
            $("#AMT"+i).val(x[k].AMT);

                        

        }

    }
    });
    }

    @if(isset($truck_service))
    getEditTruckServiceDetails(<?php echo $truck_service->id; ?>);
    @endif


    //=======EDIT============
    function getEditServiceType(id,value){
    $.ajax({
        url: "{{ url('get-select-option') }}?table=head_masters&id=status&key=0&value=id&column=headName",
    type: 'get',
    success: function(response) {
    // console.log(response);
    $("#serviceType"+id).html(response);
    $("#serviceType"+id).val(value);
    $("#serviceType"+id).chosen();
    }
    });
    }    

//========= END EDIT =============


    function getServiceType(id){
    $.ajax({
        url: "{{ url('get-select-option') }}?table=head_masters&id=status&key=0&value=id&column=headName",
    type: 'get',
    success: function(response) {
    // console.log(response);
    $("#serviceType"+id).html(response);
    $("#serviceType"+id).trigger("chosen:updated");
    }
    });
    }
    getServiceType(id=1);

    function getUnit(){
    $.ajax({
    url: "{{ url('get-select-option') }}?table=units&id=status&key=0&value=id&column=name",
    type: 'get',
    success: function(response) {
    // console.log(response);
    $("#unit1").html(response);
    $('#unit1').trigger("chosen:updated");
    }
    });
    }
    getUnit();

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


    });
</script>







