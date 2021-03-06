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
								<a href="{{ url('/admin/place/state/show') }}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> State Details </a>
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
												<label for="textfield" class="control-label">
													<strong>State Code </strong>
												</label>
												<input type="text" name="state_code" id="state_code" value="@yield('state_code')" 
                                                placeholder="State Code" class="form-control"    autocomplete="off" >
                                               
											</div>
										</div>

										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>State Name  <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="statename" id="statename" value="@yield('statename')" 
                                                placeholder="State Name" class="form-control" required   autocomplete="off" >
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