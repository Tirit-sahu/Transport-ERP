@extends('admin.layouts.body')
@section('content')

<?php 
$truck_number = 0;
$action = url('battery-opening-balance-store');
$button = 'SAVE';
$title = 'Battery Opening Balance Create';
if (isset($battery_opening_balances)) {
    $truck_number = $battery_opening_balances->truck_number;
    $action = url('battery-opening-balance-update', array($battery_opening_balances->id));
    $button = 'UPDATE';
    $title = 'Battery Opening Balance Update';
}

?>

<div class="container-fluid" id="content">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h2>Tamanna RoadCarrier</h2>
					</div>
					<div class="pull-right">
						
                        @include('admin.dashboard_header');
                        
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="index.php">Dashboard</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
			<div class="row">
                
                <div class="col-sm-12">
						<div class="box box-bordered box-color satblue">
							<div class="box-title">
								<h3>
									<i class="fa fa-bars"></i> {{ $title }}</h3>
							</div>
							<div class="box-content nopadding">
								<div class="tab-content padding tab-content-inline tab-content-bottom">								
                                    
                            <div>
                            <form action="{{ $action }}" method="post" class='form-vertical' enctype="multipart/form-data">
                                @csrf
                                <x-alert />
                            <div class="row">                              

                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="truck_number" class="control-label"><strong>Truck Number </strong> </label>
                                    <select name="truck_number" id="truck_number" class='select2Jquery' style="width: 100%;" onchange="getTyreType(this.value)" required>                                                
                                    </select>                               
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="truck_number" class="control-label"><strong>Battery 1 Name</strong> </label>
                                    <input type="text" class="form-control" name="battery1Name" value="{{ old('battery1Name', isset($battery_opening_balances)?$battery_opening_balances->battery1Name:'') }}" required>                            
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="tyre_type" class="control-label"><strong>Battery 1 Serial Number</strong> </label>
                                    <input type="text" class="form-control" name="battery1SerialNo" value="{{ old('battery1SerialNo', isset($battery_opening_balances)?$battery_opening_balances->battery1SerialNo:'') }}" required>                             
                                    </div>
                                </div>                           

                                <div class="col-sm-2">
                                <div class="form-group">
                                <label for="date" class="control-label"><strong>Battery 1 Image </strong> </label>
                                <input type="file" name="battery1Images[]" 
                                multiple="multiple" class="form-control">
                                <?php 
                                if(isset($battery_opening_balances)){
                                    if($battery_opening_balances->battery1Images!=''){
                                        $imagedecode = json_decode($battery_opening_balances->battery1Images);
                                        foreach ($imagedecode as $img) {
                                        ?>
                                        <a target="_blank" href="{{ asset('storage/app/public/BatteryImages/'.$img) }}">
                                        <img style="width: 60px;height:60px;" src="{{ asset('storage/app/public/BatteryImages/'.$img) }}" alt="Tyre Image">
                                        </a>
                                        <?php
                                        }
                                    }
                                }                                  
                                    
                                ?>
                                </div>
                                </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                <label for="battery2Name" class="control-label"><strong>Battery 2 Name</strong> </label>
                                <input type="text" class="form-control" name="battery2Name" value="{{ old('battery2Name', isset($battery_opening_balances)?$battery_opening_balances->battery2Name:'') }}" required>                                
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                <label for="battery2SerialNo" class="control-label"><strong>Battery 2 Serial Number</strong> </label>
                                <input type="text" class="form-control" name="battery2SerialNo" value="{{ old('battery2SerialNo', isset($battery_opening_balances)?$battery_opening_balances->battery2SerialNo:'') }}" required>                        
                                </div>
                            </div>                           

                            <div class="col-sm-2">
                            <div class="form-group">
                            <label for="date" class="control-label"><strong>Battery 2 Image </strong> </label>
                            <input type="file" name="battery2Images[]" 
                            multiple="multiple" class="form-control">
                            <?php 
                                if(isset($battery_opening_balances)){
                                    if($battery_opening_balances->battery2Images!=''){
                                        $imagedecode = json_decode($battery_opening_balances->battery2Images);
                                        foreach ($imagedecode as $img) {
                                        ?>
                                        <a target="_blank" href="{{ asset('storage/app/public/BatteryImages/'.$img) }}">
                                        <img style="width: 60px;height:60px;" src="{{ asset('storage/app/public/BatteryImages/'.$img) }}" alt="Tyre Image">
                                        </a>
                                        <?php
                                        }
                                    }
                                }                                                                        
                                ?>
                            </div>
                            </div>



                            <div class="col-md-12">                    

                            <center>                            
                                
                            <button type="submit" class="btn btn-satgreen">- {{ $button }} -</button> &nbsp;&nbsp;
                            <a href="{{ url('/battery-opening-balance-create') }}" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                            <a href="{{ url('/battery-opening-balance-datatables') }}" class="btn btn-teal">- REPORTS -</a>&nbsp;&nbsp;                          
                            </center>
                            </div>

                            </div>


                            </form>

                            
									</div>
									
										
									</div>
								</div>
							</div>
						</div>
			    </div>
                    					
				</div>
				
		</div>

</div>



<script>
    function getVehicle(){
        $.ajax({
            type:'GET',
            url:'{{ url("fetchSelectOption") }}?table=trucks&id=id&value=truck_number',
            success:function(res){
                // console.log(res);
                $("#truck_number").html(res);
            }
        });
    }
    getVehicle();

    function getGodown(){
        $.ajax({
            type:'GET',
            url:'{{ url("fetchSelectOption") }}?table=godowns&id=id&value=name',
            success:function(res){
                // console.log(res);
                $("#godown").html(res);
            }
        });
    }
    getGodown();

</script>

<script>
    
    function getVehicle(){
        $.ajax({
            type:'GET',
            url:'{{ url("fetchSelectOption") }}?table=trucks&id=id&value=truck_number',
            success:function(res){
                // console.log(res);
                $("#truck_number").html(res);
                $("#truck_number").val(@php echo $truck_number; @endphp);
                $("#truck_number").trigger('change'); 
                
            }
        });
    }
    getVehicle();

    function getTyreType(truckId){
       $.ajax({
           type:'GET',
           url:'{{ url("getTyreType") }}?truckId='+truckId,
           success:function(res){
            //    console.log(res);
               $("#tyre_type").html(res);
           }
       });
    }  


    function getSerialNumber(){
       $.ajax({
           type:'GET',
           url:'{{ url("getSerialNumber") }}',
           success:function(res){
            //    console.log(res);
               $("#Serial_number").html(res);
           }
       });
    } 
    getSerialNumber();
    
</script>

@endsection