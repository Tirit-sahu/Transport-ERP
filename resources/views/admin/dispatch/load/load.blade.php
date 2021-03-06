<?php use \App\Http\Controllers\Admin\commonController;
use Illuminate\Http\Request;
?>
@extends('admin.layouts.body')
@section('content')


<script type="text/javascript">
	
	$(function() {
   
	 $('#loading_date').datepicker({ dateFormat: 'dd-mm-yy' }).val();

  });


</script>

   					<div class="col-sm-12">
						<div class="box box-bordered box-color satblue">
								<x-alert />
							<div class="box-title">
										<a href="{{route('load.index')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Loading Entry Report</a>
								<h3>
									<i class="fa fa-bars"></i>@yield('formtitle')</h3>
							</div>
							<div class="box-content nopadding">
								
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
                                    <form action="{{url('/')}}/admin/@yield('formaction')" id="form" method="post" class='form-vertical form-validate' autocomplete="off" enctype="multipart/form-data">
                                    	@csrf
										@yield('method')
										
										<div class="row">

											<div class="col-sm-2"> 
												<div class="form-group" style="margin-bottom: 0px;">
													<label for="textfield" class="control-label"><strong>LOADING DATE <span class="err" style="color:#F00;">*</span> </strong></label>
													<input type="text" name="loading_date" id="loading_date" value="@yield('loading_date')" autocomplete="off" 
													placeholder="DD-MM-YYYY" class="form-control">
												</div>
											</div>
											
											<div class="col-sm-2">
												<div class="form-group" style="margin-bottom: 0px;">
												<label for="textfield" class="control-label"><strong>LOADING NO.</strong></label>
													<input type="text" name="loading_no" id="loading_no"  value="@yield('loading_no')" 
													placeholder="" readonly class="form-control">
												</div>
											</div>
											
											<div class="col-sm-2">
												<div class="form-group" style="margin-bottom: 0px;"> 
													<label for="textfield" class="control-label"><strong>Consignor Name  <img src="{{url('/')}}/admin/add.png" id="shortcut_truck" data-toggle="modal" data-target="#Consignormodal"><span class="err" style="color:#F00;">*</span></strong></label>
													<select name="consignor" id="consignor_fetch" data-rule-required="true"  class='chosen-select form-control'>
													
												</select>
	
												<script>document.getElementById("consignor").value = "@yield('consignor')"; </script>
												</div>
											</div>
											
	
											<div class="col-sm-2">
												<div class="form-group" style="margin-bottom: 0px">
													<label for="textfield" class="control-label"><strong>FROM PLACE  <img src="{{url('/')}}/admin/add.png" id="shortcut_truck" data-toggle="modal" data-target="#Place-modal"><span class="err" style="color:#F00;">*</span></strong></label>
													<select name="from_place" id="from_place" data-rule-required="true" class='chosen-select form-control'>
												   
													
												</select>
	
												<script>document.getElementById("from_place").value = "@yield('from_place')"; </script>
												</div>
											</div>
											
											<div class="col-sm-2">
												<div class="form-group">
												<label for="textfield" class="control-label"><strong>Consignee Name<span class="err" style="color:#F00;">*</span> 
												</strong><img src="{{url('/')}}/admin/add.png" id="shortcut_truck" data-toggle="modal" data-target="#Consignee-modal"></label>
													<select name="consignee" id="consignee" class='chosen-select form-control'>                                             
													</select>
												<script>document.getElementById("consignee").value = "@yield('consignee')"; </script>
												</div>
											</div>
	
											<div class="col-sm-2">
												<div class="form-group">
													<label for="textfield" class="control-label"><strong>TO PLACE <span class="err" style="color:#F00;">*</span> 
													</strong><img src="{{url('/')}}/admin/add.png" id="shortcut_truck" data-toggle="modal" data-target="#Place-modal"></label>
													<select name="to_plce" id="to_plce" class='chosen-select form-control'>
													 
												</select>
												<script>document.getElementById("to_plce").value = "@yield('to_plce')"; </script>
												</div>
											</div>
	
											<div class="col-sm-2">
												<div class="form-group">
													<label for="textfield" class="control-label"><strong>VEHICLE NO. <span class="err" style="color:#F00;">*</span> </strong> <img src="{{url('/')}}/admin/add.png" id="shortcut_truck" data-toggle="modal" data-target="#new-task"></label>
													<select name="vehicle_no" id="vehicle_fetch" class='chosen-select form-control'>
													
												</select>
												<script>document.getElementById("vehicle_fetch").value = "@yield('vehicle_nno')"; </script>
												</div>
											</div>
	
	
											<div class="col-sm-2">
												<div class="form-group">
													<label for="textfield" class="control-label"><strong>Item Master  <span class="err" style="color:#F00;">*</span> </strong> <img src="{{url('/')}}/admin/add.png" id="shortcut_truck" data-toggle="modal" data-target="#Item-master-modal"></label>
													<select name="item_master" id="item_master" class='chosen-select form-control'>
													
												</select>
												<script>document.getElementById("item_master").value = "@yield('item_master')"; </script>
												</div>
											</div>
											
	
											<div class="col-sm-2">
												<div class="form-group">
											<label for="textfield" class="control-label"><strong>BAGS</strong></label>
													<input type="text" name="bag" id="bag"  value="@yield('bag')" class="form-control">
												</div>
											</div>
											
											<div class="col-sm-2">
												<div class="form-group">
												<label for="textfield" class="control-label"><strong>WEIGHT(MT)</strong></label>
													<input type="text" name="weight"  value="@yield('weight')" id="weight" class="form-control">
												</div>
											</div>
	
											<div class="col-sm-2">
												<div class="form-group">
													<label for="textfield" class="control-label"><strong>FRIGHT RATE</strong>  </label>
													<input type="text" name="freight_rate" id="freight_rate" value="@yield('freight_rate')" class="form-control">
												</div>
											</div>
											
	
											<div class="col-sm-2">
												<div class="form-group">
													<label for="textfield" class="control-label"><strong>DIESEL ADVANCE</strong></label>
													<input type="text" name="diesel_advance" id="diesel_advance"  value="@yield('diesel_advance')" class="form-control">
												</div>
											</div>

											<div class="col-sm-2">
												<div class="form-group">
													<label for="textfield" class="control-label"><strong>DIESEL ADVANCE LTR.</strong></label>
													<input type="text" name="diesel_advance_ltr" id="diesel_advance_ltr"  value="@yield('diesel_advance_ltr')" class="form-control">
												</div>
											</div>
	
	
											<div class="col-sm-2">
												<div class="form-group">
													<label for="textfield" class="control-label"><strong>DIESEL PUMP</strong><img src="{{url('/')}}/admin/add.png" id="shortcut_truck" data-toggle="modal" data-target="#Petrol-modal"></label>
													<select name="pentrol_pump" id="pentrol_pump" class='chosen-select form-control'>
												</select>
												<script>document.getElementById("pentrol_pump").value = "@yield('pentrol_pump')"; </script>
												</div>
											</div>
	
	
	
											<div class="col-sm-2">
												<div class="form-group">
													<label for="textfield" class="control-label"><strong>COMMISION AMT</strong></label>
													<input type="text" name="commision_rate" id="commision_rate" value="@yield('commision_rate')" class="form-control">
												</div>
											</div>
											
											
											
											<div class="col-sm-2">
												<div class="form-group">
													<label for="textfield" class="control-label"><strong>CASH ADVANCE</strong></label>
													<input type="text" name="cash_advance" value="@yield('cash_advance')" id="textfield" class="form-control">
												</div>
												
											</div>
	
											<div class="col-sm-2">
												<div class="form-group">
													<label for="textfield" class="control-label"><strong>Hemal <span class="err" style="color:#F00;">*</span> </strong> <img src="{{url('/')}}/admin/add.png" id="shortcut_truck" data-toggle="modal" data-target="#Hemal-master-modal"></label>
													<select name="hemal" id="hemal" class='chosen-select form-control'>
													
												</select>
												<script>document.getElementById("hemal").value = "@yield('hemal')"; </script>
												</div>
											</div>
	
											<div class="col-sm-2">
												<div class="form-group">
												<label for="textfield" class="control-label"><strong>Hemal Rate</strong></label>
													<input type="text" name="hemal_rate" id="hemal_rate" 
													placeholder="Hemal Rate" value="@yield('hema_rate')" class="form-control">
												</div>
											</div>  

											<div class="col-sm-2">
												<div class="form-group">
													<label for="textfield" class="control-label"><strong>Loading Type <span class="err" style="color:#F00;">*</span> </strong> </label>
													<select name="loading_type" id="loading_type" class='chosen-select form-control'>
														<?php 
															$loadingTypeArray = array("0"=>"Main Trip", "1"=>"Phad");
														?>
														@foreach($loadingTypeArray as $key => $vl)
														<option value="{{ $key }}">{{ $vl }}</option>
														@endforeach
												</select>
												<script>document.getElementById("loading_type").value = "@yield('loading_type')"; </script>
												</div>
											</div>
										
											<div class="col-sm-12">
											<div class="form-group">
											<center> 
											<button type="submit" class="btn btn-satgreen">UPDATE</button>

											</center>
											</div>
											</div>
										</div>


								</form>
                                
                                
</div>
</div>
									</div>
                                    
                                    
                                    
                                    
                                  
							</div>
						</div>


@include('admin.dispatch.load.modal');

@endsection
