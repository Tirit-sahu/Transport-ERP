<style>
    #FTruckNumber_chosen > a{
        width: 200px;
    }
</style>

<div class="col-sm-6">
    <div class="box box-color box-bordered">
        <div class="box-title">
            <h3>
                <i class="fa fa-bar-chart-o"></i>
                Document Renewal Reminder
            </h3>
            
        </div>
        
        <div class="box-content" style="height:350px; overflow:scroll">
            <div class="statistic-big">
                <div class="top">
                    <div class="left" style="width:250px;">
                        <select name="category" onchange="search_truck_docs();" class='chosen-select' id="search_truck_docs"  style="width:250px;">
                            <option value="">Select</option>
                            <option value="permit_expiry_date">Permit Alerts</option>
                            <option value="ins_expiry_date">Insurance Alerts</option>
                            <option value="fitness_expiry_date">Fitness Alerts</option>
                            <option value="noti_expiry_date">National Permit Alerts</option>
                            <option value="road_expiry_date">Road Tax Alerts</option>
                            <option value="poll_expiry_date">Pollution Alerts</option>
                            <option value="khanij_expiry_date">Khanij Registration </option>                          
                        </select>
                    </div>                    
                </div>
                <table class="table table-user table-nohead" style="font-size:16px;">
                <tbody id="id_truck_document">                                                                
                </tbody>
            </table>
                
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6">
    <div class="box box-color lightred box-bordered">
        <div class="box-title">
            <h3>
                <i class="fa fa-bar-chart-o"></i>
                own truck current month trip
            </h3>
            
        </div>
        
        <div class="box-content" style="height:350px; overflow:scroll">
            <div class="statistic-big">
                <div class="top">
                    <div class="left">
                        <select onchange="getTruckTrip(this.value)" id="FTruckNumber" name="FTruckNumber" class='chosen-select' style="width:150px!important;">
                            <option value="">--</option>                          
                        </select>
                    </div>
                    <div class="right">
                        <h5 style="color:#F00; font-weight:bold">Total Trip : <span id="totalTrip"></span> <span style="color:#00C">Total MT : <span id="totalMT"></span></span></h5>
                        
                    </div>
                    
                </div>
                    <table class="table table-user" style="font-size:16px;">
                    <thead>
                    <tr>
                    <th>SNO.</th>
                    <th>DATE </th>
                    <th>WEIGHT(MT)</th>
                    <th>FROM PLACE</th>
                    <th>TO PLACE </th>

                    </tr>
                    </thead>
                    <tbody id="FCurMonTruckTBODY">
                    
                    </tr>

                    </tbody>
                    </table>
                
            </div>
        </div>
    </div>
</div>


<!-- Truck Document script -->

<script type="text/javascript">	
	function search_truck_docs(){
		var search_truck_docs=document.getElementById('search_truck_docs').value;
		$.ajax({
		url: "{{ url('getTruckDoucmtIndex') }}?search_truck_docs="+search_truck_docs,
		type: 'get',
		success: function(response) {
			console.log(response);
			document.getElementById('id_truck_document').innerHTML=response;
		}
		
		});
	}

    function getLoadingNumber(){
		$.ajax({
		url: "{{ url('/get-vehicle') }}",
		type: 'get',
		success: function(response) {
		$("#FTruckNumber").html(response);
		$('#FTruckNumber').trigger("chosen:updated");
		}      
	});
	}
	getLoadingNumber();

    function getTruckTrip(id){
        $.ajax({
		url: "{{ url('getTruckTrip') }}?id="+id,
		type: 'get',
		success: function(response) {
            var obj = JSON.parse(response)
			// console.log(obj);
        $("#totalTrip").html(obj['totalTrip']);
        $("#totalMT").html(Math.round(obj['totalMT']));
		$("#FCurMonTruckTBODY").html(obj['html']);
		}      
	});
    }


</script>