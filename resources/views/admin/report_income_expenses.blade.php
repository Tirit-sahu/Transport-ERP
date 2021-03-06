<?php 
use \App\Http\Controllers\Admin\commonController;
use Illuminate\Http\Request;

$vehicle_no = '';
if (isset($_GET['vehicle_no'])) {
	$vehicle_no = $_GET['vehicle_no'];
}

$from_date = '';
$to_date = '';
if (isset($_GET['from_date'])) {
	$from_date = $_GET['from_date'];
	$to_date = $_GET['to_date'];
}

?>

@include('admin.layouts.head')
@include('admin.layouts.header')

<div class="container-fluid" id="content">
{{-- @include('admin.layouts.leftheader') --}}
		{{-- <div id="main"> --}}
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
			
                
                
                <div class="row">
					<div class="col-md-3"></div>
					<div class="col-sm-9">
						<center>
						<form action="{{ url('/truckIncExp') }}" method="GET" autocomplete="off">
						<div class="col-sm-2">
						<div class="form-group">
						<label for="textfield" class="control-label"><strong>Vehicle NO.<span class="err" style="color:#F00;">*</span></strong></label>
						<select name="vehicle_no" id="vehicle_no" data-rule-required="true" class='chosen-select form-control'  onchange="search();">
						<option value=""> Select All</option>
						@foreach($trucks as $truck)
						<option value="{{ $truck->id }}">{{ $truck->truck_number }}</option>
						@endforeach	
						</select>
						<script>document.getElementById("vehicle_no").value = "{{ $vehicle_no }}"; </script>
						</div>
						</div>						

						<div class="col-sm-2">
						<div class="form-group">
						<label for="textfield" class="control-label"><strong>FROM DATE</strong></label>
						<input type="text" name="from_date" data-rule-required="true" 	data-rule-maxlength="255" value="{{ $from_date }}" id="from_date" class="datepicker form-control">
						</div>
						</div>

						<div class="col-sm-2">
						<div class="form-group">
						<label for="textfield" class="control-label"><strong>TO DATE </strong></label>
						<input type="text" name="to_date" data-rule-required="true" data-rule-maxlength="255" value="{{ $to_date }}" id="to_date" class="datepicker form-control">
						</div>
						</div>

						<div class="col-sm-2">
						<div class="form-group"><br>
						<button class="btn btn-satgreen">Search</button>
						<a href="{{ url('/truckIncExp') }}" class="btn btn-primary">Reset</a>
						</div>
						</div>										
						</form>
						</center>
					</div>
                    <div class="col-sm-12">
                        <div class="col-md-6">
                            
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>Date</th>                                      
                                  <th>Loading No.</th>
                                  <th>Weight</th>
                                  <th>AMT </th>                                
                                </tr>
                              </thead>
                              <tbody>
								  	@php $iTotal=0; @endphp
									@foreach($loading_entries as $le)
									@php 
									$ATot = commonController::getValueStatic('loading_receiveings','net_amt','loading_entries_id',$le->id);
									$iTotal += $ATot; 
									@endphp
									<tr>
										<td>{{ date('d-m-Y', strtotime($le->loading_date)) }}</td>
										<td>{{ $le->loading_no }}</td>
										<td>{{ $le->weight }}</td>
										<td>{{ $ATot }}</td>
									</tr>
									@endforeach
                              </tbody>
                              <tfoot>
                                <tr>
									<th>Total:</th>
									<th></th>
									<th></th>
									<th>{{ $iTotal }}</th>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <div class="col-md-6">
                            <table class="table table-bordered">
                              <thead>
                                <tr>                               
                                <th>Date</th>
                                <th>Exp Type</th>
                                <th>AMT</th>                                                                 
                                </tr>
                              </thead>
                              <tbody>
									@php $eTotal=0; @endphp
									@foreach($truck_other_expenses as $toe)
									@php $eTotal += $toe->AMT; @endphp
									<tr>
									<td>{{ $toe->expensesDate }}</td>
									<td>{{ $toe->HEAD }}</td>
									<td>{{ $toe->AMT }}</td>
									</tr>
									@endforeach
                              </tbody>
                              <tfoot>
                                <tr>
									<th>Total:</th>
									<th></th>
									<th>{{ $eTotal }}</th>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                    </div>                       
					
					<div class="col-md-12">
						<table class="table">
							<tr>
								<th>
									<span class="pull-right">Balance: &nbsp;&nbsp;&nbsp;&nbsp;{{ $iTotal - $eTotal}}</span>
								</th>
							</tr>
						</table>
					</div>
                        
                    </div>
                    
                    
                    					
				</div>
				
				
				
				
			</div>
		{{-- </div> --}}

</div>


<script>
	$( function() {
	$( ".datepicker").datepicker(
	{ 
	dateFormat: 'dd-mm-yy',
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	}
	);
	} );
</script>
