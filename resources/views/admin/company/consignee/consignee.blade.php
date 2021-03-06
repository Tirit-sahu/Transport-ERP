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
								<a href="{{route('consignee.index')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Consignee Details</a>
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
									<div class="col-sm-12">									
										<x-alert />		
									</div>
										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	Consignee Name  <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="consignee_name" id="consignee_name" value="@yield('consignee_name')" 
                                                placeholder="Consignor Name" class="form-control" data-rule-required="true" data-rule-maxlength="255"   autocomplete="off" >
											</div>
										</div>



										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>Place <span class="err" style="color:#F00;">*</span></strong>
												</label>
												<select name="place_id" id="place_id" class='chosen-select form-control'  data-rule-required="true"  autocomplete="off">
                                                <option >Select</option>
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
												<input type="text" name="consignee_mobile" id="consignee_mobile" value="@yield('consignee_mobile')"  
                                                placeholder="Mobile No." class="form-control"   data-rule-maxlength="10" data-rule-minlength="10" data-rule-number="true"  autocomplete="off">
											</div>
										</div>

										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	Email ID   </strong>
												</label>
												<input type="email" name="consignee_email" id="consignee_email"  value="@yield('consignee_email')" autocomplete="off"
                                                placeholder="Email ID" data-rule-maxlength="255" class="form-control">
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> GST No. </strong>
												</label>
												<input type="text" name="consignee_gst_no" id="consignee_gst_no" value="@yield('consignee_gst_no')" autocomplete="off"
                                                placeholder="GST No." class="form-control" data-rule-maxlength="15" data-rule-minlength="15" >
											</div>
										</div>   

										


										

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>Type  </strong>
												</label>
												<select name="type" id="type" class='form-control'>
                                                <option value="1" selected>Party</option>
                                            	<option value="0">Dumb</option>
                                    			</select>
                                               <script>document.getElementById("type").value = "@yield('type')"; </script>
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>Status </strong>
												</label>
												<select name="status" id="status" class='form-control' data-rule-required="true"  >
                                                <option value="1" selected>Enable</option>
                                            	<option value="0">Disable</option>
                                    			</select>
                                               <script>document.getElementById("status").value = "@yield('status')"; </script>
											</div>
										</div>
										

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>State </strong>
												</label>
												<select name="state_id" id="state_id" class='chosen-select form-control' data-rule-required="true" >
                                                <option >Select</option>
                                                @foreach($states as $state)
												<option value="{{$state->id}}">{{$state->statename}}</option>
												@endforeach
												</select>
                                               <script>document.getElementById("state_id").value = "@yield('state_id')"; </script>
											</div>
										</div>

										<div class="col-sm-4">
											@yield('showimages')
											<div class="form-group">

												<label for="textfield" class="control-label"><strong> Document </strong>
												</label>
												<input type="file" name="document" id="document"        autocomplete="off"      value="@yield('document')"    placeholder=" Address" class="form-control">
											</div>
										</div>  
											<div class="col-sm-12">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>  Address </strong>
												</label>
												<textarea type="text" name="consignee_address" id="consignee_address"      data-rule-maxlength="255"   autocomplete="off"          placeholder=" Address" class="form-control">@yield('consignee_address')</textarea>
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