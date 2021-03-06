@extends('admin.layouts.body')
@section('content')
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
									<i class="fa fa-bars"></i>Tyre Mapping</h3>
							</div>
							<div class="box-content nopadding">
								<div class="tab-content padding tab-content-inline tab-content-bottom">								
                                    
                            <div>
                            <form action="{{ url('tyre-mapping-create') }}" method="post" class='form-vertical' enctype="multipart/form-data">
                                @csrf
                                <x-alert />
                                <input type="hidden" value="1" id="index">
                            <div class="row">

                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="godown" class="control-label"><strong>Godown </strong> </label>
                                    <select name="godown" id="godown" class='select2Jquery' style="width: 100%;" required>                                                
                                    </select>                               
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="truck_number" class="control-label"><strong>Truck Number </strong> </label>
                                    <select name="truck_number" id="truck_number" class='select2Jquery' style="width: 100%;" onchange="getTyreType(this.value)" required>                                                
                                    </select>                               
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="tyre_type" class="control-label"><strong>Tyre Type </strong> </label>
                                    <select name="tyre_type" id="tyre_type" class='select2Jquery' style="width: 100%;" required>                                                
                                    </select>                               
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for="Serial_number" class="control-label"><strong>Serial Number</strong> </label>
                                    <select name="Serial_number" id="Serial_number" class='select2Jquery' style="width: 100%;" required>                                                
                                    </select>                               
                                    </div>
                                </div>                             

                            <div class="col-sm-2">
                                <div class="form-group">
                                <label for="meter_reading" class="control-label"><strong>Meter Reading </strong> </label>
                                <input type="text" name="meter_reading" id="meter_reading" 
                                placeholder="" value="" class="form-control" required>
                                </div>
                            </div>

                            
                            <div class="col-sm-2">
                                <div class="form-group">
                                <label for="upload_date" class="control-label"><strong>Upload Date </strong> </label>
                                <input type="date" name="upload_date" id="upload_date" 
                                placeholder="DD-MM-YYYY" value="" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                <label for="date" class="control-label"><strong>Tyre Image </strong> </label>
                                <input type="file" name="images[]" id="images" 
                                multiple="multiple" class="form-control" required>
                                </div>
                            </div>



                            <div class="col-md-12">                    

                            <center>                             
                                
                            <button type="submit" class="btn btn-satgreen">- SAVE -</button> &nbsp;&nbsp;
                            <a href="{{ url('/purchase-entry-create') }}" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                            <a href="{{ url('/tyre-mapping-datatables') }}" class="btn btn-teal">- REPORTS -</a>&nbsp;&nbsp;                          
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
    
    function getTyreType(truckId){
       $.ajax({
           type:'GET',
           url:'{{ url("getTyreTypeName") }}?truckId='+truckId,
           success:function(res){
               console.log(res);
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