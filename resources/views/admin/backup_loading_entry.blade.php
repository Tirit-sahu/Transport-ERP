<?php use \App\Http\Controllers\Admin\commonController;
use Illuminate\Http\Request;
?>
@include('admin.layouts.head')
@include('admin.layouts.header')
<body>
	<div class="container-fluid" id="content">
	@include('admin.layouts.leftheader')
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h2>Tamanna RoadCarrier</h2>
					</div>
					<div class="pull-right">
						
						<ul class="stats">
							<li class='satgreen'>
								<i class="fa fa-money"></i>
								<div class="details">
									<span class="big">12000</span>
									<span>Today Cash Adv</span>
								</div>
							</li>
                            <li class='lightred'>
								<i class="fa fa-filter"></i>
								<div class="details">
									<span class="big">600</span>
									<span>Today Diesel Adv</span>
								</div>
							</li>
                            <li class='satgreen'>
								<i class="fa fa-database"></i>
								<div class="details">
									<span class="big">600</span>
									<span>Today Dispatch(MT)</span>
								</div>
							</li>
							<li class='lightred'>
								<i class="fa fa-calendar"></i>
								<div class="details">
									<span class="big">February 22, 2013</span>
									<span>Wednesday, 13:56</span>
								</div>
							</li>
						</ul>
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
									<i class="fa fa-bars"></i>Loading Process</h3>
							</div>
							<div class="box-content nopadding">
                                <!-- Tab start -->
                                @include('admin.tab')
                                <!-- tab end -->
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
									<div class="row">
										<script type="text/javascript">										
											$( function() {
											$( "#loading_date").datepicker(
											{ 
											dateFormat: 'dd-mm-yy',
											changeMonth: true,
											changeYear: true,
											showButtonPanel: true,
											}
											);
											} );
                                        </script>
          
                               <form action="{{url('/')}}/admin/dispatch/load" id="form" autocomplete="off" method="post" class='form-vertical' enctype="multipart/form-data">
                                    	@csrf
                                    	@yield('method')
									<div class="row">

                                        <div class="col-sm-2"> 
											<div class="form-group" style="margin-bottom: 0px;">
												<label for="textfield" class="control-label"><strong>LOADING DATE <span class="err" style="color:#F00;">*</span> </strong></label>
												<input type="text" name="loading_date" id="loading_date" value="@yield('loading_date')" autocomplete="off" 
                                                placeholder="DD-MM-YYYY" class="form-control">
											</div>
										</div>
                                        
                                        <div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 0px;">
											<label for="textfield" class="control-label"><strong>LOADING NO.</strong></label>
												<input type="text" name="loading_no" id="loading_no"  value="{{Helpers::getcode()}}" 
                                                placeholder="0005230" readonly class="form-control">
											</div>
                                        </div>
                                        
										<div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 0px;"> 
												<label for="textfield" class="control-label"><strong>Consignor Name  <img src="{{url('/')}}/admin/add.png" id="shortcut_truck" data-toggle="modal" data-target="#Consignormodal"><span class="err" style="color:#F00;">*</span></strong></label>
												<select name="consignor" id="consignor_fetch" data-rule-required="true"  class='chosen-select form-control'>
                                                
											</select>

											<script>document.getElementById("consignor").value = "@yield('consignor')"; </script>
											</div>
										</div>
                                        

                                        <div class="col-sm-2">
											<div class="form-group" style="margin-bottom: 0px">
												<label for="textfield" class="control-label"><strong>FROM PLACE  <img src="{{url('/')}}/admin/add.png" id="shortcut_truck" data-toggle="modal" data-target="#Place-modal"><span class="err" style="color:#F00;">*</span></strong></label>
												<select name="from_place" id="from_place" data-rule-required="true" class='chosen-select form-control'>
                                               
												
											</select>

											<script>document.getElementById("from_place").value = "@yield('from_place')"; </script>
											</div>
										</div>
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
											<label for="textfield" class="control-label"><strong>Consignee Name<span class="err" style="color:#F00;">*</span> 
											</strong><img src="{{url('/')}}/admin/add.png" id="shortcut_truck" data-toggle="modal" data-target="#Consignee-modal"></label>
												<select name="consignee" id="consignee" class='chosen-select form-control'>
                                                
												
												
											</select>
											<script>document.getElementById("consignee").value = "@yield('consignee')"; </script>
											</div>
										</div>

                                        <div class="col-sm-2">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>TO PLACE <span class="err" style="color:#F00;">*</span> 
												</strong><img src="{{url('/')}}/admin/add.png" id="shortcut_truck" data-toggle="modal" data-target="#Place-modal"></label>
												<select name="to_plce" id="to_plce" class='chosen-select form-control'>
 												
											</select>
											<script>document.getElementById("to_plce").value = "@yield('to_plce')"; </script>
											</div>
										</div>

										<div class="col-sm-2">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>VEHICLE NO. <span class="err" style="color:#F00;">*</span> </strong> <img src="{{url('/')}}/admin/add.png" id="shortcut_truck" data-toggle="modal" data-target="#new-task"></label>
												<select name="vehicle_no" id="vehicle_fetch" class='chosen-select form-control'>
                                                
											</select>
											<script>document.getElementById("vehicle_fetch").value = "@yield('vehicle_nno')"; </script>
											</div>
										</div>


										<div class="col-sm-2">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Item Master <span class="err" style="color:#F00;">*</span> </strong> <img src="{{url('/')}}/admin/add.png" id="shortcut_truck" data-toggle="modal" data-target="#Item-master-modal"></label>
												<select name="item_master" id="item_master" class='chosen-select form-control'>
                                                
											</select>
											<script>document.getElementById("item_master").value = "@yield('item_master')"; </script>
											</div>
                                        </div>
                                        

                                        <div class="col-sm-2">
											<div class="form-group">
										<label for="textfield" class="control-label"><strong>BAGS</strong></label>
												<input type="text" name="bag" id="bag"  value="@yield('bag')" class="form-control">
											</div>
                                        </div>
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
											<label for="textfield" class="control-label"><strong>WEIGHT(MT)</strong></label>
												<input type="text" name="weight"  value="@yield('weight')" id="weight" class="form-control">
											</div>
                                        </div>

                                        <div class="col-sm-2">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>FRIGHT RATE</strong>  </label>
												<input type="text" name="freight_rate" id="freight_rate" value="@yield('freight_rate')" class="form-control">
											</div>
                                        </div>
                                        

                                        <div class="col-sm-2">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>DIESEL ADVANCE</strong></label>
												<input type="text" name="diesel_advance" id="diesel_advance"  value="@yield('diesel_advance')" class="form-control">
											</div>
										</div>


                                        <div class="col-sm-2">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>DIESEL PUMP</strong><img src="{{url('/')}}/admin/add.png" id="shortcut_truck" data-toggle="modal" data-target="#Petrol-modal"></label>
												<select name="pentrol_pump" id="pentrol_pump" class='chosen-select form-control'>
											</select>
											<script>document.getElementById("pentrol_pump").value = "@yield('pentrol_pump')"; </script>
											</div>
										</div>



										<div class="col-sm-2">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>COMMISION AMT</strong></label>
												<input type="text" name="commision_rate" id="commision_rate" value="@yield('commision_rate')" class="form-control">
											</div>
										</div>
                                        
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
                                                <label for="textfield" class="control-label"><strong>CASH ADVANCE</strong></label>
												<input type="text" name="cash_advance" value="@yield('cash_advance')" id="textfield" class="form-control">
											</div>
                                            
										</div>

										<div class="col-sm-2">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>Hemal <span class="err" style="color:#F00;">*</span> </strong> <img src="{{url('/')}}/admin/add.png" id="shortcut_truck" data-toggle="modal" data-target="#Hemal-master-modal"></label>
												<select name="hemal" id="hemal" class='chosen-select form-control'>
                                                
											</select>
											<script>document.getElementById("hemal").value = "@yield('hemal')"; </script>
											</div>
										</div>

										<div class="col-sm-2">
											<div class="form-group">
											<label for="textfield" class="control-label"><strong>Hemal Rate</strong></label>
												<input type="text" name="hemal_rate" id="hemal_rate" 
                                                placeholder="Hemal Rate" class="form-control">
											</div>
                                        </div>                                        
                                        

										
                                        
                                        
                                        

									
                                         <div class="col-sm-12">
											<div class="form-group">
                                    <center> 
                                    <button type="submit" class="btn btn-satgreen">Save</button>
                                      
                                    </center>
                                        	</div>
                                        		</div>
									</div>
									
									</form>
									
									
									
									
									
	 <div class="col-sm-12">
<div class="box box-color box-bordered">
	<x-alert />
<div class="box-title">
	<h3>
	Loading Entry Master Details
	</h3>
</div>
<div class="box-content nopadding"  style="overflow: scroll;">
<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">
<thead>

<tr>
	<th>SN.</th>
	<th>Loading Date</th>
	<th>Loading NO</th>
	<th>Vehicle No</th>
	<th>Weight </th>
	<th>Bags</th>
	<th>Fright Rate</th>
	<th>Commision Amt</th>
	<th>Consignor</th>
	<th>From Place/ TO Place</th>
	<th>Consignee</th>
	<th>Diesel Adv.</th>
	<th>Cash Adv.</th>
    <th>Action </th>
 

</tr>
</thead>
<tbody>
	@foreach($loads as $load)
<tr>
	<td>{{$loop->index+1}}</td>
	<td>{{$load->loading_date}}</td>
	<td>{{$load->loading_no}}</td>
	<td>{{ commonController::getValueStatic('trucks','truck_number','id',$load->vehicle_no) }}</td>
	<td>{{$load->weight}}</td>
	<td>{{$load->bag}}</td>
	<td>{{$load->freight_rate}}</td>
	<td>{{$load->commision_rate}}</td>
	<td>{{$load->Consignor->consignor_name}}</td>
	<td>{{$load->place->placename}} / {{$load->toplace->placename}}</td>
	<td>{{$load->Consignee->consignee_name}}</td>
	<td>{{$load->diesel_advance}}</td>
	<td>{{$load->cash_advance}}</td>

	   
	<td>
		<a href="{{route('load.show',$load->id)}}" class="btn" target="_blank" rel="tooltip" title="Print">
				<i class="fa fa-print"></i>
			</a>
      
		<a href="{{route('load.edit',$load->id)}}" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Update">
		
		<form action="{{route('load.destroy',$load->id)}}" method="post">
			@csrf
			@method('delete')
			<button type="submit" class="btn btn-link">
			<i class="fa bg-red fa-trash pr-1 pl-1 cursor" onclick="return confirm('Are you sure to Delete?')" style="cursor: pointer;color:red;"></i>
			</button>
		</form>
		</a>
	</td>
</tr>

@endforeach




</tbody>
</table>


</div>
<BR/>
</div>
</div>
									</div>
									</div>
                                    
                                    
                                    
                                    
                                    
									<div class="tab-pane" id="second22">
										<script type="text/javascript">
	
	$(function() {
   
	 $('.receiving_date').datepicker({ dateFormat: 'dd-mm-yy' }).val();
	 $('#from_date').datepicker({ dateFormat: 'dd-mm-yy' }).val();
	 $('#to_date').datepicker({ dateFormat: 'dd-mm-yy' }).val();

  });

</script>
									<div class="row">
	<form action="/admin/index/" autocomplete="off">
										 <div class="col-sm-2">
											<div class="form-group">
											<label for="textfield" class="control-label"><strong>Vehicle NO.<span class="err" style="color:#F00;">*</span></strong></label>
												<select name="truck_number" id="truck_number" data-rule-required="true" class='chosen-select form-control'  onchange="search();">
                                               	<option value=""> - Select - </option>
                                              
                                               	@foreach($trucknumber as $truck)
                                               		<option value="{{ $truck->truck->id }}">{{ $truck->truck->truck_number }}</option>
                                               	@endforeach	
											</select>

											<script>document.getElementById("truck_number").value = "@yield('truck_number')"; </script>
											</div>
										</div>


                                        <div class="col-sm-2">
											<div class="form-group">
											<label for="textfield" class="control-label"><strong>LOADING NO.</strong></label>
												<select name="loading_no" id="loading_number" data-rule-required="true" class='chosen-select form-control'>
                                               	
											</select>

											<script>document.getElementById("loading_number").value = "@yield('loading_no')"; </script>
											</div>
										</div>

										
										

										<div class="col-sm-2">
											<div class="form-group" style="margin-top: 22px;">
											<center> 
                                    <button class="btn btn-satgreen">Search</button>
                                      <a href="{{ route('admin.index') }}" class="btn btn-satgreen">Reset</a>
                                       </center>
											</div>
										</div>										
							</form>
										
										        
                               </div>

						<div class="box box-bordered box-color satblue">
					
								<x-alert />
							<div class="box-title">
										
								<h3>
									<i class="fa fa-bars"></i>@yield('formtitle')</h3>
							</div>
							<div class="box-content nopadding" style="overflow: scroll;">



<!-- <table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,daterange,text,select,select,null,null,null,select,select,null,null,null,null,null,null,null,null,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all"> -->

	<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">
	<thead>
<tr>
	<th>SNO.</th>
	<th>DATE </th>
	<th>LOADING NO.</th>
	<th>TRUCK OWNER</th>
	<th>VEHICLE NO. </th>
	<th>WEIGHT(MT)</th>
    <th>BAGS</th>
     <th>RATE </th>
    <th>FROM PLACE</th>
    <th>TO PLACE </th>
    <th>Cash ADVANCE </th>
    <th>Petrol ADVANCE </th>
    <th>Commission </th>
    <th>Type </th>
    <th>Shortge(MT) </th>
    <th>RECIVING DATE </th>
    <th>RECEIVED MT </th>
    
    <th>NARRATION </th>
   
	<th>Options</th>
</tr>
</thead>
<tbody>
	@foreach($loadreceives as  $load)
<tr>

	<td>{{$loop->index+1}}</td>
	<td>{{$load->loading_date}}</td>
	<td>{{$load->loading_no}}</td>
	<td>{{$load->truck->truckowner->owner_name}}</td>
	<td>{{$load->truck->truck_number}}</td>
	<td>{{$load->weight}}</td>
    <td>{{$load->bags}}</td>
    <td>{{$load->fright_rate}}</td>
    <td>{{$load->place->placename}}</td>
    <td>{{$load->toplace->placename}}</td>
    <td>{{$load->cash_advance}}</td>
    <td>{{$load->diesel_advance}}</td>
    <td>{{$load->commision_rate}}</td>
    <td><select name="shortagetype{{$load->id}}" id="shortagetype{{$load->id}}" class='form-control' style="width: 120px">
 			<option value="">No Shortage</option>
			<option value="Shortage">Shortage</option>
			<option value="Damage">Damage</option>
			<option value="increase">increase</option>							
		</select>
	</td>
    <td><input type="text" name="shiortage{{$load->id}}" id="shiortage{{$load->id}}" class="form-control"></td>
    <td><input type="text" name="receiving_date{{$load->id}}" id="receiving_date{{$load->id}}" class="form-control receiving_date " >
<span id="rec_date{{$load->id}}" style="color:red"></span>
    </td>
    <td><input type="text" name="receiving_mt{{$load->id}}"  id="receiving_mt{{$load->id}}" class="form-control ">
    <span id="mt{{$load->id}}" style="color:red"></span>
</td>
    
    <td><input type="text" name="narres{{$load->id}}" id="narres{{$load->id}}" class="form-control"></td>
	<td>
		
<button class="btn btn-satgreen" onclick="save({{$load->id}})">Save</button>
<span id="alert{{$load->id}}"></span>
	</td>
</tr>
	@endforeach	
				
</tbody>
</table></div>					</div>
                                    
                                    
                                    
                                    
                                  
							</div>

<!-- 
									//end Receive
 -->
									<div class="tab-pane" id="thirds3322">
										<div class="row">
	<form action="/admin/index/" autocomplete="off">
										 <div class="col-sm-2">
											<div class="form-group">
											<label for="textfield" class="control-label"><strong>Vehicle NO.<span class="err" style="color:#F00;">*</span></strong></label>
											
												<select name="vehicle_noo" id="vehicle_no" data-rule-required="true" class='chosen-select form-control'  onchange="search();">
                                               	<option value=""> - Select - </option>
                                               	@foreach(	$trucks as $truck)
                                               		<option value="{{ $truck->truck->id }}">{{ $truck->truck->truck_number }}</option>
                                               	@endforeach	
												
											</select>

											<script>document.getElementById("vehicle_no").value = "@yield('vehicle_no')"; </script>
											</div>
										</div>


                                        <!-- <div class="col-sm-2">
											<div class="form-group">
											<label for="textfield" class="control-label"><strong>Owner Name</strong></label>
												<select name="ownerr" id="owner" data-rule-required="true" class='chosen-select form-control'>
                                               	<option> - Select - </option>
                                               	@foreach($owners as $owner)
                                               		<option value="{{ $owner->id }}">{{ $owner->owner_name }}</option>
                                               	@endforeach	
												
											</select>

											<script>document.getElementById("owner").value = "@yield('owner')"; </script>
											</div>
										</div> -->

										<div class="col-sm-2">
											<div class="form-group" style="margin-top: 22px;">
											<center> 
                                    <button class="btn btn-satgreen">Search</button>
                                      <a href="{{ route('admin.index') }}" class="btn btn-satgreen">Reset</a>
                                       </center>
											</div>
										</div>										
							</form>
										
										        
                               </div>

						<div class="box box-bordered box-color satblue">
					
								<x-alert />
							<div class="box-title"> 
								 <div class="col-sm-2">
											<div class="form-group">
											<label for="textfield" class="control-label" style="color:white;"><strong>LOADING NO.</strong></label>
												<select name="loading_num" id="loading_num" data-rule-required="true" class='chosen-select form-control' onchange="loading_fetch();">
                                               	<option> - Select - </option>
                                               	@foreach($paymenstloads as $load)
                                               		<option value="{{ $load->entry->id }}">{{ $load->entry->loading_no }}</option>
                                               	@endforeach	
												
											</select>

											<script>document.getElementById("loading_num").value = "@yield('loading_num')"; </script>
											</div>
										</div>		
								<a href="{{route('payment.index')}}" style="float:  right; margin-right: 10px;" class="btn btn-teal"> Payment Details</a>
							</div>
							<div class="box-content nopadding" style="overflow: scroll;">


<form action="{{route('payment.store')}}" method="post">
	@csrf

	<div class="col-sm-2">
							<div class="form-group">
							<label for="textfield" class="control-label" ><strong>Invoice No.</strong></label>
												<input type="text" name="invoice" class="form-control" value="{{Helpers::getinvoice()}}" readonly />	
											</div>
										</div>	

		<div class="col-sm-2">
							<div class="form-group">
							<label for="textfield" class="control-label" ><strong>Payment Date</strong></label>
												<input type="text" name="payment_date" id="payment_date" class="form-control" required />	
											</div>
										</div>	

<table class="table table-bordered table-hover table-nomargin "
>
	<thead>
<tr>
	<th>SNO.</th>
	<th>Loading DATE </th>
	<th>LOADING NO.</th>
	<th>TRUCK OWNER</th>
	<th>VEHICLE NO. </th>
	<th>WEIGHT(MT)</th>

    <th>BAGS</th>
     <th>RATE </th>
    <th>FROM PLACE</th>
    <th>TO PLACE </th>
    <th>Cash ADVANCE </th>
    <th>Petrol ADVANCE </th>
    <th>Commission </th>
    <th>RECIVING DATE </th>
    <th>RECEIVED MT </th>
    <th>type </th>
    <th>Shortge(MT) </th>
  
    <th>NARRATION </th>
	<th>Net Amount</th>

</tr>
</thead>

<tbody id="load_process">
	



</tbody>
<tfoot>
	<tr class="tr:last-child">
	<td colspan="18" style="text-align: right;">Grand Total</td>
	<td id="grand_total"> </td>
	
</tr>  		
	<tr>
		<td colspan="18" style="text-align: right;"></td>
		<td><button class="btn btn-satgreen" type="submit">Save</button></td>
		
	</tr>
</tfoot>

</table>
</form>
</div>					</div>
                                    
                                    
                                    
                                    
                                  
									</div>
									<div class="tab-pane" id="thirds33">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem tempore accusamus officiis et nihil qui ea voluptatem itaque enim obcaecati iure distinctio quam molestiae deleniti iste necessitatibus dolorem quos rerum inventore suscipit! Temporibus suscipit
										excepturi molestias harum tempora nihil sed placeat atque nobis a minima sit id deserunt expedita ex! Tempore incidunt animi iste vitae dignissimos adipisci nisi impedit doloribus blanditiis unde nobis totam laboriosam maxime in quam repudiandae
										eos atque illum. Eaque facilis voluptates architecto suscipit sed dolor possimus earum molestiae ratione porro necessitatibus nihil sint recusandae optio eligendi ipsum maiores cum impedit dolores soluta ullam similique quas quod assumenda laudantium
										unde excepturi sequi hic aperiam tenetur explicabo laboriosam maxime perspiciatis placeat commodi illo dolorem corporis tempora voluptatem culpa nobis veritatis consequatur veniam mollitia ex animi qui omnis dolore et quae. Natus itaque quisquam
										repellat enim accusamus vel deserunt veniam vitae earum nostrum nulla maxime quas ipsa cum rem ut fugiat repellendus quis voluptates eligendi voluptatibus animi obcaecati esse illo incidunt? Amet repudiandae ducimus vel sit neque magni optio
										eveniet ut eum adipisci incidunt laudantium consectetur debitis veniam tempore temporibus maiores inventore! Libero hic quisquam nihil pariatur perspiciatis beatae non at commodi sint dolore tempora corporis explicabo quam saepe?
									</div>
								</div>
							</div>
						</div>
					</div>
                    
                    
                    
                    
					<div class="col-sm-6">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="fa fa-bar-chart-o"></i>
									Document Renewal Reminder
								</h3>
								
							</div>
                            
							<div class="box-content" style="height:350px; overflow:scroll">
								<div class="statistic-big">
									<div class="top">
										<div class="left" style="width:250px;">
											<select name="category" onchange="search_truck_docs();" class='chosen-select' id="search_truck_docs"  style="width:250px;">
												<option value="">Select</option>
												<option value="permit_expiry_date">Permit Alerts</option>
												<option value="ins_expiry_date">Insurance Alerts</option>
												<option value="fitness_expiry_date">Fitness Alerts</option>
												<option value="noti_expiry_date">National Permit Alerts</option>
                                                <option value="road_expiry_date">Road Tax Alerts</option>
                                                <option value="poll_expiry_date">Pollution Alerts</option>
                                                <option value="khanij_expiry_date">Khanij Registration </option>
                                              
											</select>
										</div>
										
									</div>
									<table class="table table-user table-nohead" style="font-size:16px;">
									<tbody id="id_truck_document">
										 											
                                       
									</tbody>
								</table>
									
								</div>
							</div>
						</div>
					</div>
                    
                    <div class="col-sm-6">
						<div class="box box-color lightred box-bordered">
							<div class="box-title">
								<h3>
									<i class="fa fa-bar-chart-o"></i>
									own truck current month trip
								</h3>
								
							</div>
                            
							<div class="box-content" style="height:350px; overflow:scroll">
								<div class="statistic-big">
									<div class="top">
										<div class="left">
											<select name="category" class='chosen-select' data-nosearch="true" style="width:150px;">
												<option value="1">CG04MJ6490</option>
												<option value="2">CG22LA3245</option>
												<option value="3">CG04MJ6490</option>
												<option value="4">CG04MJ6490</option>
                                              
                                                <option value="4">CG04MJ6490</option>
                                              
											</select>
										</div>
                                        <div class="right">
											<h5 style="color:#F00; font-weight:bold">Total Trip : 5 <span style="color:#00C">Total MT : 325</span></h5>
                                            
										</div>
										
									</div>
									<table class="table table-user" style="font-size:16px;">
									<thead>
<tr>
	<th>SNO.</th>
	<th>DATE </th>
	<th>WEIGHT(MT)</th>
    <th>FROM PLACE</th>
    <th>TO PLACE </th>
  
</tr>
</thead>
<tbody>
<tr>
	<td>1</td>
	<td>03-07-2014</td>
	<td>25.5</td>
	<td>Raipur</td>
	<td>Baloda</td>
  
   
</tr>




</tbody>
								</table>
									
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				
				
				
			</div>
		</div>
	</div>
	
@include('admin.dispatch.load.modal');

</body>

<!-- Truck Document script -->

<script type="text/javascript">
	

	function search_truck_docs(){
		
		var search_truck_docs=document.getElementById('search_truck_docs').value;
		$.ajax({
		url: "{{ url('getTruckDoucmtIndex') }}?search_truck_docs="+search_truck_docs,
		type: 'get',
		success: function(response) {
			console.log(response);
			document.getElementById('id_truck_document').innerHTML=response;
		}
		
		});
}

getTruckDoucmtIndex();

</script>

<!-- Receiveing Scripi -->

<script type="text/javascript">
	function save($id){
		var receiving_date=document.getElementById("receiving_date"+$id).value;
		var receiving_mt=document.getElementById("receiving_mt"+$id).value;
		var shortagetype=document.getElementById("shortagetype"+$id).value;
		var shiortage=document.getElementById("shiortage"+$id).value;
		var narres=document.getElementById("narres"+$id).value;
	if(receiving_date==''){
			document.getElementById("rec_date"+$id).innerHTML='Fill Receive Date';
	}

if(receiving_mt==''){
			document.getElementById("mt"+$id).innerHTML='Fill Receive MT';
	}
	
    $.ajax({
    	url:"{{url('receive-store')}}?receiving_date="+receiving_date+"&receiving_mt="+receiving_mt+"&shortagetype="+shortagetype+"&shiortage="+shiortage+"&narres="+narres+"&id="+$id,
    	type:'get',
    	success:function(response){
    		document.getElementById("alert"+$id).innerHTML=response;
    	}

    });
	}

	

</script>

<script type="text/javascript">
	
function search(){

	var truck_number=document.getElementById("truck_number").value;
	
	 $.ajax({
      url: "{{ url('truck_number_get') }}?truck_number="+truck_number,
      type: 'get',
      success: function(response) {
       $("#loading_number").html(response);
      	 $('#loading_number').trigger("chosen:updated");
     }
    });

	
}

</script>


<!-- start payment Javascirpt -->

<script type="text/javascript">


function loading_fetch(){

		var loading_no=document.getElementById('loading_num').value;
		
		$.ajax({
    	url:"{{url('load-fetch')}}?loading_no="+loading_no,
    	type:'get',
    	success:function(response){
    		
    		if(response!='')
    		{
var x=JSON.parse(response);
	var table = document.getElementById('load_process');  
    var rowCount = table.rows.length;  
    var row = table.insertRow(rowCount);  
    //Column 1  
	var grand_total=0;
 	
 	var netamount=(x.entry.weight*x.entry.fright_rate)-(x.entry.weight*x.entry.commision_rate)-x.entry.cash_advance-x.entry.diesel_advance-(x.shortage*x.entry.fright_rate);
    var cell1 = row.insertCell(0);  
    cell1.innerHTML = (rowCount + 1);  
    //Column 3  
    var cell2 = row.insertCell(1);  
    cell2.innerHTML=x.entry.loading_date;

    var cell3 = row.insertCell(2);  
    cell3.innerHTML=x.entry.loading_no;

    var cell4 = row.insertCell(3);  
    cell4.innerHTML=x.owner_name;

    var cell5 = row.insertCell(4);  
    cell5.innerHTML=x.truck_number;

    var cell6 = row.insertCell(5);  
    cell6.innerHTML=x.entry.weight;

    var cell7 = row.insertCell(6);  
    cell7.innerHTML=x.entry.bags;

    var cell8 = row.insertCell(7);  
    cell8.innerHTML=x.entry.fright_rate


        var cell9 = row.insertCell(8);  
    cell9.innerHTML=x.from_name;

        var cell10 = row.insertCell(9);  
    cell10.innerHTML=x.to_place;

    var cell11 = row.insertCell(10);  
    cell11.innerHTML=x.entry.cash_advance;

    var cell12 = row.insertCell(11);  
    cell12.innerHTML=x.entry.diesel_advance;


    var cell13 = row.insertCell(12);  
    cell13.innerHTML=x.entry.commision_rate;


    var cell14 = row.insertCell(13);  
    cell14.innerHTML=x.received_mt;


    var cell15 = row.insertCell(14);  
    cell15.innerHTML=x.receiving_date;


    var cell16 = row.insertCell(15);  
    cell16.innerHTML=x.type;

    var cell17 = row.insertCell(16);  
    cell17.innerHTML=x.shortage;

    

    var cell18 = row.insertCell(17);  
    cell18.innerHTML="<input type='text'  class='form-control' id='narresation"+x.loading_no+"' name='narresation[]' ><input type='hidden'  class='form-control loading_no' value='"+x.id+"' name='loading_no[]'>    ";


    var cell19 = row.insertCell(18);  
    cell19.innerHTML="<input type='text'  class='form-control netamount' id='netamount"+x.loading_no+"' value="+netamount.toFixed(2)+" name='netamount[]' style='width:120px;' readonly />";

setTotal();
    	}
		}
    });

	}
	

function setTotal()
{
	var grant_amt=0;
	$(".netamount").each(function(){

	amt = parseFloat($(this).val());
	
		grant_amt += amt;
			
	});
	grant_amt;
// alert(Grant_amt);
// 	$("#grand_total").val(Math.round(Grant_amt).toFixed(2));
document.getElementById('grand_total').innerHTML=grant_amt.toFixed(2);

}




</script>

</html>




