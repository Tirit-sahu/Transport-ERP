<?php
$selectdriver = '';
$selectSTatus = '';
$action = '';
if (isset($driver)) {
	$button = 'Update';
	$formTitle = 'Update Driver/Conductor Record';
	$selectdriver = $driver->designation;
	$selectSTatus = $driver->status;
	$action = url('driverStore/update/'.$driver->id);
}else{
	$button = 'Save';
	$formTitle = 'Add New Driver/Conductor Record';
	$action = url('driverStore');
}
?>

@extends('admin.layouts.body')
@section('content')

   						<div class="col-sm-12">
						<div class="box box-bordered box-color satblue">
								<x-alert />
							<div class="box-title">
								<h3><i class="fa fa-bars"></i> {{ $formTitle }}</h3>
								<a href="{{ url('driverShow') }}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Driver / Conductor Datatables </a>
								
							</div>
							<div class="box-content nopadding">
								
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
										<form action="{{ $action }}" method="post" class='form-vertical' enctype="multipart/form-data">
											@csrf
											@yield('method')
											<div class="row">
											
											
	
											 <div class="col-sm-4">
												<div class="form-group" style="margin-bottom: 12px!important;">
													<label for="textfield" class="control-label"><strong>
														Employee Name <span class="err" style="color:#F00;">*</span> </strong>
													</label>
													<input type="text" name="employeeName" id="employeeName" placeholder="Employee Name" class="form-control" value="{{ isset($driver)?$driver->employeeName :'' }}" autocomplete="off">
												</div>
											</div>
	
											<div class="col-sm-4">
												<div class="form-group" style="margin-bottom: 12px!important;">
													<label for="textfield" class="control-label"><strong>
														Designation <span class="err" style="color:#F00;">*</span> </strong>
													</label>
													<?php 
													$arrayDriver = ['Driver', 'Conductor'];
													?>
													<select name="designation" id="designation" class='chosen-select form-control state_id'>
														<option value=""></option>							@foreach($arrayDriver as $da)			
														<option <?php if($selectdriver==$da){ echo 'selected'; } ?> value="{{ $da }}">{{ $da }}</option>				@endforeach				   
													</select>
												</div>
											</div>
	
											<div class="col-sm-4">
												<div class="form-group">
													<label for="district" class="control-label"><strong>Date Of Joining</strong>
													</label>
													<input type="text" name="DOJ" id="DOJ" placeholder="DD-MM-YY" value="{{ isset($driver)? $driver->DOJ :'' }}" class="form-control datePicker" autocomplete="off">
												</div>
											</div>
	
	
	
											<div class="col-sm-4">
												<div class="form-group">
													<label for="mobile" class="control-label"><strong>Mobile NO.</strong>
													</label>
													<input type="text" name="mobile" id="mobile" placeholder="Mobile NO." value="{{ isset($driver)?$driver->mobile :'' }}" class="form-control"    autocomplete="off" >
												</div>
											</div>
	
	
											 <div class="col-sm-4">
												<div class="form-group">
													<label for="ESIC" class="control-label"><strong>ESIC No</strong>
													</label>
													<input type="text" name="ESIC" id="ESIC" placeholder="ESIC No" value="{{ isset($driver)?$driver->ESIC :'' }}" class="form-control"    autocomplete="off" >
												</div>
											</div>
	
											
	
											<div class="col-sm-4">
												<div class="form-group">
													<label for="PAN" class="control-label"><strong>PAN</strong>
													</label>
													<input type="text" name="PAN" id="PAN" placeholder="PAN" value="{{ isset($driver)?$driver->PAN :'' }}" class="form-control" autocomplete="off" >
												</div>
											</div>
	
											<div class="col-sm-4">
												<div class="form-group">
													<label for="gst_no" class="control-label"><strong>Lisence No</strong>
													</label>
													<input type="text" name="lisenceNo" id="lisenceNo" placeholder="Lisence No." value="{{ isset($driver)?$driver->lisenceNo :'' }}" class="form-control"    autocomplete="off" >
												</div>
											</div>
	
											<div class="col-sm-4">
												<div class="form-group">
													<label for="pan_no" class="control-label"><strong>	Lisence Issue Date </strong>
													</label>
													<input type="text" name="lisenceIssueDate" id="lisenceIssueDate" 
													placeholder="DD-MM-YY" value="{{ isset($driver)? $driver->lisenceIssueDate :'' }}" class="form-control datePicker" autocomplete="off" >
												</div>
											</div>
	
	
	
											<div class="col-sm-4">
										  	<div class="form-group">
													<label for="contact_person_name" class="control-label"><strong>Lisence Expire Date </strong>
													</label>
													<input type="text" name="lisenceExpireDate" id="lisenceExpireDate"
													placeholder="DD-MM-YY" value="{{ isset($driver)? $driver->lisenceExpireDate :'' }}" class="form-control datePicker"    autocomplete="off" >
												</div>
											</div>										
	
											{{-- <div class="col-sm-4">
											<div class="form-group">
													<label for="contact_person_mobile" class="control-label"><strong>	Company Name</strong>
													</label>
													<select name="companyName" id="companyName" class='chosen-select form-control'>
														<option></option>
															   
													</select>
												</div>
											</div> --}}


											<div class="col-sm-4">
												<div class="form-group">
													  <label for="contact_person_name" class="control-label"><strong>Date of Birth</strong>
													  </label>
													  <input type="text" name="DOB" id="DOB"
													  placeholder="DD-MM-YY" value="{{ isset($driver)? $driver->DOB :'' }}" class="form-control datePicker" autocomplete="off" >
												  </div>
											</div>

											<div class="col-sm-4">
												<div class="form-group">
													  <label for="medicalExpireDate" class="control-label"><strong>Medical Expire Date</strong>
													  </label>
													  <input type="text" name="medicalExpireDate" id="medicalExpireDate"
													  placeholder="DD-MM-YY" value="{{ isset($driver)? $driver->medicalExpireDate :'' }}" class="form-control datePicker" autocomplete="off" >
												  </div>
											</div>
	
											<div class="col-sm-4">
											<div class="form-group">
													<label for="contact_person_email" class="control-label"><strong>Salary</strong>
													</label>
													<input type="text" name="Salary" id="Salary" value="{{ isset($driver)? $driver->Salary :'' }}" placeholder="Salary" class="form-control"    autocomplete="off">
											</div>
											</div>


											<div class="col-sm-4">
												<div class="form-group">
														<label for="contact_person_email" class="control-label"><strong>	Address</strong>
														</label>
														<input type="text" name="address" id="address" value="{{ isset($driver)? $driver->address :'' }}" 
														placeholder="Address" class="form-control"    autocomplete="off" >
													</div>
												</div>

													<div class="col-sm-4">
														<div class="form-group">
															<label for="contact_person_email" class="control-label"><strong>Upload Driver Lic.</strong>
															</label>
															<input type="file" name="uploadDriverLisence" id="uploadDriverLisence" value="" 
															placeholder="Address" class="form-control"    autocomplete="off" >
															@if(isset($driver))
															<a target="_blank" href="{{ asset('storage/app/public/DriverDocs/'.$driver->uploadDriverLisence) }}">
															<img src='{{ asset('storage/app/public/DriverDocs/'.$driver->uploadDriverLisence) }}' width="60">
															</a>
															@endif
														</div>
													</div>

													<div class="col-sm-4">
														<div class="form-group">
															<label for="state_id" class="control-label">
															<strong>Status<span class="err" style="color:#F00;">*</span></strong>
															</label>
															<?php 
															$statusArray = ['Enable', 'Disable'];
															?>
															<select name="status" id="status" class='chosen-select form-control state_id' required>
															<option value=""></option>
															@foreach($statusArray as $sa)
															<option <?php if($selectSTatus==$sa){ echo 'selected'; } ?> value="{{ $sa }}">{{ $sa }}</option>
															@endforeach
														</select>
														</div>
													</div>
	
	
											
										
										<div class="col-sm-12">
										<div class="form-group">
										<center> 
										<button type="submit" class="btn btn-satgreen"><i class="fa fa-floppy-o" aria-hidden="true"></i> {{ $button }}</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">										
	$( function() {
	$(".datePicker").datepicker(
	{ 
	dateFormat: 'dd-mm-yy',
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	}
	);
	} );
</script>