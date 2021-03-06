<?php
$truck_id = '';
if(!empty($_GET['truck_id'])){
	$truck_id = $_GET['truck_id'];
}
?>
@extends('admin.layouts.body')
@section('content')

<script type="text/javascript">
	
	$(function() {
   
$('#permit_issue_date').datepicker(
{ 
dateFormat: 'dd-mm-yy',
changeMonth: true,
changeYear: true,
showButtonPanel: true,
}
).val();

	 $('#permit_expiry_date').datepicker({ dateFormat: 'dd-mm-yy',
changeMonth: true,
changeYear: true,
showButtonPanel: true, }).val();

	 $('#fitness_issue_date').datepicker({ dateFormat: 'dd-mm-yy',
changeMonth: true,
changeYear: true,
showButtonPanel: true, }).val();

	 $('#fitness_expiry_date').datepicker({ dateFormat: 'dd-mm-yy',
changeMonth: true,
changeYear: true,
showButtonPanel: true, }).val();

	 $('#ins_issue_date').datepicker({ dateFormat: 'dd-mm-yy',
changeMonth: true,
changeYear: true,
showButtonPanel: true, }).val();

	 $('#ins_expiry_date').datepicker({ dateFormat: 'dd-mm-yy',
changeMonth: true,
changeYear: true,
showButtonPanel: true, }).val();

	 $('#road_issue_date').datepicker({ dateFormat: 'dd-mm-yy',
changeMonth: true,
changeYear: true,
showButtonPanel: true, }).val();

	 $('#road_expiry_date').datepicker({ dateFormat: 'dd-mm-yy',
changeMonth: true,
changeYear: true,
showButtonPanel: true, }).val();

	 $('#poll_issue_date').datepicker({ dateFormat: 'dd-mm-yy',
changeMonth: true,
changeYear: true,
showButtonPanel: true, }).val();

	 $('#poll_expiry_date').datepicker({ dateFormat: 'dd-mm-yy',
changeMonth: true,
changeYear: true,
showButtonPanel: true, }).val();

	 $('#noti_issue_date').datepicker({ dateFormat: 'dd-mm-yy',
changeMonth: true,
changeYear: true,
showButtonPanel: true, }).val();

	 $('#noti_expiry_date').datepicker({ dateFormat: 'dd-mm-yy',
changeMonth: true,
changeYear: true,
showButtonPanel: true, }).val();

	 $('#khanij_issue_date').datepicker({ dateFormat: 'dd-mm-yy',
changeMonth: true,
changeYear: true,
showButtonPanel: true, }).val();

	 $('#khanij_expiry_date').datepicker({ dateFormat: 'dd-mm-yy',
changeMonth: true,
changeYear: true,
showButtonPanel: true, }).val();


  });


</script>
</br>
</br>
<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>Truck No  <span class="err" style="color:#F00;">*</span></strong>
												</label>
												<select name="truck_number" id="truck_number" class='chosen-select form-control' onchange="truck_details();" required>
                                                <option value=""></option>
                                   				
                                   				@foreach($trucks as $truck)

                                   				<option value="{{ $truck->id }}">{{ $truck->truck_number }}</option>
                                   				 @endforeach
											</select>
                                               <script>document.getElementById("truck_number").value = {{ $truck_id }} </script>
											</div>
										</div>

   						<div class="col-sm-12">
						<div class="box box-bordered box-color satblue">
								<x-alert />
							<div class="box-title">
								<a href="{{route('truckdocs.index')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Truck Document Details </a>
								<h3>
									<i class="fa fa-bars"></i>@yield('formtitle')</h3>
							</div>
							<div class="box-content nopadding">
								
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
                                    <form action="{{url('/')}}/admin/@yield('formaction')" id="form" method="post" class='form-vertical' enctype="multipart/form-data"  autocomplete="off">
                                    	@csrf
                                    	@yield('method')
									<div class="row">
										
										

										 <div class="col-sm-3">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<label for="textfield" class="control-label"><strong>Truck Owner Name : <span class="err" style="color:#F00;" id="truckownername"></span> </strong>
												</label>
												
											</div>
										</div>

										

										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label">
													<strong>Truck Number :  <span class="err" style="color:#F00;" id="trucknumber"></span></strong>
												</label>
												
											</div>
										</div>

										<div class="col-sm-3">
										</div>
										<div class="col-sm-3">
										</div>
										</div>

										<div class="row">
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<label for="textfield" class="control-label"><strong>Truck Documents  :  </strong>
												</label>
												
											</div>
										</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<label for="textfield" class="control-label"><strong>	Issue Date  </strong>
												</label>
												
											</div>

											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<label for="textfield" class="control-label"><strong>Truck Expiry Date  :  </strong>
												</label>
												
											</div>

											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<label for="textfield" class="control-label"><strong>Upload Documents  :  </strong>
												</label>
												
											</div>
											</div>

											
										
											</div>

											<div class="row">
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<label for="textfield" class="control-label"><strong>Permit :  </strong>
												</label>
												
											</div>
										</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="text" name="permit_issue_date" value="@yield('permit_issue_date')" id="permit_issue_date" class="form-control">
												
											</div>

											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="text" name="permit_expiry_date"  value="@yield('permit_expiry_date')" id="permit_expiry_date" class="form-control">
												
											</div>

											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="file" name="permit_file[]"   id="permit_file" class="form-control" multiple>
												
											</div>
											</div>

											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<span id="permit_filee"></span>
												
											</div>
											</div>
											
											
										
											</div>


											<div class="row">
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<label for="textfield" class="control-label"><strong>Fitness :  </strong>
												</label>
												
											</div>
										</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="text" name="fitness_issue_date" value="@yield('fitness_issue_date')" id="fitness_issue_date" class="form-control">
												
											</div>

											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="text" name="fitness_expiry_date"  value="@yield('fitness_expiry_date')" id="fitness_expiry_date" class="form-control">
												
											</div>

											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="file" name="fitness_file[]"   id="fitness_file" class="form-control" multiple>
												
											</div>
											</div>
											
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<span id="fitness_filee"></span>
												
											</div>
											</div>
										
											</div>


											<div class="row">
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<label for="textfield" class="control-label"><strong>Insurance :  </strong>
												</label>
												
											</div>
										</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="text" name="ins_issue_date" value="@yield('ins_issue_date')" id="ins_issue_date" class="form-control">
												
											</div>

											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="text" name="ins_expiry_date"  value="@yield('ins_expiry_date')" id="ins_expiry_date" class="form-control">
												
											</div>

											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="file" name="ins_file[]" id="ins_file" class="form-control" multiple>
												
											</div>
											</div>
											
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<span id="ins_filee"></span>
												
											</div>
											</div>
										
											</div>


											<div class="row">
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<label for="textfield" class="control-label"><strong>Road Tax :  </strong>
												</label>
												
											</div>
										</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="text" name="road_issue_date" value="@yield('road_issue_date')" id="road_issue_date" class="form-control">
												
											</div>

											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="text" name="road_expiry_date"  value="@yield('road_expiry_date')" id="road_expiry_date" class="form-control">
												
											</div>

											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="file" name="road_file[]" multiple id="road_file" class="form-control">
												
											</div>
											</div>
											
										<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<span id="road_filee"></span>
												
											</div>
											</div>
											</div>


											<div class="row">
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<label for="textfield" class="control-label"><strong>Pollution :  </strong>
												</label>
												
											</div>
										</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="text" name="poll_issue_date" value="@yield('poll_issue_date')" id="poll_issue_date" class="form-control">
												
											</div>

											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="text" name="poll_expiry_date" value="@yield('poll_expiry_date')" id="poll_expiry_date" class="form-control">
												
											</div>

											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="file" name="poll_file[]" multiple id="poll_file" class="form-control">
												
											</div>
											</div>
											
										<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<span id="poll_filee"></span>
												
											</div>
											</div>
											</div>

											</div>



											<div class="row">
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<label for="textfield" class="control-label"><strong>National Permit :  </strong>
												</label>
												
											</div>
										</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="text" name="noti_issue_date" value="@yield('noti_issue_date')" id="noti_issue_date" class="form-control">
												
											</div>

											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="text" name="noti_expiry_date" value="@yield('noti_expiry_date')" id="noti_expiry_date" class="form-control">
												
											</div>

											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="file" name="nati_file[]" multiple id="nati_file" class="form-control">
												
											</div>
											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<span id="nati_filee"></span>
												
											</div>
											</div>
											
										
											</div>


											<div class="row">
											<div class="col-sm-2">
													
													<div class="form-group" style="margin-bottom: 12px!important;">
												<label for="textfield" class="control-label"><strong>Khanij Registration :  </strong>
												</label>
												
											</div>
										</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="text" name="khanij_issue_date" value="@yield('khanij_issue_date')" id="khanij_issue_date" class="form-control">
												<input type="hidden" name="trucknumber_id" value="@yield('trucknumber_id')" id="trucknumber_id" class="form-control">

												<input type="hidden" name="truck_docs_id" value="@yield('truck_docs_id')" id="truck_docs_id" class="form-control">
											</div>

											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="text" name="khanij_expiry_date" value="@yield('khanij_expiry_date')" id="khanij_expiry_date" class="form-control">
													
											</div>

											</div>
											<div class="col-sm-2" >
											<div class="form-group" style="margin-bottom: 12px!important;">
												<input type="file" name="khanij_file[]" multiple id="khanij_file" class="form-control">

												
												
											</div>
											</div>
											<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 12px!important;">
												<span id="khanij_filee"></span>
												
											</div>
											</div>
											
											
											</div>

										
										


									<div class="row">
                                         <div class="col-sm-12">
											<div class="form-group">
                                     <center> 
                                    <button class="btn btn-satgreen">@yield('button')</button>
                                      
                                       </center>
                                        	</div>
                                        		</div>
									
									
									
									
									
									
									
									
								</form>
                                
                                
</div>
</div>
									</div>
                                    
                                    
                                    
                                    
                                  
							</div>
						</div>

<script type="text/javascript">
	function truck_details(){
		$("#form")[0].reset();
		var truck_number=document.getElementById("truck_number").value;	
    	$.ajax({
    	url:"{{url('truck-details')}}?truck_number="+truck_number,
    	type:'get',
    	success:function(response){
    		var x=JSON.parse(response);
    		document.getElementById('truckownername').innerHTML=x.truckowner.owner_name;
    		document.getElementById('trucknumber').innerHTML=x.truck_number
    		document.getElementById('trucknumber_id').value=x.id
			
			if(x.docs){
				// console.log('docs are available');	
			document.getElementById('truck_docs_id').value=x.docs.id
    		document.getElementById('permit_issue_date').value=x.docs.permit_issue_date
    		document.getElementById('permit_expiry_date').value=x.docs.permit_expiry_date
    		document.getElementById('fitness_issue_date').value=x.docs.fitness_issue_date
    		document.getElementById('fitness_expiry_date').value=x.docs.fitness_expiry_date

    		document.getElementById('ins_issue_date').value=x.docs.ins_issue_date	
    		document.getElementById('ins_expiry_date').value=x.docs.ins_expiry_date

    		document.getElementById('road_issue_date').value=x.docs.road_issue_date
    		document.getElementById('road_expiry_date').value=x.docs.road_expiry_date
    		document.getElementById('poll_issue_date').value=x.docs.poll_issue_date
    		document.getElementById('poll_expiry_date').value=x.docs.poll_expiry_date
    		document.getElementById('noti_issue_date').value=x.docs.noti_issue_date
    		document.getElementById('noti_expiry_date').value=x.docs.noti_expiry_date
    		document.getElementById('khanij_issue_date').value=x.docs.khanij_issue_date
    		document.getElementById('khanij_expiry_date').value=x.docs.khanij_expiry_date

		if(x.docs.ins_file != ''){			
    		document.getElementById('ins_filee').innerHTML="<a class='label label-primary' target='_blank' href='{{ url('/pdf') }}?val="+x.docs.ins_file+"&title=Insurance Document'>Download</a>";
    	}
    	if(x.docs.permit_file){
    		document.getElementById('permit_filee').innerHTML="<a class='label label-primary' target='_blank' href='{{ url('/pdf') }}?val="+x.docs.permit_file+"&title=Permit Document'>Download</a>";
			}
    	if(x.docs.fitness_file){
    		document.getElementById('fitness_filee').innerHTML="<a class='label label-primary' target='_blank' href='{{ url('/pdf') }}?val="+x.docs.fitness_file+"&title=Fitness Document'>Download</a>";
    		}
    	if(x.docs.road_file){
    		document.getElementById('road_filee').innerHTML="<a class='label label-primary' target='_blank' href='{{ url('/pdf') }}?val="+x.docs.road_file+"&title=Road Tax Document'>Download</a>";
    		
    		}
    	if(x.docs.poll_file){
    		document.getElementById('poll_filee').innerHTML="<a class='label label-primary' target='_blank' href='{{ url('/pdf') }}?val="+x.docs.poll_file+"&title=Pollution Document'>Download</a>";
    		
    		}
    	if(x.docs.nati_file){
    		document.getElementById('nati_filee').innerHTML="<a class='label label-primary' target='_blank' href='{{ url('/pdf') }}?val="+x.docs.nati_file+"&title=National Permit Document'>Download</a>";
    		}
    	if(x.docs.khanij_file){
    		document.getElementById('khanij_filee').innerHTML="<a class='label label-primary' target='_blank' href='{{ url('/pdf') }}?val="+x.docs.khanij_file+"&title=Khanij Registration Document'>Download</a>";
    		}

			}else{
				// console.log('docs not available');
				document.getElementById('ins_filee').innerHTML = '';
				document.getElementById('permit_filee').innerHTML = '';
				document.getElementById('fitness_filee').innerHTML = '';
				document.getElementById('road_filee').innerHTML = '';
				document.getElementById('poll_filee').innerHTML = '';
				document.getElementById('nati_filee').innerHTML = '';
				document.getElementById('nati_filee').innerHTML = '';
				document.getElementById('khanij_filee').innerHTML = '';
			}
    	

    	}

    });
	}

	truck_details();

</script>


@endsection