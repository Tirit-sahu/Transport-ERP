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
								<x-alert />
							<div class="box-title">
								<a href="{{route('bank.index')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Bank Details</a>
								<h3>
									<i class="fa fa-bars"></i>@yield('formtitle')</h3>
							</div>
							<div class="box-content nopadding">
								
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
                                    <form action="{{url('/')}}/admin/@yield('formaction')" id="form" method="post" class='form-vertical form-validate' enctype="multipart/form-data">
                                    	@csrf
                                    	@yield('method')
									<div class="row">
										
										

										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	Bank Name  <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="bank_name" id="bank_name" value="@yield('bank_name')" 
                                                placeholder="Bank Name" class="form-control"  data-rule-required="true" 	data-rule-maxlength="255"  autocomplete="off" >
											</div>
										</div>



									
                                       

										    <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	Branch Name</strong>
												</label>
												<input type="text" name="bank_branch" id="bank_branch" value="@yield('bank_branch')"  
                                                placeholder="Branch Name" class="form-control"  data-rule-required="true" 	data-rule-maxlength="255"   autocomplete="off">
											</div>
										</div>

										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	IFSC Code  </strong>
												</label>
												<input type="text" name="bank_IFSC" id="bank_IFSC"  value="@yield('bank_IFSC')" autocomplete="off" 	data-rule-maxlength="255"
                                                placeholder="Email ID" class="form-control">
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> A\C No. </strong>
												</label>
												<input type="text" name="bank_ac" id="bank_ac" value="@yield('bank_ac')" autocomplete="off"
                                                placeholder="A\C No." data-rule-number="true" data-rule-maxlength="20"  class="form-control">
											</div>
										</div>   

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> A\C Holder Name </strong>
												</label>
												<input type="text" name="ac_holder_name" id="ac_holder_name" value="@yield('ac_holder_name')" autocomplete="off"
                                                placeholder="A\C Holder Name" data-rule-maxlength="255"  class="form-control">
											</div>
										</div>   

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> Mobile No. </strong>
												</label>
												<input type="text" name="holder_mobile" id="holder_mobile" value="@yield('holder_mobile')" autocomplete="off"
                                                placeholder="Mobile No." data-rule-maxlength="10" data-rule-number="true" data-rule-minlength="255" class="form-control">
											</div>
										</div>   

										


										

										
										

										
												<div class="col-sm-12">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>  Address </strong>
												</label>
												<textarea type="text" name="bank_address" id="bank_address"        autocomplete="off"      data-rule-minlength="255"    placeholder=" Address" class="form-control">@yield('bank_address')</textarea>
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