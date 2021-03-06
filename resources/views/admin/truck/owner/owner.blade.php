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
								<a href="{{route('owner.index')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Trcuk Owner Details</a>
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
										
										

										 <div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	Owner Name  <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="owner_name" id="owner_name" value="@yield('owner_name')" 
                                                placeholder="Owner Name" class="form-control"  required  autocomplete="off" >
											</div>
										</div>

										 <div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Father's / Husband's Name</strong>
												</label>
												<input type="text" name="father_name" id="father_name" value="@yield('father_name')" 
                                                placeholder="Father's / Husband's Name" class="form-control"    autocomplete="off" >
											</div>
										</div>


										 <div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Mobile No.</strong>
												</label>
												<input type="text" name="mobile" id="mobile" value="@yield('mobile')" 
                                                placeholder="Mobile No." class="form-control"    autocomplete="off" >
											</div>
										</div>


 										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>PAN No</strong>
												</label>
												<input type="text" name="pan_no" id="pan_no" value="@yield('pan_no')" 
                                                placeholder="PAN No." class="form-control"    autocomplete="off" >
											</div>
										</div>

											<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>Owner Type  <span class="err" style="color:#F00;">*</span></strong>
												</label>
												<select name="owner_type" id="owner_type" class='chosen-select form-control' required>
                                                <option >Select</option>
                                   
										                <option value="self">Self</option> 
                                                            <option value="other">Other</option> 
											</select>
                                               <script>document.getElementById("owner_type").value = "@yield('owner_type')"; </script>
											</div>
										</div>



										<div class="col-sm-3">
											<div class="form-group" style="margin-bottom: 0px;">
												<label for="textfield" class="control-label"><strong>GST No</strong>
												</label>
												<input type="text" name="gst_no" id="gst_no" value="@yield('gst_no')" 
                                                placeholder="GST No." class="form-control"    autocomplete="off" >
											</div>
										</div>

										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>State Code  <span class="err" style="color:#F00;">*</span></strong>
												</label>
												<select name="state_code" id="state_code" class='chosen-select form-control' required>
                                                <option >Select</option>
                                   					@foreach($states as $state)
										                <option value="{{$state->id}}">{{$state->statename}}</option> 
                                                     @endforeach 
											</select>
                                               <script>document.getElementById("state_code").value = "@yield('state_code')"; </script>
											</div>
										</div>

										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>Do You want to Active TDS?  <span class="err" style="color:#F00;">*</span></strong>
												</label>
												<select name="tds_status" id="tds_status" class='chosen-select form-control' >
                                                <option >Select</option>
                                   
										                <option value="YES">YES</option> 
                                                            <option value="NO">NO</option> 
											</select>
                                               <script>document.getElementById("tds_status").value = "@yield('tds_status')"; </script>
											</div>
										</div>

										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Bank A/C No</strong>
												</label>
												<input type="text" name="ac_no" id="ac_no" value="@yield('ac_no')" 
                                                placeholder="Bank A/C No." class="form-control"    autocomplete="off" >
											</div>
										</div>

										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Bank Name</strong>
												</label>
												<input type="text" name="bank_name" id="bank_name" value="@yield('bank_name')" 
                                                placeholder="Bank Name" class="form-control"    autocomplete="off" >
											</div>
										</div>


										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Branch Name </strong>
												</label>
												<input type="text" name="branch_name" id="branch_name" value="@yield('branch_name')" 
                                                placeholder="Branch Name " class="form-control"    autocomplete="off" >
											</div>
										</div>


										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>IFSC Code</strong>
												</label>
												<input type="text" name="ifsc_code" id="ifsc_code" value="@yield('ifsc_code')" 
                                                placeholder="IFSC Code" class="form-control"    autocomplete="off" >
											</div>
										</div>

										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Alter Bank A/C No</strong>
												</label>
												<input type="text" name="alter_ac_no" id="alter_ac_no" value="@yield('alter_ac_no')" 
                                                placeholder="Alter Bank A/C No." class="form-control"    autocomplete="off" >
											</div>
										</div>

										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Alter Bank Name</strong>
												</label>
												<input type="text" name="alter_bank_name" id="alter_bank_name" value="@yield('alter_bank_name')" 
                                                placeholder="Alter Bank Name" class="form-control"    autocomplete="off" >
											</div>
										</div>


										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Alter Branch Name </strong>
												</label>
												<input type="text" name="alter_branch_name" id="alter_branch_name" value="@yield('alter_branch_name')" 
                                                placeholder="Alter Branch Name " class="form-control"    autocomplete="off" >
											</div>
										</div>


										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> Alter IFSC Code</strong>
												</label>
												<input type="text" name="alter_ifsc_code" id="alter_ifsc_code" value="@yield('alter_ifsc_code')" 
                                                placeholder="Alter IFSC Code" class="form-control"    autocomplete="off" >
											</div>
										</div>

											



										

										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Upload Declaration Document</strong>
												</label>												
												<input type="file" name="document" id="document"  
												placeholder="Document" class="form-control"    autocomplete="off" >
												@yield('document')
											</div>
										</div>

										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Upload PAN Card</strong>
												</label>												
												<input type="file" name="upload_pan_card" id="upload_pan_card" 
												placeholder="Document" class="form-control"    autocomplete="off" >
												@yield('upload_pan_card')
											</div>
										</div>

										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Upload Aadhar Card</strong>
												</label>												
												<input type="file" name="upload_aadhar_card" id="upload_aadhar_card"  
												placeholder="Document" class="form-control"    autocomplete="off" >
												@yield('upload_aadhar_card')
											</div>
										</div>

										

										

										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Adress</strong>
												</label>
												<textarea type="file" name="address" id="address"
                                                placeholder="Document" class="form-control"    autocomplete="off" >@yield('address')
												</textarea>
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