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
								<a href="{{route('session.index')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Master Session Details</a>
								<h3>
									<i class="fa fa-bars"></i>@yield('formtitle')</h3>
							</div>
							<div class="box-content nopadding">
								
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
                                    <form action="{{url('/')}}/admin/@yield('formaction')" id="form" method="post" class='form-vertical form-validate'>
                                    	@csrf
                                    	@yield('method')
									<div class="row">
										
										<div class="col-sm-12">
											<x-alert />
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>Session Name <span class="err" style="color:#F00;">*</span> 
													</strong>
												</label>
												<input type="text" name="name" id="name" value="@yield('name')" 
                                                placeholder="Session Name" class="form-control" data-rule-required="true" 	data-rule-maxlength="255"  autocomplete="off" >
                                               
											</div>
										</div>
                                        
                                        <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	Start Date:. <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="startdate" id="startdate" value="@yield('startdate')" 
                                                placeholder="Start Date" class="form-control"  data-rule-required="true" autocomplete="off" >
											</div>
										</div>

										    <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	End Date:. <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="enddate" id="enddate" value="@yield('enddate')" 
                                                placeholder="End Date" class="form-control" data-rule-required="true"   autocomplete="off">
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