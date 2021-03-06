@extends('admin.layouts.body')
@section('content')

<script type="text/javascript">
	
	$(function() {
   
	 $('#doj').datepicker({ dateFormat: 'dd-mm-yy' }).val();
	 $('#lisence_date').datepicker({ dateFormat: 'dd-mm-yy' }).val();
	 $('#lisence_date_exp').datepicker({ dateFormat: 'dd-mm-yy' }).val();
	 $('#dob').datepicker({ dateFormat: 'dd-mm-yy' }).val();
	  $('#medical_expire_date').datepicker({ dateFormat: 'dd-mm-yy' }).val();

  });
</script> 
   <div class="col-sm-12">
						<div class="box box-bordered box-color satblue">
								<x-alert />
							<div class="box-title">
								<a href="{{route('emp.index')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Employee Master Details</a>
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
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Employee	Name   <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="name" id="name"  value="@yield('name')" autocomplete="off" required
                                                placeholder="Employee Name" class="form-control">
											</div>
										</div>



										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>Designation <span class="err" style="color:#F00;">*</span></strong>
												</label>
												<select name="designation" id="designation" class='chosen-select form-control' required>
                                                <option >Select</option>
                                   
										                <option value="1">Driver</option>
										                <option value="2">Conductor</option>
										                <option value="3">Office Staff</option>
										                <option value="4">Owner</option>
											</select>
                                               <script>document.getElementById("designation").value = "@yield('designation')"; </script>
											</div>
										</div>



										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	Date Of Joining    </strong>
												</label>
												<input type="text" name="doj" id="doj"  value="@yield('doj')" autocomplete="off"
                                                placeholder="dd-mm-YY" class="form-control">
											</div>
										</div>




										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	PAN No.  </strong>
												</label>
												<input type="text" name="pan_no" id="pan_no"  value="@yield('pan_no')" autocomplete="off"
                                                placeholder="PAN No. " class="form-control">
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Lisence No </strong>
												</label>
												<input type="text" name="lisence_no" id="lisence_no"  value="@yield('lisence_no')" autocomplete="off"
                                                placeholder="Lisence No " class="form-control">
											</div>
										</div>


										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Lisence Issue Date</strong>
												</label>
												<input type="text" name="lisence_date" id="lisence_date"  value="@yield('lisence_date')" autocomplete="off"
                                                placeholder="Lisence Issue Date" class="form-control">
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Lisence Expire Date </strong>
												</label>
												<input type="text" name="lisence_date_exp" id="lisence_date_exp"  value="@yield('lisence_date_exp')" autocomplete="off"
                                                placeholder="Lisence Expire Date  " class="form-control">
											</div>
										</div>


										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Date of Birth</strong>
												</label>
												<input type="text" name="dob" id="dob"  value="@yield('dob')" autocomplete="off"
                                                placeholder="Date of Birth " class="form-control">
											</div>
										</div>




										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Mobile No. <span class="err" style="color:#F00;">*</span></strong>
												</label>
												<input type="text" name="mobile" id="mobile"  value="@yield('mobile')" autocomplete="off" required 
                                                placeholder="Mobile No. " class="form-control">
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Alter Mobile No. </strong>
												</label>
												<input type="text" name="mobile2" id="mobile2"  value="@yield('mobile2')" autocomplete="off"  
                                                placeholder=" Alter Mobile No. " class="form-control">
											</div>
										</div>


											<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Salary </strong>
												</label>
												<input type="text" name="salary" id="salary"  value="@yield('salary')" autocomplete="off"  
                                                placeholder=" Salary" class="form-control">
											</div>
										</div>



											<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Bank A/C no. </strong>
												</label>
												<input type="text" name="bank_ac_no" id="bank_ac_no"  value="@yield('bank_ac_no')" autocomplete="off" 
                                                placeholder="Bank A/C no. " class="form-control">
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Status <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<select name="status" id="status" class='chosen-select form-control' required >
                                                    <option>Select</option>
                                        			<option value="0">In-Active</option>
              										<option value="1">Active</option>
												</select>
                                               <script>document.getElementById("status").value = "@yield('status')"; </script>
											</div>
										</div>

										<div class="col-sm-8">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> Address </strong>
												</label>
												<textarea type="text" name="address" id="address"        autocomplete="off"   placeholder="Office Address" class="form-control">@yield('address')</textarea>
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