
@include('admin.layouts.head')
@include('admin.layouts.header')

	<div class="container-fluid" id="content">
        {{-- @include('admin.layouts.leftheader') --}}
		{{-- <div id="main"> --}}
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h2>Agarwal Transport</h2>
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
                
                <div class="col-sm-12">
						<div class="box box-bordered box-color satblue">
							<div class="box-title">
								<h3>
									<i class="fa fa-bars"></i>Accounts</h3>
							</div>
							<div class="box-content nopadding">
								<ul class="tabs tabs-inline tabs-top">
									<li class='active'>
										<a href="#first11" data-toggle='tab' style="font-weight:bold">
											<i class="fa fa-inbox"></i>Generate Salary</a>
									</li>
									<li>
										<a href="#second22" data-toggle='tab' style="font-weight:bold">
											<i class="fa fa-share"></i>PAY EMI</a>
									</li>
									<li>
										<a href="#thirds3322" data-toggle='tab' style="font-weight:bold">
											<i class="fa fa-book"></i>--</a>
									</li>
									<li>
										<a href="#thirds3344" data-toggle='tab'style="font-weight:bold">
											<i class="fa fa-money"></i>--</a>
									</li>
								</ul>
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
								<form action="#" method="get" class='form-vertical'>
								<div class="row">

								<div class="col-sm-2">
								<div class="form-group">
								<label for="textfield" class="control-label"><strong>DRIVER/HELPER  <img src="add.png" id="shortcut_truck"><a href="#" id="add_new" data-form="short_truck" tabindex="49"></a><span class="err" style="color:#F00;">*</span></strong></label>
								<select name="select" id="select" class='chosen-select form-control'>
								<option value="0">Select</option>
								<option value="1">Mukesh/8871181890</option>
								<option value="2">Durgesh/6268105118</option>
								<option value="3">Bhupesh/6268105112</option>
								<option value="4">Lomesh/8871181890</option>


								</select>
								</div>
								</div>
								<div class="col-sm-2">
								<div class="form-group">
								<label for="textfield" class="control-label"><strong>VEHICLE NO. <span class="err" style="color:#F00;">*</span> </strong> <img src="add.png" id="shortcut_truck"><a href="#" id="add_new" data-form="short_truck" tabindex="49"></a></label>
								<select name="select" id="select" class='chosen-select form-control'>
								<option value="0">Select</option>
								<option value="1">CG04MJ6490</option>
								<option value="2">CG22AB3052</option>
								<option value="3">CG22LA6895</option>
								<option value="4">CG05KA6874</option>


								</select>
								</div>
								</div>

								<div class="col-sm-2">
								<div class="form-group">
								<label for="textfield" class="control-label"><strong>AMOUNT</strong></label>
								<input type="text" name="textfield" id="textfield"  class="form-control">
								</div>
								</div>

								<div class="col-sm-2">
								<div class="form-group">
								<label for="textfield" class="control-label"><strong>PAYMENT MOOD <span class="err" style="color:#F00;">*</span> 
								</strong><img src="add.png" id="shortcut_truck"><a href="#" id="add_new" data-form="short_truck" tabindex="49"></a></label>
								<select name="select" id="select" class='chosen-select form-control'>
								<option value="0">Select</option>
								<option value="1">CASH</option>
								<option value="2">CHECK</option>
								<option value="3">A/C TRANSFER</option>
								<option value="4">OTHER</option>


								</select>
								</div>
								</div>
								<div class="col-sm-2">
								<div class="form-group">
								<label for="textfield" class="control-label"><strong>PAYMENT DATE</strong></label>
								<input type="text" name="textfield" id="textfield"  class="form-control">
								</div>
								</div>

								<div class="col-sm-2">
								<div class="form-group">
								<label for="textfield" class="control-label"><strong>REMARK</strong></label>
								<input type="text" name="textfield" id="textfield"  class="form-control">
								</div>
								</div>






								<center> 
								<a href="#" class="btn btn-satgreen">- SAVE -</a> &nbsp;&nbsp;
								<a href="#" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
								<a href="#" class="btn btn-teal">- REPORTS -</a></center>

								</div>







								</form>
                                
                                <div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
	<h3>
		Recent Loading Entery
	</h3>
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,select,text,select,daterange,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
<thead>
<tr>
	<th>SNO.</th>
	<th>DATE </th>
	<th>LOADING NO.</th>
	<th>VEHICLE NO. </th>
	<th>WEIGHT(MT)</th>
    <th>BAGS</th>
     <th>RATE </th>
    <th>FROM PLACE</th>
    <th>TO PLACE </th>
    <th>ADVANCE </th>
   
	<th>Options</th>
</tr>
</thead>
<tbody>
<tr>
	<td>1</td>
	<td>03-07-2014</td>
	<td>0005</td>
	<td>CG04MJ490</td>
	<td >30.5</td>
    <td >600</td>
    <td >750</td>
    <td >RAIPUR</td>
    <td >BILASHPUR</td>
    <td >8900</td>
	<td>
		
        <a href="#" class="btn" rel="tooltip" title="Print">
			<i class="fa fa-print"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
			<i class="fa fa-times"></i>
		</a>
	</td>
</tr>

<tr>
	<td>1</td>
	<td>03-07-2014</td>
	<td>0005</td>
	<td>CG04MJ490</td>
	<td >30.5</td>
    <td >600</td>
    <td >750</td>
    <td >RAIPUR</td>
    <td >BILASHPUR</td>
    <td >8900</td>
	<td>
		<a href="#" class="btn" rel="tooltip" title="Print">
			<i class="fa fa-print"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
			<i class="fa fa-times"></i>
		</a>
	</td>
</tr>

<tr>
	<td>1</td>
	<td>03-07-2014</td>
	<td>0005</td>
	<td>CG04MJ490</td>
	<td >30.5</td>
    <td >600</td>
    <td >750</td>
    <td >RAIPUR</td>
    <td >BILASHPUR</td>
    <td >8900</td>
	<td>
		<a href="#" class="btn" rel="tooltip" title="Print">
			<i class="fa fa-print"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
			<i class="fa fa-times"></i>
		</a>
	</td>
</tr>

<tr>
	<td>1</td>
	<td>03-07-2014</td>
	<td>0005</td>
	<td>CG04MJ490</td>
	<td >30.5</td>
    <td >600</td>
    <td >750</td>
    <td >RAIPUR</td>
    <td >BILASHPUR</td>
    <td >8900</td>
	<td>
		<a href="#" class="btn" rel="tooltip" title="Print">
			<i class="fa fa-print"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
			<i class="fa fa-times"></i>
		</a>
	</td>
</tr>

<tr>
	<td>1</td>
	<td>03-07-2014</td>
	<td>0005</td>
	<td>CG04MJ490</td>
	<td >30.5</td>
    <td >600</td>
    <td >750</td>
    <td >RAIPUR</td>
    <td >BILASHPUR</td>
    <td >8900</td>
	<td>
    
    <a href="#" class="btn" rel="tooltip" title="Print">
			<i class="fa fa-print"></i>
		</a>
		
		<a href="#" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
			<i class="fa fa-times"></i>
		</a>
	</td>
</tr>





</tbody>
</table>


</div>
<BR/>
</div>
</div>
									</div>
                                    
                                    
                                    
                                    
                                    
									<div class="tab-pane" id="second22">
										<form action="#" method="get" class='form-vertical'>
									<div class="row">
										
                                        
                                        
                                        
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>VEHICLE NO.</strong></label>
												<input type="text" name="textfield" id="textfield"  class="form-control" placeholder="combo">
											</div>
										</div>
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>MONTH</strong></label>
												<input type="text" name="textfield" id="textfield"  class="form-control"  placeholder="combo">
											</div>
										</div>
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>EMI PAY DATE</strong></label>
												<input type="text" name="textfield" id="textfield"  class="form-control">
											</div>
										</div>
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>PAYMETN MOOD</strong></label>
												<input type="text" name="textfield" id="textfield"  class="form-control"  placeholder="combo">
											</div>
										</div>
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>REFRENCE NO</strong></label>
												<input type="text" name="textfield" id="textfield"  class="form-control"  placeholder="TEXT">
											</div>
										</div>
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>REMARK</strong></label>
												<input type="text" name="textfield" id="textfield"  class="form-control">
											</div>
										</div>
                                        
                                        
                                        
                                        
                                        
                                        
                                     <center> 
                                    <a href="#" class="btn btn-satgreen">- SAVE -</a> &nbsp;&nbsp;
                                       <a href="#" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                                       <a href="#" class="btn btn-teal">- REPORTS -</a></center>
                                        
									</div>
									
									
									
									
									
									
									
								</form>
                                
                                <div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
	<h3>
		Recent Reciving Entery
	</h3>
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,select,text,select,daterange,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
<thead>
<tr>
	<th>SNO.</th>
	<th>DATE </th>
	<th>LOADING NO.</th>
	<th>VEHICLE NO. </th>
	<th>WEIGHT(MT)</th>
    <th>BAGS</th>
     <th>RATE </th>
    <th>FROM PLACE</th>
    <th>TO PLACE </th>
    <th>ADVANCE </th>
   
	<th>Options</th>
</tr>
</thead>
<tbody>
<tr>
	<td>1</td>
	<td>03-07-2014</td>
	<td>0005</td>
	<td>CG04MJ490</td>
	<td >30.5</td>
    <td >600</td>
    <td >750</td>
    <td >RAIPUR</td>
    <td >BILASHPUR</td>
    <td >8900</td>
	<td>
		
        <a href="#" class="btn" rel="tooltip" title="Print">
			<i class="fa fa-print"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
			<i class="fa fa-times"></i>
		</a>
	</td>
</tr>

<tr>
	<td>1</td>
	<td>03-07-2014</td>
	<td>0005</td>
	<td>CG04MJ490</td>
	<td >30.5</td>
    <td >600</td>
    <td >750</td>
    <td >RAIPUR</td>
    <td >BILASHPUR</td>
    <td >8900</td>
	<td>
		<a href="#" class="btn" rel="tooltip" title="Print">
			<i class="fa fa-print"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
			<i class="fa fa-times"></i>
		</a>
	</td>
</tr>

<tr>
	<td>1</td>
	<td>03-07-2014</td>
	<td>0005</td>
	<td>CG04MJ490</td>
	<td >30.5</td>
    <td >600</td>
    <td >750</td>
    <td >RAIPUR</td>
    <td >BILASHPUR</td>
    <td >8900</td>
	<td>
		<a href="#" class="btn" rel="tooltip" title="Print">
			<i class="fa fa-print"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
			<i class="fa fa-times"></i>
		</a>
	</td>
</tr>

<tr>
	<td>1</td>
	<td>03-07-2014</td>
	<td>0005</td>
	<td>CG04MJ490</td>
	<td >30.5</td>
    <td >600</td>
    <td >750</td>
    <td >RAIPUR</td>
    <td >BILASHPUR</td>
    <td >8900</td>
	<td>
		<a href="#" class="btn" rel="tooltip" title="Print">
			<i class="fa fa-print"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
			<i class="fa fa-times"></i>
		</a>
	</td>
</tr>

<tr>
	<td>1</td>
	<td>03-07-2014</td>
	<td>0005</td>
	<td>CG04MJ490</td>
	<td >30.5</td>
    <td >600</td>
    <td >750</td>
    <td >RAIPUR</td>
    <td >BILASHPUR</td>
    <td >8900</td>
	<td>
    
    <a href="#" class="btn" rel="tooltip" title="Print">
			<i class="fa fa-print"></i>
		</a>
		
		<a href="#" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
			<i class="fa fa-times"></i>
		</a>
	</td>
</tr>





</tbody>
</table>


</div>
<BR/>
</div>
</div>
									</div>
									<div class="tab-pane" id="thirds3322">
										<form action="#" method="get" class='form-vertical'>
									<div class="row">
										
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>VEHICLE NO</strong></label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="CG04MJ6190" class="form-control">
											</div>
										</div>
                                        
                                        
										<div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>Driver Name </strong> </label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="combo box" class="form-control">
											</div>
										</div>
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>SERVICE DATE<span class="err" style="color:#F00;">*</span> </strong> </label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="DD/MM/YYYY" class="form-control">
											</div>
										</div>
                                        
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>SERVICE No. </strong> </label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="10-10-2020" class="form-control">
											</div>
										</div>
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>Meter Reading  </strong> </label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="20015" class="form-control">
											</div>
										</div>
                                        
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>NARATION  </strong> </label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="" class="form-control">
											</div>
										</div>
                                        
                                   <table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,select,text,select,daterange,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
<thead>
<tr>
	
	<th>SERVICE TYPE </th>
	<th>SERVICE DATE</th>
	<th>Expiry Date </th>
    <th>AMT</th>
    <th>REMARK</th>
 
    
	<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
	
	<td>combo HEAD </td>
	<td>10-20-2020</td>
	<td>10-20-2021</td>
    <td>COMBO scrap/reprbl</td>
    <td>COMBO old/new</td>
   
  
	<td>
		
        <a href="#" class="btn btn-satgreen">- ADD -</a> 
	</td>
</tr>


</tbody>
</table>     
                                        
                                        

                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                     <center> 
                                    <a href="#" class="btn btn-satgreen">- SAVE -</a> &nbsp;&nbsp;
                                       <a href="#" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                                       <a href="#" class="btn btn-teal">- REPORTS -</a></center>
                                        
									</div>
									
									
									
									
									
									
									
								</form>
									</div>
                                    
                                    <div class="tab-pane" id="thirds3344">
										<form action="#" method="get" class='form-vertical'>
									<div class="row">
										
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>VEHICLE NO</strong></label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="CG04MJ6190" class="form-control">
											</div>
										</div>
                                        
                                        
										<div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>Driver Name </strong> </label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="combo box" class="form-control">
											</div>
										</div>
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>EXPENSES DATE<span class="err" style="color:#F00;">*</span> </strong> </label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="DD/MM/YYYY" class="form-control">
											</div>
										</div>
                                        
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>EXPANCE HEAD</strong> </label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="combo from head master" class="form-control">
											</div>
										</div>
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>AMT </strong> </label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="20015" class="form-control">
											</div>
										</div>
                                        
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>NARATION  </strong> </label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="" class="form-control">
											</div>
										</div>
                                        
                                        
                                        
                                     <center> 
                                    <a href="#" class="btn btn-satgreen">- SAVE -</a> &nbsp;&nbsp;
                                       <a href="#" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                                       <a href="#" class="btn btn-teal">- REPORTS -</a></center>
                                        
									</div>
									
									
									
									
									
									
									
								</form>
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
									document renewal reminder
								</h3>
								
							</div>
                            
							<div class="box-content" style="height:350px; overflow:scroll">
								<div class="statistic-big">
									<div class="top">
										<div class="left">
											<select name="category" class='chosen-select' data-nosearch="true" style="width:150px;">
												<option value="1">State Permit Alerts</option>
												<option value="2">Insurance Alerts</option>
												<option value="3">Fitness Alerts</option>
												<option value="4">National Permit Alerts</option>
                                                <option value="4">Road Tax Alerts</option>
                                                <option value="4">Pollution Alerts</option>
                                                <option value="4">Driver Liscence Expire</option>
                                              
											</select>
										</div>
										
									</div>
									<table class="table table-user table-nohead" style="font-size:16px;">
									<tbody>
										 										<tr>
											<td>
<span style="color:#F00; font-weight:bold">CG04JD0775</span> expiring on <span style="color:#009; font-weight:bold">30-10-2020</span>
&nbsp;&nbsp; <a href="truck_permanent_document.php?t=534" class="btn btn-warning" style="font-weight:bold">Renew</a>
											</td>
										</tr> 											
                                    										<tr>
											<td>
<span style="color:#F00; font-weight:bold">CG22AC7429</span> expiring on <span style="color:#009; font-weight:bold">31-10-2020</span>
&nbsp;&nbsp; <a href="truck_permanent_document.php?t=506" class="btn btn-warning" style="font-weight:bold">Renew</a>
											</td>
										</tr> 											
                                    										<tr>
											<td>
<span style="color:#F00; font-weight:bold">CG22AB4035</span> expiring on <span style="color:#009; font-weight:bold">10-10-2020</span>
&nbsp;&nbsp; <a href="truck_permanent_document.php?t=519" class="btn btn-warning" style="font-weight:bold">Renew</a>
											</td>
										</tr> 											
                                    										<tr>
											<td>
<span style="color:#F00; font-weight:bold">CG22AB4565</span> expiring on <span style="color:#009; font-weight:bold">16-10-2020</span>
&nbsp;&nbsp; <a href="truck_permanent_document.php?t=523" class="btn btn-warning" style="font-weight:bold">Renew</a>
											</td>
										</tr> 											
                                    										<tr>
											<td>
<span style="color:#F00; font-weight:bold">CG22AC7432</span> expiring on <span style="color:#009; font-weight:bold">31-10-2020</span>
&nbsp;&nbsp; <a href="truck_permanent_document.php?t=522" class="btn btn-warning" style="font-weight:bold">Renew</a>
											</td>
										</tr> 											
                                    										<tr>
											<td>
<span style="color:#F00; font-weight:bold">CG22AB4559</span> expiring on <span style="color:#009; font-weight:bold">16-10-2020</span>
&nbsp;&nbsp; <a href="truck_permanent_document.php?t=514" class="btn btn-warning" style="font-weight:bold">Renew</a>
											</td>
										</tr> 											
                                    										<tr>
											<td>
<span style="color:#F00; font-weight:bold">CG22AB4560</span> expiring on <span style="color:#009; font-weight:bold">16-10-2020</span>
&nbsp;&nbsp; <a href="truck_permanent_document.php?t=512" class="btn btn-warning" style="font-weight:bold">Renew</a>
											</td>
										</tr> 											
                                    										<tr>
											<td>
<span style="color:#F00; font-weight:bold">CG22AC7430</span> expiring on <span style="color:#009; font-weight:bold">31-10-2020</span>
&nbsp;&nbsp; <a href="truck_permanent_document.php?t=524" class="btn btn-warning" style="font-weight:bold">Renew</a>
											</td>
										</tr> 											
                                    										<tr>
											<td>
<span style="color:#F00; font-weight:bold">CG04JD0774</span> expiring on <span style="color:#009; font-weight:bold">30-10-2020</span>
&nbsp;&nbsp; <a href="truck_permanent_document.php?t=560" class="btn btn-warning" style="font-weight:bold">Renew</a>
											</td>
										</tr> 											
                                    										<tr>
											<td>
<span style="color:#F00; font-weight:bold">CG22AC7347</span> expiring on <span style="color:#009; font-weight:bold">31-10-2020</span>
&nbsp;&nbsp; <a href="truck_permanent_document.php?t=521" class="btn btn-warning" style="font-weight:bold">Renew</a>
											</td>
										</tr> 											
                                    										<tr>
											<td>
<span style="color:#F00; font-weight:bold">CG22AC7428</span> expiring on <span style="color:#009; font-weight:bold">31-10-2020</span>
&nbsp;&nbsp; <a href="truck_permanent_document.php?t=520" class="btn btn-warning" style="font-weight:bold">Renew</a>
											</td>
										</tr> 											
                                    										<tr>
											<td>
<span style="color:#F00; font-weight:bold">CG22AB4034</span> expiring on <span style="color:#009; font-weight:bold">10-10-2020</span>
&nbsp;&nbsp; <a href="truck_permanent_document.php?t=526" class="btn btn-warning" style="font-weight:bold">Renew</a>
											</td>
										</tr> 											
                                    										<tr>
											<td>
<span style="color:#F00; font-weight:bold">CG04DT7185</span> expiring on <span style="color:#009; font-weight:bold">09-11-2020</span>
&nbsp;&nbsp; <a href="truck_permanent_document.php?t=564" class="btn btn-warning" style="font-weight:bold">Renew</a>
											</td>
										</tr> 											
                                    										<tr>
											<td>
<span style="color:#F00; font-weight:bold">CG04JD0778</span> expiring on <span style="color:#009; font-weight:bold">30-10-2020</span>
&nbsp;&nbsp; <a href="truck_permanent_document.php?t=568" class="btn btn-warning" style="font-weight:bold">Renew</a>
											</td>
										</tr> 											
                                    										<tr>
											<td>
<span style="color:#F00; font-weight:bold">CG04JD0776</span> expiring on <span style="color:#009; font-weight:bold">30-10-2020</span>
&nbsp;&nbsp; <a href="truck_permanent_document.php?t=567" class="btn btn-warning" style="font-weight:bold">Renew</a>
											</td>
										</tr> 											
                                    										<tr>
											<td>
<span style="color:#F00; font-weight:bold">CG04JD0779</span> expiring on <span style="color:#009; font-weight:bold">30-10-2020</span>
&nbsp;&nbsp; <a href="truck_permanent_document.php?t=585" class="btn btn-warning" style="font-weight:bold">Renew</a>
											</td>
										</tr> 											
                                       
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
		{{-- </div> --}}
	</div>
