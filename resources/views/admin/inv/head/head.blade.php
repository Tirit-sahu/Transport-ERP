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
								<a href="{{route('head.index')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal">Master Head Details </a>
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
												<label for="textfield" class="control-label"><strong>Head Name <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="head_name" id="head_name" value="@yield('head_name')" 
                                                placeholder="Head Name" class="form-control"    autocomplete="off" >
											</div>
										</div>

										

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>Type  <span class="err" style="color:#F00;">*</span></strong>
												</label>
												<select name="head_type" id="head_type" class='chosen-select form-control' required>
                                                <option >Select</option>
                                   				    <option value="">--Select--</option>
                                                    <option value="Bilty">Bilty</option>
                                                    <option value="Truck">Truck</option>
                                                    <option value="Office">Office</option>
                                                    <option value="Bonus">Bonus</option>
											</select>
                                               <script>document.getElementById("head_type").value = "@yield('head_type')"; </script>
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