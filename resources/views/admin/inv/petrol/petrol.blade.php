@extends('admin.layouts.body')
@section('content')

<script type="text/javascript">
	
	$(function() {
   
	 $('#diesel_opening_bal_date').datepicker({ dateFormat: 'dd-mm-yy' }).val();
	 $('#petrol_opening_bal_date').datepicker({ dateFormat: 'dd-mm-yy' }).val();

  });


</script>

   <div class="col-sm-12">
						<div class="box box-bordered box-color satblue">
								<x-alert />
							<div class="box-title">
								<a href="{{route('petrol.index')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Petrol Pump Master Details</a>
								<h3>
									<i class="fa fa-bars"></i>@yield('formtitle')</h3>
							</div>
							<div class="box-content nopadding">
								
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
                                    <form action="{{url('/')}}/admin/@yield('formaction')" method="post" class='form-vertical' enctype="multipart/form-data">
                                    	@csrf
                                    	@yield('method')
										<div class="row">
										
										

										 <div class="col-sm-4">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<label for="textfield" class="control-label"><strong>Petrol Pump Name <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="petrol_pump_name" id="petrol_pump_name" value="@yield('petrol_pump_name')" placeholder="Petrol Pump Name" class="form-control"    autocomplete="off">
											</div>
										</div>

										 <div class="col-sm-8">
											<div class="form-group">
												<label for="address" class="control-label"><strong>Address</strong>
												</label>
												<input type="text" name="address" id="address" value="@yield('address')" 
                                                placeholder="Address" class="form-control"    autocomplete="off" >
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label for="district" class="control-label"><strong>District</strong>
												</label>
												<input type="text" name="district" id="district" value="@yield('district')" 
                                                placeholder="District" class="form-control"    autocomplete="off" >
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label for="state_id" class="control-label">
												<strong>State<span class="err" style="color:#F00;">*</span></strong>
												</label>
												<select name="state_id" id="state_id" class='chosen-select form-control state_id'>
                                                <option></option>
                                   					@foreach($states as $state)
										                <option value="{{$state->id}}">{{$state->statename}}</option> 
                                                    @endforeach 
											</select>
                                               <script>document.getElementById("state_id").value = '@yield('state_id')' </script>
											</div>
										</div>

										


										 <div class="col-sm-4">
											<div class="form-group">
												<label for="mobile" class="control-label"><strong>Mobile NO.</strong>
												</label>
												<input type="text" name="mobile" id="mobile" value="@yield('mobile')" 
                                                placeholder="Mobile NO." class="form-control"    autocomplete="off" >
											</div>
										</div>


 										<div class="col-sm-4">
											<div class="form-group">
												<label for="alter_mobile" class="control-label"><strong>Alter Mobile NO.</strong>
												</label>
												<input type="text" name="alter_mobile" id="alter_mobile" value="@yield('alter_mobile')" 
                                                placeholder="Alter Mobile NO." class="form-control"    autocomplete="off" >
											</div>
										</div>

											


										<div class="col-sm-4">
											<div class="form-group">
												<label for="email" class="control-label"><strong> Email ID</strong>
												</label>
												<input type="email" name="email" id="email" value="@yield('email')" 
                                                placeholder="Email ID" class="form-control"    autocomplete="off" >
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label for="gst_no" class="control-label"><strong>GST No</strong>
												</label>
												<input type="text" name="gst_no" id="engineno" value="@yield('engineno')" 
                                                placeholder="GST No" class="form-control"    autocomplete="off" >
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label for="pan_no" class="control-label"><strong>PAN No</strong>
												</label>
												<input type="text" name="pan_no" id="pan_no" value="@yield('pan_no')" 
                                                placeholder="PAN No" class="form-control"    autocomplete="off" >
											</div>
										</div>



										<div class="col-sm-4">
									  <div class="form-group">
												<label for="contact_person_name" class="control-label"><strong>Contact Persion Name</strong>
												</label>
												<input type="text" name="contact_person_name" id="contact_person_name" value="@yield('contact_person_name')" 
                                                placeholder="Contact Persion Name" class="form-control"    autocomplete="off" >
											</div>
										</div>										

										<div class="col-sm-4">
										<div class="form-group">
												<label for="contact_person_mobile" class="control-label"><strong>Contact Persion Mobile</strong>
												</label>
												<input type="text" name="contact_person_mobile" id="contact_person_mobile" value="@yield('contact_person_mobile')" 
                                                placeholder="Contact Persion Mobile" class="form-control"    autocomplete="off" >
											</div>
										</div>

										<div class="col-sm-4">
										<div class="form-group">
												<label for="contact_person_email" class="control-label"><strong>	Contact Persion Email</strong>
												</label>
												<input type="text" name="contact_person_email" id="contact_person_email" value="@yield('contact_person_email')" 
                                                placeholder="	Contact Persion Email" class="form-control"    autocomplete="off" >
											</div>
										</div>


										


										<div class="col-sm-4">
											<div class="form-group">
											<label for="type" class="control-label"><strong>Type</strong>
												</label>
												<select name="type" id="type" class='chosen-select form-control'>
                                                <option></option>
                                                <option value="Self">Self</option>
                                                <option value="Other">Other</option>
                                   					
											</select>
                                               <script>document.getElementById("type").value = "@yield('type')"; </script>
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