@extends('admin.layouts.body')
@section('content')

<?php 
$truckNumber = 0;
$driverName = 0;
$oilType2 = '';
$place = '';
$meterReading = '';
$date = '';
$liter = '';
$amount = '';
$url = url('urea-refilling-store');
$button = '- SAVE -';
$title = 'Create';

if (isset($urea_refillings)) {
    $truckNumber = $urea_refillings->truckNumber;
    $driverName = $urea_refillings->driverName;
    $place = $urea_refillings->place;
    $meterReading = $urea_refillings->meterReading;
    $date = $urea_refillings->date;
    $liter = $urea_refillings->liter;
    $amount = $urea_refillings->amount;
    $url = url('urea-refilling-update', array($urea_refillings->id));
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
								<h3><i class="fa fa-bars"></i>Urea Refillings {{ $title }}</h3>
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
                                    <label for="liter" class="control-label"><strong>Liter </strong> </label>
                                    <input type="text" name="liter" id="liter" 
                                    placeholder="" value="{{ $liter }}" class="form-control">
                                    </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="amount" class="control-label"><strong>Amount</strong> </label>
                                    <input type="text" name="amount" id="amount" 
                                    placeholder="" value="{{ $amount }}" class="form-control">
                                    </div>
                            </div>

                            

                            <div class="col-md-12">                    

                            <center>                            
                            <button type="submit" class="btn btn-satgreen">{{ $button }}</button> &nbsp;&nbsp;
                            <a href="{{ url('/urea-refilling-create') }}" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                            <a href="{{ url('/urea-refilling-show') }}" class="btn btn-teal">- REPORTS -</a>&nbsp;&nbsp;                          
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