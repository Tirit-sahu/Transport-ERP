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
								<a href="{{route('consignor.index')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Consignor Details</a>
								<h3>
									<i class="fa fa-bars"></i>@yield('formtitle')</h3>
							</div>
							<div class="box-content nopadding">
								
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
                                    <form action="{{url('/')}}/admin/@yield('formaction')"  method="post" class='form-vertical form-validate' enctype="multipart/form-data">
                                    	@csrf
                                    	@yield('method')
									<div class="row">
										
											<div class="col-sm-12">
												<x-alert />
											</div>

										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	Consignor Name  <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="consignor_name" id="consignor_name" value="@yield('consignor_name')" data-rule-required="true" data-rule-maxlength="255"
												placeholder="Consignor Name" class="form-control"    autocomplete="off" >
											</div>
										</div>



										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>Place  <span class="err" style="color:#F00;">*</span></strong>
												</label>
												<select name="place_id" id="place_id" class='chosen-select form-control' data-rule-required="true"  >
                                                <option value="0">Select</option>
                                                @foreach($places as $place)
												<option value="{{$place->id}}">{{$place->placename}}</option>
												@endforeach
											</select>
                                               <script>document.getElementById("place_id").value = "@yield('place_id')"; </script>
											</div>
										</div>
                                        
                                       

										    <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	Mobile No.  </strong>
												</label>
												<input type="text" name="consignor_mobile" id="consignor_mobile" value="@yield('consignor_mobile')"  data-rule-maxlength="255" data-rule-minlength="10" data-rule-number="true"
                                                placeholder="Mobile No." class="form-control"    autocomplete="off">
											</div>
										</div>

										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	Email ID   </strong>
												</label>
												<input type="email" name="consignor_email" id="consignor_email"  value="@yield('consignor_email')" autocomplete="off"
                                                placeholder="Email ID" class="form-control " data-rule-maxlength="255">
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> GST No. </strong>
												</label>
												<input type="text" name="consignor_gst_no" id="consignor_gst_no" value="@yield('consignor_gst_no')" autocomplete="off"
                                                placeholder="GST No." class="form-control" data-rule-maxlength="15" data-rule-minlength="16">
											</div>
										</div>   

										


											 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> Company Commision(%) </strong>
												</label>
												<input type="text" name="company_commission" id="company_commission" value="@yield('company_commission')" autocomplete="off"
                                                placeholder="Company Commision(%)" class="form-control" data-rule-maxlength="255">
											</div>
										</div> 

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>State <span class="err" style="color:#F00;">*</span></strong>
												</label>
												<select name="state_id" id="state_id" data-rule-required="true"  class='chosen-select form-control' >
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
												<label for="textfield" class="control-label">
													<strong>Status <span class="err" style="color:#F00;">*</span></strong>
												</label>
												<select name="status" id="status" class='form-control' data-rule-required="true" >
                                                <option value="1" selected>Enable</option>
                                            	<option value="0">Disable</option>
                                    			</select>
                                               <script>document.getElementById("status").value = "@yield('status')"; </script>
											</div>
										</div>

												<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>  Address </strong>
												</label>
												<textarea type="text" name="consignor_address" id="consignor_address"     data-rule-maxlength="255"   autocomplete="off"          placeholder=" Address" class="form-control">@yield('consignor_address')</textarea>
											</div>
										</div>  

										<div class="col-sm-4">

											<div class="form-group">
											@yield('Document')
												<label for="textfield" class="control-label">
													<strong>Document </strong>
												</label>
											<input type="file" name="document" id="document" value="@yield('document')" autocomplete="off"
                                                placeholder="Company Commision(%)" class="form-control">
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