@extends('admin.layouts.body')
@section('content')

<?php 
$truckNumber = 0;
$driverName = 0;
$place = '';
$meterReading = '';
$date = '';
$nextGreasingKM = '';
$extraMaterial = '';
$narration = '';
$url = url('wheel-greasing-store');
$button = '- SAVE -';
$title = 'Create';

if (isset($wheel_greasing)) {
    $truckNumber = $wheel_greasing->truckNumber;
    $driverName = $wheel_greasing->driverName;
    $place = $wheel_greasing->place;
    $meterReading = $wheel_greasing->meterReading;
    $date = $wheel_greasing->date;
    $nextGreasingKM = $wheel_greasing->nextGreasingKM;
    $extraMaterial = $wheel_greasing->extraMaterial;
    $narration = $wheel_greasing->narration;
    $url = url('wheel-greasing-update', array($wheel_greasing->id));
    $button = '- UPDATE -';
    $title = 'Edit';
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
				
			<div class="row">                
                <div class="col-sm-12">
						<div class="box box-bordered box-color satblue">
							<div class="box-title">
								<h3><i class="fa fa-bars"></i>Wheel Greasing {{ $title }}</h3>
							</div>
							<div class="box-content nopadding">
								<div class="tab-content padding tab-content-inline tab-content-bottom">
                            <div>
                            <form action="{{ $url }}" method="post" class='form-vertical' enctype="multipart/form-data">
                                @csrf
                                <x-alert />
                                <input type="hidden" value="1" id="index">
                            <div class="row">                                

                            <div class="col-sm-2">
                                <div class="form-group">
                                <label for="truckNumber" class="control-label"><strong>Truck Number </strong> </label>
                                <select name="truckNumber" id="truckNumber" class='select2Jquery' style="width: 100%;" onchange="getDriver(this.value)" required>                                                
                                </select>                               
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                <label for="driverName" class="control-label"><strong>Driver Name </strong> </label>
                                <select name="driverName" id="driverName" class='select2Jquery' style="width: 100%;" required>                                                
                                </select>                               
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="place" class="control-label"><strong>Place </strong> </label>
                                    <input type="text" name="place" id="place" 
                                    placeholder="" value="{{ $place }}" class="form-control" required>
                                </div>
                            </div>                             

                            <div class="col-sm-2">
                                <div class="form-group">
                                <label for="meterReading" class="control-label"><strong>Meter Reading </strong> </label>
                                <input type="text" name="meterReading" id="meterReading" 
                                placeholder="" value="{{ $meterReading }}" class="form-control" required>
                                </div>
                            </div>

                            
                            <div class="col-sm-2">
                                <div class="form-group">
                                <label for="date" class="control-label"><strong>Date </strong> </label>
                                <input type="date" name="date" id="date" 
                                placeholder="DD-MM-YYYY" value="{{ $date }}" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="nextGreasingKM" class="control-label"><strong>Next Greasing KM </strong> </label>
                                    <input type="text" name="nextGreasingKM" id="nextGreasingKM" 
                                    placeholder="" value="{{ $nextGreasingKM }}" class="form-control">
                                    </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="extraMaterial" class="control-label"><strong>Extra Material</strong> </label>
                                    <input type="text" name="extraMaterial" id="extraMaterial" 
                                    placeholder="" value="{{ $extraMaterial }}" class="form-control">
                                    </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="narration" class="control-label"><strong>Narration</strong> </label>
                                    <input type="text" name="narration" id="narration" 
                                    placeholder="" value="{{ $narration }}" class="form-control">
                                </div>
                            </div>



                            <div class="col-md-12">                    

                            <center>                             
                                
                            <button type="submit" class="btn btn-satgreen">{{ $button }}</button> &nbsp;&nbsp;
                            <a href="{{ url('/wheel-greasing-create') }}" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                            <a href="{{ url('/wheel-greasing-show') }}" class="btn btn-teal">- REPORTS -</a>&nbsp;&nbsp;                          
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
                $("#truckNumber").html(res);
                $("#truckNumber").val(@php echo $truckNumber; @endphp);
                $("#truckNumber").trigger('change');
            }
        });
    }
    getVehicle();

    function getDrivers(){
        $.ajax({
            type:'GET',
            url:'{{ url("get-select-option2") }}?table=drivers&id=designation&key=Driver&value=id&column=employeeName&column2=mobile',
            success:function(res){
                // console.log(res);
                $("#driverName").html(res);
            }
        });
    }
    getDrivers();


    function getDriver(truckId){
        $.ajax({
            type:'GET',
            url:'{{ url("getDriverFromTruck") }}?truckId='+truckId,
            success:function(res){
                // console.log(res);
                $("#driverName").val(res);
                $("#driverName").val(@php echo $driverName; @endphp);
                $("#driverName").trigger('change');
            }
        });
    }

</script>


@endsection