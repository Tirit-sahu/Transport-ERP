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
								<h3><i class="fa fa-bars"></i>GENERATE BILL</h3>
                                <a href="{{ url('generate-ltr-bill') }}" class="btn btn-success pull-right"><i class="fa fa-print" aria-hidden="true"></i> GENERATE LTR BILL</a>
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
                                <label for="TransportingFromTransportingTO" class="control-label"><strong>Transporting From</strong> </label>
                                    <select style="width:100%;" name="TransportingFrom" id="TransportingFrom" class="select2Jquery" required>                                        
                                    </select>
                                </div>
                            </div>                           
                            

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="TransportingTO" class="control-label"><strong>Transporting TO</strong> </label>
                                    <select style="width:100%;" name="TransportingTO" id="TransportingTO" class="select2Jquery" required>                                        
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
                                    <label for="TotalQTY" class="control-label"><strong>TOTAL QTY</strong> </label>
                                    <input type="text" name="TotalQTY" id="TotalQTY" 
                                    placeholder="" class="form-control" required onkeyup="calculateNetAmount()">
                                </div>
                            </div>
                            

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="RATE" class="control-label"><strong>RATE</strong> </label>
                                    <input type="text" name="RATE" id="RATE" 
                                    placeholder="" class="form-control" required onkeyup="calculateNetAmount()">
                                </div>
                            </div>
                            
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="AMOUNT" class="control-label"><strong>AMOUNT</strong> </label>
                                    <input type="text" name="AMOUNT" id="AMOUNT" 
                                    placeholder="" class="form-control" required readonly onkeyup="calculateNetAmount()">
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="AMOUNT" class="control-label"><strong>GST</strong> </label>
                                    <div class="form-inline">
                                        <select name="GST" id="GST" class="form-control" onchange="calculateNetAmount()">
                                            <option value=""></option>
                                            <option value="6">6</option>
                                            <option value="12">12</option>
                                            <option value="18">18</option>
                                            <option value="28">28</option>
                                        </select>
                                        <input type="text" name="GSTAMOUNT" id="GSTAMOUNT" 
                                        placeholder="" class="form-control" required readonly>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="AMOUNT" class="control-label"><strong>SGST</strong> </label>
                                    <div class="form-inline">
                                        <select name="SGST" id="SGST" class="form-control" onchange="calculateNetAmount()">
                                            <option value=""></option>
                                            <option value="6">6</option>
                                            <option value="12">12</option>
                                            <option value="18">18</option>
                                            <option value="28">28</option>
                                        </select>
                                        <input type="text" name="SGSTAMOUNT" id="SGSTAMOUNT" 
                                        placeholder="" class="form-control" required readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="ROUNDOFF" class="control-label"><strong>ROUND OFF ( + )</strong> </label>
                                    <input type="text" name="ROUNDOFF" id="ROUNDOFF" 
                                    placeholder="" class="form-control" required onkeyup="calculateNetAmount()">
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="NETAMOUNT" class="control-label"><strong>NET AMOUNT</strong> </label>
                                    <input type="text" name="NETAMOUNT" id="NETAMOUNT" 
                                    placeholder="" class="form-control" required readonly>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="ACNUMBER" class="control-label"><strong>AC NUMBER</strong> </label>
                                    <input type="text" name="ACNUMBER" id="ACNUMBER" 
                                    placeholder="" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="IFSCCODE" class="control-label"><strong>IFSC CODE</strong> </label>
                                    <input type="text" name="IFSCCODE" id="IFSCCODE" 
                                    placeholder="" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="BANKADDRESS" class="control-label"><strong>BANK BRANCH</strong> </label>
                                    <input type="text" name="BANKADDRESS" id="BANKADDRESS" 
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
                $("#TransportingFrom").html(res);
                $("#TransportingTO").html(res);
            }
        });
    }
    getPlace();


    function calculateNetAmount(){
        var TotalQTY = $("#TotalQTY").val();
        var RATE = $("#RATE").val();
        var AMOUNT = $("#AMOUNT");
        var GST = $("#GST").val();
        var GSTAMOUNT = $("#GSTAMOUNT");
        var SGST = $("#SGST").val();
        var SGSTAMOUNT = $("#SGSTAMOUNT");
        var ROUNDOFF = $("#ROUNDOFF").val();
        var NETAMOUNT = $("#NETAMOUNT");

        if(TotalQTY == ''){ TotalQTY = 0; }else{ AMOUNT.val(0); }
        if(RATE == ''){ RATE = 0; }else{ AMOUNT.val(0); }
        
        var AMOUNT_RESULT = parseFloat(TotalQTY)*parseFloat(RATE);
        AMOUNT.val(AMOUNT_RESULT);

        if(GST == ''){ GST = 0; }else{ GSTAMOUNT.val(0); }
        var GSTAMOUNT_RESULT = (parseFloat(GST)*AMOUNT_RESULT)/100;
        GSTAMOUNT.val(GSTAMOUNT_RESULT);

        if(SGST == ''){ SGST = 0; }else{ SGSTAMOUNT.val(0); }
        var SGSTAMOUNT_RESULT = (parseFloat(SGST)*AMOUNT_RESULT)/100;
        SGSTAMOUNT.val(SGSTAMOUNT_RESULT);

        if(ROUNDOFF == ''){ ROUNDOFF = 0; }

        var NETAMOUNT_RESULT = AMOUNT_RESULT+GSTAMOUNT_RESULT+SGSTAMOUNT_RESULT+ROUNDOFF;
        NETAMOUNT.val(NETAMOUNT_RESULT);

    }
 
</script>


@endsection