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
								<a href="{{route('regi.index')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Master User Details </a>
								<h3>
									<i class="fa fa-bars"></i>@yield('formtitle')</h3>
							</div>
							<div class="box-content nopadding">
								
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
                                    <form action="{{url('/')}}/admin/@yield('formaction')" id="form" method="post" class='form-vertical form-validation' enctype="multipart/form-data">
                                    	@csrf
                                    	@yield('method')
									<div class="row">
										
										<div class="col-sm-12">
										<x-alert />
									</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>Name <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="@yield('name')" required autocomplete="name" autofocus>

				                                @error('name')
				                                    <span class="invalid-feedback" role="alert">
				                                        <strong>{{ $message }}</strong>
				                                    </span>
				                                @enderror
											</div>
										</div>

										 <div class="col-sm-6">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Email  <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="@yield('email')" required autocomplete="email">

					                                @error('email')
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong>{{ $message }}</strong>
					                                    </span>
					                                @enderror

											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>User Type <span class="err" style="color:#F00;">*</span></strong>
												</label>
												<select name="usertype" id="usertype" class='chosen-select form-control' required>
                                                <option >Select</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Employee">Employee</option>
                                               </select>
                                               <script>document.getElementById("usertype").value = "@yield('usertype')"; </script>
											</div>
										</div>

									 <div class="col-sm-6">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>{{ __('Password') }}<span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" >
				                                @error('password')
						                                    <span class="invalid-feedback" role="alert">
						                                        <strong>{{ $message }}</strong>
						                                    </span>
						                                @enderror
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