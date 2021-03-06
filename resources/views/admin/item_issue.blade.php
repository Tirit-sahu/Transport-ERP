
@include('admin.layouts.head')
@include('admin.layouts.header')
<?php 
    $vehicle = '';
    $driver = ''; 
    $index = 1;
    $actionURI = '';
    if (isset($item_issues)) {
        $vehicle = $item_issues->vehicle;
        $driver = $item_issues->driver;
        $index = sizeof($item_issue_details);      
        $actionURI = url('itemIssueUpdate/'.$item_issues->id);  
    }else{
        $actionURI = url('itemIssueStore');
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
									<i class="fa fa-bars"></i>Item Issue</h3>
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
                            <label for="issueDate" class="control-label"><strong>ISSUE DATE<span class="err" style="color:#F00;">*</span> </strong> </label>
                            <input type="text" name="issueDate" id="issueDate" 
                            placeholder="DD-MM-YYYY" value="{{ isset($item_issues)?$item_issues->issueDate:'' }}" class="form-control">
                            </div>
                            </div>



                            <div class="col-sm-2">
                            <div class="form-group">
                            <label for="issueNumber" class="control-label"><strong>Issue No. </strong> </label>
                            <input type="text" name="issueNumber" id="issueNumber" 
                            placeholder="" value="{{ isset($item_issues)?$item_issues->issueNumber:$issue_number }}" readonly class="form-control">
                            </div>
                            </div>
                            <div class="col-sm-2">
                            <div class="form-group">
                            <label for="meterReading" class="control-label"><strong>Meter Reading  </strong> </label>
                            <input type="text" name="meterReading" id="meterReading" 
                            placeholder="20015" value="{{ isset($item_issues)?$item_issues->meterReading:'' }}" class="form-control">
                            </div>
                            </div>



                            <div class="col-sm-2">
                            <div class="form-group">
                            <label for="narration" class="control-label"><strong>NARATION  </strong> </label>
                            <input type="text" name="narration" id="narration" 
                            placeholder="" value="{{ isset($item_issues)?$item_issues->narration    :'' }}" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="table-responsive" style="scroll;height:100%;">
                            <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                            <th width="1%"></th>
                            <th width="15%">Godown</th>
                            <th width="15%">ITEM </th>
                            <th width="10%">UOM</th>
                            <th width="10%">Serial/HSN. </th>
                            <th width="10%">Exchange Receipt</th>
                            <th width="10%">Item Type</th>
                            <th width="5%">Stock QTY</th>
                            <th width="5%">QTY </th>
                           
                            </tr>
                            </thead>
                            <tbody id="issueAddRow">
                            
                            <tr>
                            <td><input type="checkbox" name="record"></td>
                            <td>
                                <select style="width: 100%;padding:0px;" name="godown[]" id="godown1" class='item chosen-select form-control' onchange="getItems(this.value, 1)">                                                
                                </select>
                            </td>
                            <td>
                                <select style="width: 100%;" name="item[]" id="item1" class='item chosen-select form-control' onchange="getUnit(1)">                                                
                                </select>                                
                            </td>
                            <td>
                                <select style="width: 100%;" name="unit[]" id="unit1" class='chosen-select form-control'>                                                
                                </select>
                            </td>
                            <td>
                                <input style="width: 100%;" type="text" name="HSN[]" id="HSN" class="form-control">
                            </td>
                            <td>
                                <?php 
                                    $exchangeReceipt = ['','scrap', 'reprbl'];   
                                ?>
                                <select style="width: 100%;" name="exchangeReceipt[]" id="exchangeReceipt" class='chosen-select form-control'>   
                                    @foreach($exchangeReceipt as $er)     
                                    <option value="{{ $er }}">{{ $er }}</option>         
                                    @endforeach                               
                                </select>
                            </td>
                            <td>
                                <?php 
                                    $itemType = ['','old', 'new'];   
                                ?>
                                <select style="width: 100%;" name="itemType[]" id="itemType" class='chosen-select form-control'>   
                                    @foreach($itemType as $it)     
                                    <option value="{{ $it }}">{{ $it }}</option>         
                                    @endforeach                               
                                </select>
                            </td>
                            <td>
                                <input style="width: 100%;" type="text" id="StockQTY1" class="form-control" readonly>
                            </td>
                            <td>
                                <input style="width: 100%;" type="text" name="QTY[]" id="QTY1" class="form-control">
                            </td>                         
                           
                            </tr>                            

                            </tbody>
                            </table>     
                            <br>
                        </div>
                    </div>

                            <br>

                            <center> 
                            <button type="submit" class="btn btn-satgreen">- SAVE -</button> &nbsp;&nbsp;
                            <a href="{{ url('/itemIssue') }}" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                            <a href="{{ url('/itemIssueReport') }}" class="btn btn-teal">- REPORTS -</a>&nbsp;&nbsp;

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
				
				
				
				
			</div>
		{{-- </div> --}}

</div>




<script>
    $(document).ready(function(){
        var i = $("#index").val();
        $(".add-row").click(function(){
            i++;
            var markup = '<tr> <td><input type="checkbox" name="record"></td> <td> <select style="width: 100%;" name="godown[]" id="godown'+i+'" class="item chosen-select form-control" onchange="getItems(this.value,'+i+')"> </select> </td> <td> <select style="width: 100%;" name="item[]" id="item'+i+'" class="chosen-select form-control" onchange="getUnit('+i+')"> </select> </td> <td> <select style="width: 100%;" name="unit[]" id="unit'+i+'" class="chosen-select form-control"> </select> </td> <td> <input style="width: 100%;" type="text" name="HSN[]" id="HSN" class="form-control"> </td> <td> <?php $exchangeReceipt = ["","scrap", "reprbl"]; ?> <select style="width: 100%;" name="exchangeReceipt[]" id="exchangeReceipt'+i+'" class="chosen-select form-control"> @foreach($exchangeReceipt as $er) <option value="{{ $er }}">{{ $er }}</option> @endforeach </select> </td> <td> <?php $itemType = ["","old", "new"]; ?> <select style="width: 100%;" name="itemType[]" id="itemType'+i+'" class="chosen-select form-control"> @foreach($itemType as $it) <option value="{{ $it }}">{{ $it }}</option> @endforeach </select> </td> <td> <input style="width: 100%;" type="text" id="StockQTY'+i+'" class="form-control" readonly> </td> <td> <input style="width: 100%;" type="text" name="QTY[]" id="QTY'+i+'" class="form-control"> </td>';
            $("#issueAddRow").append(markup);
            $("#index").val(i);

            
                $.ajax({
                url: "{{ url('getGodownForItemIssue') }}",
                type: 'get',
                success: function(response) {
                // console.log(response);
                $("#godown"+i).html(response);
                $("#godown"+i).chosen();
                }
                });        

                var exchangeReceipt = 'exchangeReceipt'+i;
                var itemType = 'itemType'+i;
                $("#"+exchangeReceipt).chosen();
                $("#"+itemType).chosen();

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
    $( function() {
	
	$("#issueDate").datepicker(
	{ 
	dateFormat: 'dd-mm-yy',
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	}
	);


    function getEditItemIssueDetails(id){
    $.ajax({
    url: "{{ url('getEditItemIssueDetails') }}?id="+id,
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
            var markup = '<tr> <td><input type="checkbox" name="record"></td> <td> <select style="width: 100%;" name="godown[]" id="godown'+i+'" class="item chosen-select form-control" onchange="getItems(this.value,'+i+')"> </select> </td> <td> <select style="width: 100%;" name="item[]" id="item'+i+'" class="chosen-select form-control" onchange="getUnit('+i+')"> </select> </td> <td> <select style="width: 100%;" name="unit[]" id="unit'+i+'" class="chosen-select form-control"> </select> </td> <td> <input style="width: 100%;" type="text" name="HSN[]" id="HSN'+i+'" class="form-control"> </td> <td> <?php $exchangeReceipt = ["","scrap", "reprbl"]; ?> <select style="width: 100%;" name="exchangeReceipt[]" id="exchangeReceipt'+i+'" class="chosen-select form-control"> @foreach($exchangeReceipt as $er) <option value="{{ $er }}">{{ $er }}</option> @endforeach </select> </td> <td> <?php $itemType = ["","old", "new"]; ?> <select style="width: 100%;" name="itemType[]" id="itemType'+i+'" class="chosen-select form-control"> @foreach($itemType as $it) <option value="{{ $it }}">{{ $it }}</option> @endforeach </select> </td> <td> <input style="width: 100%;" type="text" id="StockQTY'+i+'" class="form-control" readonly> </td> <td> <input style="width: 100%;" type="text" name="QTY[]" id="QTY'+i+'" class="form-control"> </td>';
            
            $("#issueAddRow ").append(markup);    
            console.log("i="+i);
            getGodownForEdit(i, x[k].godown);
            // getitemforedit(i,x[k].item);
            // getUnitForEdit(i,x[k].unit);  

            getItems(x[k].godown, i, x[k].item);
            getUnitEitTime(x[k].godown, x[k].item, i);
            
            $("#HSN"+i).val(x[k].HSN);
            $("#exchangeReceipt"+i).val(x[k].exchangeReceipt);
            $("#itemType"+i).val(x[k].itemType);
            $("#QTY"+i).val(x[k].QTY);
            $("#rate"+i).val(x[k].rate);
            $("#AMT"+i).val(x[k].AMT);


            var exchangeReceipt = 'exchangeReceipt'+i;
            var itemType = 'itemType'+i;
            $("#"+exchangeReceipt).chosen();
            $("#"+itemType).chosen();
                        

        }

    }
    });
    }

    @if(isset($item_issues))
            getEditItemIssueDetails(@php echo $item_issues->id; @endphp);
    @endif


    //=======EDIT============

    function getGodownForEdit(id, val){
    $.ajax({
    url: "{{ url('getGodownForItemIssue') }}",
    type: 'get',
    success: function(response) {
    // console.log(response);
    $("#godown"+id).html(response);
    $("#godown"+id).val(val);
    $("#godown"+id).chosen();
    }
    });
    }


    function getUnitEitTime(godown, item, index){
        $.ajax({
        url: "{{ url('get-unit-for-item-issue') }}?godown="+godown+"&item="+item,
        type: 'get',
        success: function(response) {
        // console.log(response);
        $("#unit"+index).html(response[0]);
        $("#StockQTY"+index).val(response[1]);
        $('#unit'+index).trigger("chosen:updated");       
        $("#unit"+index).chosen(); 
        }
        });
    }    

//========= END EDIT =============


    function getGodown(id){
    $.ajax({
    url: "{{ url('getGodownForItemIssue') }}",
    type: 'get',
    success: function(response) {
    // console.log(response);
    $("#godown"+id).html(response);
    $("#godown"+id).trigger("chosen:updated");
    }
    });
    }
    getGodown(1);   

    

    function getVehicle(){
    $.ajax({
    url: "{{ url('get-vehicle') }}",
    type: 'get',
    success: function(response) {
    $("#vehicle").html(response);
    $("#vehicle").val(@php echo $vehicle; @endphp);
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
    $("#driver").val(@php echo $driver; @endphp);
    $('#driver').trigger("chosen:updated");
    }

    });
    }
    getDrivers();


    });
</script>

<script>
    function getItems(godownId, index, val=0){
        $.ajax({
        url: "{{ url('get-items') }}?godownId="+godownId,
        type: 'get',
        success: function(response) {
        // console.log(response);
        $("#item"+index).html(response);
        $("#item"+index).val(val);
        $("#item"+index).trigger("chosen:updated");
        $("#item"+index).chosen();
        }
        });
    }
    
    function getUnit(index){
        var godown = $("#godown"+index).val();
        var item = $("#item"+index).val();
        $.ajax({
        url: "{{ url('get-unit-for-item-issue') }}?godown="+godown+"&item="+item,
        type: 'get',
        success: function(response) {
        console.log(response);
        $("#unit"+index).html(response[0]);
        $("#StockQTY"+index).val(response[1]);
        $('#unit'+index).trigger("chosen:updated");       
        $("#unit"+index).chosen(); 
        }
        });
    }
</script>






