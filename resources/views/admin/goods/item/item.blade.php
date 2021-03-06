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
								<a href="{{route('item.index')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Item Details</a>
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
												<label for="textfield" class="control-label"><strong>	Item Category  </strong>
												</label>
												<select name="item_category" id="item_category" class='chosen-select form-control' >                                            
                                               	<option value=""> - Select - </option>
                                               	@foreach($cates as $cate)
			                                 	 <option value="{{$cate->id}}">{{$cate->item_category_name}}</option>
                                      			@endforeach
                                      			 </select>										
                                               <script>document.getElementById("item_category").value = "@yield('item_category')"; </script>
											</div>
										</div>

										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Item Name <span class="err" style="color:#F00;">*</span> </strong>
												</label>
												<input type="text" name="item_name" id="item_name" value="@yield('item_name')" 
                                                placeholder="Item Name" class="form-control" required   autocomplete="off" >
											</div>
										</div>

										 <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>	Description  </strong>
												</label>
												<input type="text" name="description" id="description" value="@yield('description')"  
                                                placeholder="Description" class="form-control"    autocomplete="off">
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>Unit Messure </strong>
												</label>
													<select name="unit_messure" id="unit_messure" class='chosen-select form-control' >

													<option value=""> - Select - </option>
													@foreach($units as $unit)
													<option value="{{$unit->id}}">{{$unit->name}}</option>
													@endforeach
													</select>
                                               <script>document.getElementById("unit_messure").value = "@yield('unit_messure')"; </script>
											</div>
										</div>
                                        
                                       

										    <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Item Rate </strong>
												</label>
												<input type="text" name="item_rate" id="item_rate" value="@yield('item_rate')" placeholder="Item Rate" class="form-control"    autocomplete="off" required>
											</div>
										</div>

									

										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong> HSN Code</strong>
												</label>
												<input type="text" name="hsncode" id="hsncode" value="@yield('hsncode')" autocomplete="off"
                                                placeholder="HSN Code" class="form-control">
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