@extends('admin.layouts.body')
@section('content')

<script type="text/javascript">
	
	$(function() {
   
	 $('#startdate').datepicker({ dateFormat: 'dd-mm-yy' }).val();
	  $('#enddate').datepicker({ dateFormat: 'dd-mm-yy' }).val();
  });


</script>

   <div class="col-sm-12">
   	
										
										
						<div class="box box-bordered box-color satblue">
								
							<div class="box-title">
								<a href="{{route('company.index')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal">- REPORTS -</a>
								<h3>
									<i class="fa fa-bars"></i>@yield('formtitle')</h3>
							</div>
							<div class="box-content nopadding">
								
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
                                    <form action="{{url('/')}}/admin/@yield('formaction')"  id="form" method="post" class='form-vertical form-validate' enctype="multipart/form-data">
                                    	@csrf
                                    	@yield('method')


									<div class="row">
										
										 <div class="col-sm-12">
										<x-alert />
									</div>
										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	Company Name  <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="company_name" id="company_name" value="@yield('company_name')" 
                                                placeholder="Company Name" class="form-control"  data-rule-required="true" 	data-rule-maxlength="255"   autocomplete="off" >
											</div>
										</div>



										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>Company Owner Name <span class="err" style="color:#F00;">*</span> 
													</strong>
												</label>
												<input type="text" name="company_owner_name" id="company_owner_name" value="@yield('company_owner_name')" 
                                                placeholder="Company Owner Name" class="form-control"	data-rule-required="true" 	data-rule-maxlength="255" autocomplete="off" >
                                               
											</div>
										</div>
                                        
                                       

										    <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	Company Head Name  </strong>
												</label>
												<input type="text" name="company_head_name" id="company_head_name" value="@yield('company_head_name')"  
                                                placeholder="Company Head Name" class="form-control"   	data-rule-maxlength="255" autocomplete="off">
											</div>
										</div>

										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	Phone No.   </strong>
												</label>
												<input type="text" name="company_phone" id="company_phone"  value="@yield('company_phone')" autocomplete="off"
                                                placeholder="Phone No."  	data-rule-maxlength="10" data-rule-minlength="10" data-rule-number="true"
                                                class="form-control">
											</div>
										</div>

											 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> Mobile No. </strong>
												</label>
												<input type="text" name="company_mobile" id="company_mobile" value="@yield('company_mobile')" autocomplete="off"
                                                placeholder="Mobile No." class="form-control" 
                                                data-rule-maxlength="10" data-rule-minlength="10" data-rule-number="true"
                                                >
											</div>
										</div> 

										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> Alter Mobile No. </strong>
												</label>
												<input type="text" name="company_mobile2" id="company_mobile2" value="@yield('company_mobile2')" autocomplete="off"
                                                placeholder="Alter Mobile No."  class="form-control" 
                                                data-rule-maxlength="10" data-rule-minlength="10" data-rule-number="true" >
											</div>
										</div>    

										

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> 	Pan Card No. </strong>
												</label>
												<input type="text" name="company_pan_card" id="company_pan_card" value="@yield('company_pan_card')" autocomplete="off"
                                                placeholder="Pan Card No."   class="form-control" data-rule-maxlength="10" data-rule-minlength="10" >
											</div>
										</div>                                        
                                    	<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> GST No. </strong>
												</label>
												<input type="text" name="company_gst_no" id="company_gst_no" value="@yield('company_gst_no')" autocomplete="off"
                                                placeholder="GST No."   class="form-control"
                                                data-rule-maxlength="15" data-rule-minlength="15" >
											</div>
										</div>   

								                              
                                         
                                         	

										

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> Loading Prefix </strong>
												</label>
												<input type="text" name="company_Loading_prefix" id="company_Loading_prefix" value="@yield('company_Loading_prefix')" autocomplete="off"
                                                placeholder="Loading Prefix"  data-rule-maxlength="255" class="form-control" >
											</div>
										</div>  

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>State <span class="err" style="color:#F00;">*</span></strong>
												</label>
												<select name="state_id" id="state_id" class='chosen-select form-control' data-rule-required="true">
                                                <option >Select</option>
                                                @foreach($states as $state)
												<option value="{{$state->id}}">{{$state->statename}}</option>
												@endforeach
												</select>
                                               <script>document.getElementById("state_id").value = "@yield('state_id')"; </script>
											</div>
										</div>


												<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> Office Address </strong>
												</label>
												<textarea type="text" name="company_address" id="company_address"  data-rule-maxlength="255"       autocomplete="off"          placeholder="Office Address" class="form-control">@yield('company_address')</textarea>
											</div>
										</div>  

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> Head Office Address </strong>
												</label>
												<textarea type="text" name="head_office_address" id="head_office_address" autocomplete="off" data-rule-maxlength="255"
                                                placeholder="Head Office Address" class="form-control">@yield('head_office_address')</textarea>
											</div>
										</div>       

										<div class="col-sm-12">
											<div class="form-group">
												@yield('logo')
												<label for="textfield" class="control-label"><strong>	Company Logo  </strong>
												</label>
												<input type="file" name="company_logo" id="company_logo" value="@yield('company_logo')" 
                                                placeholder="Company Name" class="form-control"    autocomplete="off" >
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