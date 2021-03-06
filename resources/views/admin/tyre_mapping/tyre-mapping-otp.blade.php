@extends('admin.layouts.body')
@section('content')
<div class="container-fluid" id="content">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h2>Tamanna RoadCarrier</h2>
					</div>
					<div class="pull-right">
						
                        @include('admin.dashboard_header');
                        
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="index.php">Dashboard</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
			<div class="row">
                
                <div class="col-sm-12">
						<div class="box box-bordered box-color satblue">
							<div class="box-title">
								<h3>
									<i class="fa fa-bars"></i>OTP For Tyre Mapping</h3>
							</div>
							<div class="box-content nopadding">
								<div class="tab-content padding tab-content-inline tab-content-bottom">								
                                    
                            <div>
                            <form action="{{ url('tyre-mapping-otp-validate') }}" method="post" class='form-vertical' enctype="multipart/form-data">
                                @csrf
                                <x-alert />

                                <div class="col-sm-4"></div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                    <label for="notp" class="control-label"><strong>ENTER OTP FOR TYRE MAPPING</strong> </label>
                                    <input type="text" name="notp" id="notp" 
                                    placeholder="ENTER OTP" value="" class="form-control" required>
                                    </div>
                                </div> 
                                
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <br>
                                    <button type="submit" class="btn btn-satgreen">- SUBMIT -</button>
                                    </div>
                                </div>  

                        



                            </form>

                            
									</div>
									
										
									</div>
								</div>
							</div>
						</div>
			    </div>
                    					
				</div>
				
		</div>

</div>



@endsection