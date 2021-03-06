@extends('admin.layouts.body')
@section('content')

<script type="text/javascript">
	
	$(function() {
   
	 $('#open_date').datepicker({ dateFormat: 'dd-mm-yy' }).val();

  });


</script>

   <div class="col-sm-12">
						<div class="box box-bordered box-color satblue">
								<x-alert />
							<div class="box-title">
								<a href="{{route('truck.index')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Trcuk Master Details</a>
								<h3>
									<i class="fa fa-bars"></i>@yield('formtitle')</h3>
							</div>
							<div class="box-content nopadding">
								
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
                                    <form action="{{url('/')}}/admin/@yield('formaction')" id="form" method="post" class='form-vertical' enctype="multipart/form-data">
                                    	@csrf
                                    	@yield('method')
									<div class="row">
										
										

										 <div class="col-sm-4">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<label for="textfield" class="control-label"><strong>	Truck Number  <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="truck_number" id="truck_number" value="@yield('truck_number')" 
                                                placeholder="Truck Number" class="form-control"    autocomplete="off" >
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>Owner Name <span class="err" style="color:#F00;">*</span></strong>
												</label>
												<select name="truckowner_id" id="truckowner_id" class='chosen-select form-control' required>
                                                <option >Select</option>
                                   					@foreach($owners as $owner)
										                <option value="{{$owner->id}}">{{$owner->owner_name }}  {{ isset($owner->ac_no)? '('.$owner->ac_no.')':'' }}</option> 
                                                    @endforeach 
											</select>
                                               <script>document.getElementById("truckowner_id").value = "@yield('truckowner_id')"; </script>
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group" >
												<label for="textfield" class="control-label">
													<strong>Truck Type  <span class="err" style="color:#F00;">*</span></strong>
												</label>
												<select name="tructype_id" id="tructype_id" class='chosen-select form-control' required>
                                                <option >Select</option>
                                   					@foreach($types as $type)
										                <option value="{{$type->id}}">{{$type->trucktype}}</option> 
                                                    @endforeach 
											</select>
                                               <script>document.getElementById("tructype_id").value = "@yield('tructype_id')"; </script>
											</div>
										</div>

										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Truck Model</strong>
												</label>
												<input type="text" name="truck_model" id="truck_model" value="@yield('truck_model')" 
                                                placeholder="Truck Model" class="form-control"    autocomplete="off" >
											</div>
										</div>


										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Manufacturer</strong>
												</label>
												<input type="text" name="manufacturer" id="manufacturer" value="@yield('manufacturer')" 
                                                placeholder="Manufacturer" class="form-control"    autocomplete="off" >
											</div>
										</div>


 										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Chassis No</strong>
												</label>
												<input type="text" name="chassisno" id="chassisno" value="@yield('chassisno')" 
                                                placeholder="Chassis  No." class="form-control"    autocomplete="off" >
											</div>
										</div>

											


										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> Engine No</strong>
												</label>
												<input type="text" name="engineno" id="engineno" value="@yield('engineno')" 
                                                placeholder="Engine No" class="form-control" required   autocomplete="off" >
											</div>
										</div>


										


										<?php $truckdoc = isset($truck->document)?$truck->document:''; ?>
										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Document </strong>
												</label>
												<input type="file" name="document" id="document" value="{{ isset($truck->document)?$truck->document:''}}" 
											   class="form-control"    autocomplete="off">
											   {{-- <small class="text-danger">Select only pdf file</small><br> --}}
											   <?php 
												if (isset($truck->document)) { ?>
												<a target="_blank" href="{{ asset('storage/app/public/doctruck/'.$truck->document) }}">
											   <img src="{{ asset('storage/app/public/doctruck/document00.png') }}" alt="Image Not Available" style="width: 100px;">
												</a>
											   <?php } ?>
											</div>
										</div>

									
                                         <div class="col-sm-12">
											<div class="form-group">
                                     <center> 
                                    <button class="btn btn-satgreen">@yield('button')</button>
                                      
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

@endsection