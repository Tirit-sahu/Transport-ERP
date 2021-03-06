@extends('admin.layouts.body')
@section('content')
<?php 
$title = "Add New";
$button = 'SAVE';
$action = url('supplier-store');
if (isset($supplier)) {
    $title = "Edit";
    $button = 'UPDATE';
    $action = url('supplier-update', array($supplier->id));
}
?>

   <div class="col-sm-12">
						<div class="box box-bordered box-color satblue">
								<x-alert />
							<div class="box-title">
								<a href="{{ url('supplierDatatable') }}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Supplier Datatable</a>
								<h3>
									<i class="fa fa-bars"></i>{{ $title }} Supplier</h3>
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
												<label for="textfield" class="control-label"><strong>	Name  </strong>
												</label>
												<input type="text" class="form-control" name="name" placeholder="Supplier Name" value="{{ old('name', isset($supplier)?$supplier->name:'') }}" id="name" required>
											</div>
										</div>

										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Mobile<span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="mobile" id="mobile" value="{{ old('mobile', isset($supplier)?$supplier->mobile:'') }}" 
                                                class="form-control" required placeholder="Mobile"  autocomplete="off" maxlength="10">
											</div>
										</div>

										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>GST NO.  </strong>
												</label>
												<input type="text" name="gst" id="gst" value="{{ old('gst', isset($supplier)?$supplier->gst:'') }}" class="form-control" autocomplete="off" placeholder="GST NO.">
											</div>
										</div>


										    <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>PAN NO.</strong>
												</label>
												<input type="text" name="pan" id="pan" value="{{ old('pan', isset($supplier)?$supplier->pan:'') }}" class="form-control" autocomplete="off" placeholder="PAN NO.">
											</div>
										</div>

									

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>CITY</strong>
												</label>
												<input type="text" name="city" id="city" value="{{ old('city', isset($supplier)?$supplier->city:'') }}" class="form-control" placeholder="CITY">
											</div>
										</div>  
                                        
                                        <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Address</strong>
												</label>
												<input type="text" name="address" id="address" value="{{ old('address', isset($supplier)?$supplier->address:'') }}" autocomplete="off" class="form-control" placeholder="Address">
											</div>
										</div>

                                        <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Opening Balance</strong>
												</label>
												<input type="text" name="opening_bal" id="opening_bal" value="{{ old('opening_bal', isset($supplier)?$supplier->opening_bal:'') }}" autocomplete="off"
                                                placeholder="Opening Balance" class="form-control">
											</div>
										</div>

                                        <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Opening Balance Date</strong>
												</label>
												<input type="date" name="opening_bal_date" id="opening_bal_date" value="{{ old('opening_bal_date', isset($supplier)?$supplier->opening_bal_date:'') }}" autocomplete="off"
                                                placeholder="Opening Balance Date" class="form-control">
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