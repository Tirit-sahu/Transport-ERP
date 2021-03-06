<?php use \App\Http\Controllers\Admin\commonController;
use Illuminate\Http\Request;

?>
@include('admin.layouts.head')
@include('admin.layouts.header')
<body>
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
									<i class="fa fa-bars"></i>Hemal Payment</h3>
							</div>
							<div class="box-content nopadding">
                                <!-- Tab start -->
                                @include('admin.tab')
                                <!-- tab end -->
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
									<div class="row">
								<?php 
								if(isset($hemalP)){
									?>
									<form action="{{route('hemaliPayment.update',$hemalP->id)}}" id="form" autocomplete="off" method="post" class='form-vertical' enctype="multipart/form-data">
                                    	@csrf
                                    	@method('PATCH')
									                                    
                                        

                                        <div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Hemal</strong>
												</label>
												<select name="hemal" id="hemal" class='chosen-select form-control'  required>                                            
                                               	<option value=""> - Select - </option>
                                               	@foreach($hemals as $hemal)
			                                 	 <option {{ ($hemalP->hemal==$hemal->id)?'selected':'' }} value="{{$hemal->id}}">{{$hemal->tolly_name}}</option>
                                      			@endforeach
                                      			 </select>										
											</div>
                                        </div>
                                        
                                        <div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Loading Number</strong>
												</label>
												<select name="loading_number" id="loading_number" class='chosen-select form-control'  required>                                            
                                               	<option value=""> - Select - </option>
                                               	@foreach($loading_entries as $row)
			                                 	 <option {{ ($hemalP->loading_number==$row->id)?'selected':'' }} value="{{$row->id}}">{{$row->loading_no}}</option>
                                      			@endforeach
                                      			 </select>										
                                               {{-- <script>document.getElementById("item_category").value = "@yield('item_category')"; </script> --}}
											</div>
										</div>

										 <div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Amount <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" value="{{ $hemalP->amount }}" name="amount" id="amount" 
                                                placeholder="" class="form-control" required   autocomplete="off" >
											</div>
                                        </div>
                                        
                                        <div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Date <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="date" id="paymentDate" value="{{ date('d-m-Y', strtotime($hemalP->date)) }}" placeholder="" class="form-control" required   autocomplete="off" >
											</div>
										</div>								
                                        
                                            <div class="col-sm-12">
                                            <div class="form-group">
                                            <center> 
												<a href="{{ url('/admin/hemaliPayment') }}" class="btn btn-default">Cancel</a>
											<button type="submit" class="btn btn-satgreen">UPDATE</button>
											
                                            </center>
                                            </div>
                                            </div>
									</div>
									
									</form>
									<?php
								}else {
									?>
									<form action="{{url('/admin/hemaliPayment')}}" id="form" autocomplete="off" method="post" class='form-vertical' enctype="multipart/form-data">
                                    	@csrf
                                    	@yield('method')
									                                    
                                        

                                        <div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Hemal</strong>
												</label>
												<select name="hemal" id="hemal" class='chosen-select form-control'  required>                                            
                                               	<option value=""> - Select - </option>
                                               	@foreach($hemals as $hemal)
			                                 	 <option value="{{$hemal->id}}">{{$hemal->tolly_name}}</option>
                                      			@endforeach
                                      			 </select>										
											</div>
                                        </div>
                                        
                                        <div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Loading Number</strong>
												</label>
												<select name="loading_number" id="loading_number" class='chosen-select form-control'  required>                                            
                                               	<option value=""> - Select - </option>
                                               	@foreach($loading_entries as $row)
			                                 	 <option value="{{$row->id}}">{{$row->loading_no}}</option>
                                      			@endforeach
                                      			 </select>										
											</div>
										</div>

										 <div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Amount <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="amount" id="amount" 
                                                placeholder="" class="form-control" required   autocomplete="off" >
											</div>
                                        </div>
                                        
                                        <div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Date <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="date" id="paymentDate" 
                                                placeholder="" class="form-control" required   autocomplete="off" >
											</div>
										</div>								
                                        
                                            <div class="col-sm-12">
                                            <div class="form-group">
                                            <center> 
                                            <button type="submit" class="btn btn-satgreen">SAVE</button>
                                            </center>
                                            </div>
                                            </div>
									</div>
									
									</form>
									<?php
								}
								?>
                               
									
									
									
									
									
	 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<h3>
	View Hemali Payment
	</h3>
</div>
<div class="box-content nopadding"  style="overflow: scroll;">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,select,select,null,null,null">
<thead>

<tr>
	<th>SN.</th>
	<th>Hemal</th>
	<th>Loading NO</th>
	<th>Amount</th>
	<th>Date</th>
    <th>Action </th>
</tr>
</thead>
<tbody>
	<?php $i=0; ?>
	@foreach($hemali_payment as $row)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $row->tolly_name }}</td>
		<td>{{ $row->loading_no }}</td>
		<td>{{ $row->amount }}</td>
		<td>{{ date('d-m-Y',strtotime($row->date)) }}</td>
		<td><a href="{{route('hemaliPayment.edit',$row->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a></td>
	</tr>
	@endforeach
</tbody>
</table>


</div>
<BR/>
</div>
</div>
									</div>
									</div>                                   
							
								</div>
							</div>
						</div>
					</div>
                    
                    
                    
                    					
				{{-- </div> --}}
				
				
				
				
			</div>
		</div>
	</div>
	

</body>



</html>

<script type="text/javascript">										
    $( function() {
    $( "#paymentDate").datepicker(
    { 
    dateFormat: 'dd-mm-yy',
    changeMonth: true,
    changeYear: true,
    showButtonPanel: true,
    }
    );
    } );
</script>



