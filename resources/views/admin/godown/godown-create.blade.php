@extends('admin.layouts.body')
@section('content')
<?php 
$title = "Add New";
$button = 'SAVE';
$action = url('godown-store');
if (isset($godown)) {
    $title = "Edit";
    $button = 'UPDATE';
    $action = url('godown-update', array($godown->id));
}
?>

   <div class="col-sm-12">
						<div class="box box-bordered box-color satblue">
								<x-alert />
							<div class="box-title">
								<a href="{{ url('godownDatatable') }}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Godown Datatable</a>
								<h3>
									<i class="fa fa-bars"></i>{{ $title }} Godown</h3>
							</div>
							<div class="box-content nopadding">
								
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
                                    <form action="{{ $action }}" id="form" method="post" class='form-vertical' enctype="multipart/form-data">
                                    	@csrf
                                    	@yield('method')
                                        <div class="row">
								
										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Godown Name  </strong>
												</label>
												<input type="text" class="form-control" name="name" placeholder="Godown Name" value="{{ old('name', isset($godown)?$godown->name:'') }}" id="name" required>
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>CITY</strong>
												</label>
												<input type="text" name="city" id="city" value="{{ old('city', isset($godown)?$godown->city:'') }}" class="form-control" placeholder="CITY">
											</div>
										</div>  

                                        
                                        <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Godown Incharge</strong>
												</label>
												<input type="text" name="godown_incharge" id="godown_incharge" value="{{ old('godown_incharge', isset($godown)?$godown->godown_incharge:'') }}" autocomplete="off" class="form-control" placeholder="Godown Incharge">
											</div>
										</div>

                                        <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Incharge Mobile<span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="incharge_mobile" id="incharge_mobile" value="{{ old('incharge_mobile', isset($godown)?$godown->incharge_mobile:'') }}" 
                                                class="form-control" required placeholder="Incharge Mobile"  autocomplete="off" maxlength="10">
											</div>
										</div>

                                       		
									
                                         <div class="col-sm-12">
											<div class="form-group">
                                     <center> 
                                    <button class="btn btn-satgreen"><i class="fa fa-floppy-o" aria-hidden="true"></i> {{ $button }}</button>
                                      
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