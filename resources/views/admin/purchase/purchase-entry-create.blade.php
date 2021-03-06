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
								<h3>
									<i class="fa fa-bars"></i>Purchase Entry</h3>
							</div>
							<div class="box-content nopadding">
								<div class="tab-content padding tab-content-inline tab-content-bottom">								
                                    
                            <div>
                            <form action="{{ url('purchase-entry-store') }}" method="post" class='form-vertical'>
                                @csrf
                                <x-alert />
                                <input type="hidden" value="1" id="index">
                            <div class="row">

                            <div class="col-sm-2">
                            <div class="form-group">
                            <label for="supplier_name" class="control-label"><strong>Supplier Name</strong></label>
                            <select name="supplier_name" id="supplier_name" class="select2Jquery" style="width: 100%;" required>                                                
                            </select>
                            </div>
                            </div>


                            <div class="col-sm-2">
                            <div class="form-group">
                            <label for="bill_number" class="control-label"><strong>Bill NO.</strong> </label>
                            <input type="text" name="bill_number" id="bill_number" class="form-control" required>
                            </div>
                            </div>

                            <div class="col-sm-2">
                            <div class="form-group">
                            <label for="date" class="control-label"><strong>DATE<span class="err" style="color:#F00;">*</span> </strong> </label>
                            <input type="date" name="date" id="date" 
                            placeholder="DD-MM-YYYY" value="" class="form-control" required>
                            </div>
                            </div>



                            <div class="col-sm-2">
                            <div class="form-group">
                                <?php 
                                $receiving_proof = ['Invoice', 'Challan', 'None'];    
                                ?>
                            <label for="receiving_proof" class="control-label"><strong>Delivery Proof </strong> </label>
                            <select name="receiving_proof" id="receiving_proof" autofocus class='chosen-select form-control' required>                                                
                                <option value=""></option>
                                @foreach($receiving_proof as $row)
                                <option value="{{ $row }}">{{ $row }}</option>
                                @endforeach
                                </select>                            
                            </div>
                            </div>

                            <div class="col-sm-2">
                            <div class="form-group">
                            <label for="discount" class="control-label"><strong>Discount</strong> </label>
                            <input type="text" name="discount" id="discount" 
                            placeholder="" value="" class="form-control">
                            </div>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-sm-2">
                            <div class="form-group">
                                <?php 
                                $purchase_type = ['Cash', 'Credit'];    
                                ?>
                            <label for="purchase_type" class="control-label"><strong>Purchase Type  </strong> </label>
                            <select name="purchase_type" id="purchase_type" class='chosen-select form-control' required>                                                
                            <option value=""></option>
                            @foreach($purchase_type as $row)
                            <option value="{{ $row }}">{{ $row }}</option>
                            @endforeach
                            </select>                            
                            </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                <label for="godown" class="control-label"><strong>Godown </strong> </label>
                                <select name="godown" id="godown" class='select2Jquery' style="width: 100%;" required>                                                
                                </select>                               
                                </div>
                            </div>
                            </div>

                            <div class="col-md-12">
                            <div class="table-responsive" >
                            <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                            <th></th>
                            <th>ITEM </th>
                            <th>UOM</th>                            
                            <th>RATE</th>
                            <th>QTY </th>
                            <th>Add Serial NO.</th>
                            <th>GST</th>
                            <th>GST Type</th>
                            <th>Total (Without Tax)</th>
                            <th>Total Amount</th>

                            </tr>
                            </thead>
                            <tbody id="issueAddRow">
                            
                            <tr>
                            <td><input type="checkbox" name="record"></td>
                            <td>
                                <select style="width: 140px;" name="item[]" id="item1" class="select2Jquery" style="width: 100%;" onchange="getUnit(1)" required>                                                
                                </select>                                
                            </td>
                            <td>
                                <select style="width: 140px;" name="unit[]" id="unit1" class="select2Jquery" style="width: 100%;" required>                                                
                                </select>
                            </td>
                            <td>
                                <input style="width: 80px;" type="text" name="rate[]" id="rate1" class="form-control" required>
                            </td>
                            <td>
                                <input style="width: 60px;" type="text" name="qty[]" id="qty1" class="form-control" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" onclick="add_serial_number(1)">ADD</button>
                            </td>
                            <td>
                                <?php 
                                    $gst = ['12', '18', '28'];   
                                ?>
                                <select style="width: 140px;" name="gst[]" id="gst1" class="form-control" required>   
                                    <option value=""></option>
                                    @foreach($gst as $g)     
                                    <option value="{{ $g }}">{{ $g }} %</option>         
                                    @endforeach                               
                                </select>
                            </td>
                            <td>
                                <?php 
                                    $gst_type = ['Inclusive', 'Exclusive'];   
                                ?>
                                <select style="width: 140px;" name="gst_type[]" id="gst_type1" class="form-control" required onchange="calculate_amount(1)">   
                                    <option value=""></option>
                                    @foreach($gst_type as $gt)     
                                    <option value="{{ $gt }}">{{ $gt }}</option>         
                                    @endforeach                               
                                </select>
                            </td>
                            <td>
                                <input style="width: 140px;" type="text" name="total_without_tax[]" id="total_without_tax1" class="form-control" required>
                            </td>
                            <td>
                                <input style="width: 140px;" type="text" name="total_amount[]" id="total_amount1" class="form-control" required>
                            </td>
                            
                           
                            </tr>                            

                            </tbody>
                            </table>   
                            <br>  
                        </div>
                    </div>


                            <center>                             
                                
                            <button type="submit" class="btn btn-satgreen">- SAVE -</button> &nbsp;&nbsp;
                            <a href="{{ url('/purchase-entry-create') }}" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                            <a href="{{ url('/purchase-entry-report') }}" class="btn btn-teal">- REPORTS -</a>&nbsp;&nbsp;

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
                    					
				</div>
				
		</div>

</div>

<div class="modal fade" id="serialNumberModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
              Add Serial Number
              <span id="hidden"></span>
          </h4>
        </div>
        <div class="modal-body" id="serialNumberModalBody">
          
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="submit_serial()">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>


<script>
    function add_serial_number(sno){
        var qty = $("#qty"+sno).val();
        var item = $("#item"+sno).val();
        $("#serialNumberModal").modal('show');
        var text = '';
        var n=1;
        var hidden = '<input type="hidden" value="'+qty+'" id="hidenQty"><input type="hidden" value="'+item+'" id="hidenItem">';
        for (var i = 0; i < qty; i++) {
            text += '<div class="form-group"> <label for="email">Serial '+n+':</label> <input type="text" class="form-control" id="serial_number'+i+'" name="serial_number[]"> </div>';
            n++;          
        }
        $("#hidden").html(hidden);
        $("#serialNumberModalBody").html(text);  
    }


    function submit_serial(){
        var qty = $("#hidenQty").val();
        var item = $("#hidenItem").val();
        var data = [];
        for (var i = 0; i < qty; i++) {
            var serial_number = $("#serial_number"+i).val();
            data.push({'item':item, 'serial_number':serial_number});
        }
        // console.log(data);
        var array = JSON.stringify(data);
        $.ajax({
            type:'GET',
            url:'{{ url("serial-number-store") }}?data='+array,
            success:function(res){
                console.log(res);
                $("#serialNumberModal").modal('hide');
            }
        });
        // $("#hidenQty").val(0);
    }
</script>


<script>
    $(document).ready(function(){
        var i = $("#index").val();
        $(".add-row").click(function(){
            i++;
            var markup = '<tr> <td><input type="checkbox" name="record"></td> <td> <select style="width: 140px;" name="item[]" id="item'+i+'" class="select2Jquery" style="width: 100%;" onchange="getUnit('+i+')" required> </select> </td> <td> <select style="width: 140px;" name="unit[]" id="unit'+i+'" class="select2Jquery" style="width: 100%;" required> </select> </td> <td> <input style="width: 80px;" type="text" name="rate[]" id="rate'+i+'" class="form-control" required> </td> <td> <input style="width: 60px;" type="text" name="qty[]" id="qty'+i+'" class="form-control" required> </td> <td> <button type="button" class="btn btn-primary" onclick="add_serial_number('+i+')">ADD</button> </td> <td> <?php $gst = ['12', '18', '28']; ?> <select style="width: 140px;" name="gst[]" id="gst'+i+'" class="chosen-select form-control" required> <option value=""></option> @foreach($gst as $g) <option value="{{ $g }}">{{ $g }} %</option> @endforeach </select> </td> <td> <?php $gst_type = ["Inclusive", "Exclusive"]; ?> <select onchange="calculate_amount('+i+')" style="width: 140px;" name="gst_type[]" id="gst_type'+i+'" class="chosen-select form-control" required> <option value=""></option> @foreach($gst_type as $gt) <option value="{{ $gt }}">{{ $gt }}</option> @endforeach </select> </td> <td> <input style="width: 140px;" type="text" name="total_without_tax[]" id="total_without_tax'+i+'" class="form-control" required> </td> <td> <input style="width: 140px;" type="text" name="total_amount[]" id="total_amount'+i+'" class="form-control" required> </td> </tr> ';
            $("#issueAddRow").append(markup);
            $("#index").val(i);

            getItem(i);
            // $("#unit"+i).chosen();

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
    function getSupplier(){
        $.ajax({
            type:'GET',
            url:'{{ url("fetchSelectOption") }}?table=suppliers&id=id&value=name',
            success:function(res){
                // console.log(res);
                $("#supplier_name").html(res);
            }
        });
    }
    getSupplier();

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

    function getItem(sno){
        $.ajax({
            type:'GET',
            url:'{{ url("fetchSelectOption") }}?table=items&id=id&value=item_name',
            success:function(res){
                // console.log(res);
                $("#item"+sno).html(res);
                if(sno!=1){
                    $("#item"+sno).chosen();
                }
                
            }
        });
    }
    getItem(1);



    function getUnit(index){
        var godown = $("#godown").val();
        var item = $("#item"+index).val();
        $.ajax({
        url: "{{ url('get-unit-for-item-issue') }}?godown="+godown+"&item="+item,
        type: 'get',
        success: function(response) {
        console.log(response);
        $("#unit"+index).html(response[0]);
        $("#unit"+index).trigger('change');
                if(index!=1){
                    $("#unit"+index).chosen();
                }       
        
        // $("#StockQTY"+index).val(response[1]);
        }
        });
    }

</script>

<script>
    
    function calculate_amount(sno){
        var rate = $("#rate"+sno).val();
        var qty = $("#qty"+sno).val();
        var gst = $("#gst"+sno).val();
        var gst_type = $("#gst_type"+sno).val();
        
        // console.log(rate+" - "+qty+" - "+gst+" - "+gst_type);
        var amount = parseFloat(rate)*parseFloat(qty);
        var calGst = (amount*gst)/100;
        // console.log(calGst);
        var amount_without_tax = 0;
        var total_amount = 0;
        if(gst_type == 'Inclusive'){
            amount_without_tax = amount-calGst;
            total_amount = amount;
        }else{
            amount_without_tax = amount;
            total_amount = amount+calGst;
        }       
        $("#total_without_tax"+sno).val(amount_without_tax);
        $("#total_amount"+sno).val(total_amount);
    }

    

</script>

@endsection