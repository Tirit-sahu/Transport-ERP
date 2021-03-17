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
				
			<div class="row">                
                <div class="col-sm-12">
						<div class="box box-bordered box-color satblue">
							<div class="box-title">
								<h3><i class="fa fa-bars"></i>GENERATE LTR BILL</h3>
                                <a href="{{ url('generate-bill') }}" class="btn btn-success pull-right"><i class="fa fa-print" aria-hidden="true"></i> GENERATE BILL</a>
							</div>
							<div class="box-content nopadding">
								<div class="tab-content padding tab-content-inline tab-content-bottom">
                                    
                            <div>
                            <form action="{{ url('store-ltr-bill') }}" method="post" class='form-vertical' enctype="multipart/form-data">
                                @csrf
                                <x-alert />
                            <div class="row">                               
                            <div class="col-sm-2">
                                <div class="form-group">
                                <label for="date" class="control-label"><strong>Date </strong> </label>
                                <input type="date" name="date" id="date" 
                                placeholder="DD-MM-YYYY" class="form-control" required>
                                </div>
                            </div>


                            <div class="col-sm-2">
                                <div class="form-group">
                                <label for="driverName" class="control-label"><strong>TO</strong> </label>
                                <input type="text" class="form-control" name="TO" required>                              
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="GSTNO" class="control-label"><strong>GSTNO </strong> </label>
                                    <input type="text" name="GSTNO" id="GSTNO" placeholder="" class="form-control" required>
                                </div>
                            </div>                             

                            <div class="col-sm-2">
                                <div class="form-group">
                                <label for="meterReading" class="control-label"><strong>Name Of Center From </strong> </label>
                                    <select style="width:100%;" name="NameOfCenterFrom" id="NameOfCenterFrom" class="select2Jquery" required>                                        
                                    </select>
                                </div>
                            </div>                           
                            

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="NameOfCenterTO" class="control-label"><strong>Name Of Center TO </strong> </label>
                                    <select style="width:100%;" name="NameOfCenterTO" id="NameOfCenterTO" class="select2Jquery" required>                                        
                                    </select>                                    
                                    </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="DateOfOperationFrom" class="control-label"><strong>Date Of Operation From</strong> </label>
                                    <input type="date" name="DateOfOperationFrom" id="DateOfOperationFrom" 
                                    placeholder="" class="form-control" required>
                                    </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="DateOfOperationTO" class="control-label"><strong>Date Of Operation TO</strong> </label>
                                    <input type="date" name="DateOfOperationTO" id="DateOfOperationTO" 
                                    placeholder="" class="form-control" required>
                                    </div>
                            </div>


                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="ITEM" class="control-label"><strong>ITEM</strong> </label>
                                    <select style="width:100%;" name="ITEM" id="ITEM" class="select2Jquery" required>                                        
                                    </select> 
                                    </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="description" class="control-label"><strong>Description</strong> </label>
                                    <input type="text" name="description" id="description" 
                                    placeholder="" class="form-control" required>
                                    </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="NumberOfTruck" class="control-label"><strong>Number Of Truck</strong> </label>
                                    <input type="text" name="NumberOfTruck" id="NumberOfTruck" 
                                    placeholder="" class="form-control" required>
                                </div>
                            </div>


                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="NumberOfBags" class="control-label"><strong>Number Of Bags</strong> </label>
                                    <input type="text" name="NumberOfBags" id="NumberOfBags" 
                                    placeholder="" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="TotalWeight" class="control-label"><strong>Total Weight</strong> </label>
                                    <input type="text" name="TotalWeight" id="TotalWeight" 
                                    placeholder="" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="RATE" class="control-label"><strong>RATE</strong> </label>
                                    <input type="text" name="RATE" id="RATE" 
                                    placeholder="" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="KM" class="control-label"><strong>KM</strong> </label>
                                    <input type="text" name="KM" id="KM" 
                                    placeholder="" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="AMOUNT" class="control-label"><strong>AMOUNT</strong> </label>
                                    <input type="text" name="AMOUNT" id="AMOUNT" 
                                    placeholder="" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-12">                   
                            <center>                             
                            <button type="submit" class="btn btn-satgreen">- SUBMIT -</button> &nbsp;&nbsp;
                            <a href="{{ url('/generate-ltr-bill') }}" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                            <a href="{{ url('/show-ltr-bill') }}" class="btn btn-teal">- REPORTS -</a>&nbsp;&nbsp;                          
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
    function getPlace(){
        $.ajax({
            type:'GET',
            url:'{{ url("fetchSelectOption") }}?table=places&id=id&value=placename',
            success:function(res){
                // console.log(res);
                $("#NameOfCenterFrom").html(res);
                $("#NameOfCenterTO").html(res);
            }
        });
    }
    getPlace();


    function getItems(){
        $.ajax({
            type:'GET',
            url:'{{ url("fetchSelectOption") }}?table=items&id=id&value=item_name',
            success:function(res){
                // console.log(res);
                $("#ITEM").html(res);
            }
        });
    }
    getItems();
 
</script>


@endsection