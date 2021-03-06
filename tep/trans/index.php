<!doctype html>
<html>


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<?php include("inc/top-files.php"); ?>
</head>

<body>
<?php include("inc/header.php"); ?>
	<div class="container-fluid" id="content">
	<?php include("inc/left-bar.php"); ?>	
		<div id="main">
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
								<ul class="tabs tabs-inline tabs-top">
									<li class='active'>
										<a href="#first11" data-toggle='tab' style="font-weight:bold">
											<i class="fa fa-inbox"></i>Loading Entery</a>
									</li>
									<li>
										<a href="#second22" data-toggle='tab' style="font-weight:bold">
											<i class="fa fa-share"></i>Receiving</a>
									</li>
									<li>
										<a href="#thirds3322" data-toggle='tab' style="font-weight:bold">
											<i class="fa fa-book"></i>Payment</a>
									</li>
									<li>
										<a href="#thirds33" data-toggle='tab'style="font-weight:bold">
											<i class="fa fa-money"></i>Billing</a>
									</li>
								</ul>
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
                                    <form action="#" method="get" class='form-vertical'>
									<div class="row">
										<div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>LOADING DATE <span class="err" style="color:#F00;">*</span> </strong></label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="DD/MM/YYYY" class="form-control">
											</div>
										</div>
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>LOADING NO.</strong></label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="0005230" class="form-control">
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
<label for="textfield" class="control-label"><strong>WEIGHT(MT)</strong></label>
												<input type="text" name="textfield" id="textfield"class="form-control">
											</div>
										</div>
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>BAGS</strong></label>
												<input type="text" name="textfield" id="textfield" class="form-control">
											</div>
										</div>
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>FRIGHT RATE</strong>  </label>
												<input type="text" name="textfield" id="textfield" class="form-control">
											</div>
										</div>
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>COMMISION AMT</strong></label>
												<input type="text" name="textfield" id="textfield" class="form-control">
											</div>
										</div>
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>FROM PLACE  <img src="add.png" id="shortcut_truck"><a href="#" id="add_new" data-form="short_truck" tabindex="49"></a><span class="err" style="color:#F00;">*</span></strong></label>
												<select name="select" id="select" class='chosen-select form-control'>
                                                <option value="0">Select</option>
												<option value="1">Raipur</option>
												<option value="2">Durge</option>
												<option value="3">Baloda Bazar</option>
												<option value="4">Bilashpur</option>
												
												
											</select>
											</div>
										</div>
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>TO PLACE <span class="err" style="color:#F00;">*</span> 
</strong><img src="add.png" id="shortcut_truck"><a href="#" id="add_new" data-form="short_truck" tabindex="49"></a></label>
												<select name="select" id="select" class='chosen-select form-control'>
                                                <option value="0">Select</option>
												<option value="1">Patan</option>
												<option value="2">Kurud</option>
												<option value="3">Dhamtari</option>
												<option value="4">Bilashpur</option>
												
												
											</select>
											</div>
										</div>
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>DIESEL ADVANCE</strong></label>
												<input type="text" name="textfield" id="textfield"  class="form-control">
											</div>
										</div>
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>PETROL PUMP</strong><img src="add.png" id="shortcut_truck"><a href="#" id="add_new" data-form="short_truck" tabindex="49"></a></label>
												<select name="select" id="select" class='chosen-select form-control'>
                                                <option value="0">Select</option>
												<option value="1">CITY FULES</option>
												<option value="2">AGRAWAL FULES</option>
												<option value="3">MEGHA FUELS</option>
												
												
												
											</select>
											</div>
										</div>
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>CASH ADVANCE</strong></label>
												<input type="text" name="textfield" id="textfield" class="form-control">
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
<label for="textfield" class="control-label"><strong>LOADING NO.</strong></label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="0005230" class="form-control">
											</div>
										</div>
                                        
                                        
										<div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>VEHICLE NO.  </strong> </label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="CG22MH480" class="form-control">
											</div>
										</div>
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>RECIVING DATE<span class="err" style="color:#F00;">*</span> </strong> </label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="DD/MM/YYYY" class="form-control">
											</div>
										</div>
                                        
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>Shortage 30 Rs/KG  </strong> </label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="" class="form-control">
											</div>
										</div>
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>RECEIVED MT  </strong> </label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="250" class="form-control">
											</div>
										</div>
                                        
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>NARATION  </strong> </label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="" class="form-control">
											</div>
										</div>
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>LOADING DATE  </strong> </label>
												<br/><span style="color:#00C; font-weight:bold">20-10-2020</span>
											</div>
										</div>
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>WEIGHT(MT)  </strong> </label>
												<br/><span style="color:#00C; font-weight:bold">25MT</span>
											</div>
										</div>
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>BAGS  </strong> </label>
												<br/><span style="color:#00C; font-weight:bold">310</span>
											</div>
										</div>
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>RATE  </strong> </label>
												<br/><span style="color:#00C; font-weight:bold">780</span>
											</div>
										</div>
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>DIESEL ADVANCE  </strong> </label>
												<br/><span style="color:#00C; font-weight:bold">1000</span>
											</div>
										</div>
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>CASH ADVANCE  </strong> </label>
												<br/><span style="color:#00C; font-weight:bold">1200</span>
											</div>
										</div>
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>COMMISION   </strong> </label>
												<br/><span style="color:#00C; font-weight:bold">150</span>
											</div>
										</div>
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>FROM PLACE  </strong> </label>
												<br/><span style="color:#00C; font-weight:bold">RAIPUR</span>
											</div>
										</div>
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>TO PLACE  </strong> </label>
												<br/><span style="color:#00C; font-weight:bold">BALODA BAZAR</span>
											</div>
										</div>
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>TRUCK OWNER  </strong> </label>
												<br/><span style="color:#00C; font-weight:bold">GHANSHYAM SAHU</span>
											</div>
										</div>
                                        
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>Gross Amt </strong> </label>
												<br/><span style="color:#F00; font-weight:bold">25350</span>
											</div>
										</div>
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>Net Amt  </strong> </label>
												<br/><span style="color:#F00; font-weight:bold">45500</span>
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
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ipsum ab odio accusamus similique dicta ipsam dolor magni nemo? Laudantium numquam consectetur maiores quaerat totam cupiditate error repellendus eos quibusdam dolore ipsum sequi illo blanditiis
										voluptatibus veniam dicta alias tempore consequuntur reprehenderit dignissimos iste sit perferendis possimus quisquam id voluptatum explicabo ut ad accusamus neque. Commodi ipsam quia aperiam nisi id unde sapiente magnam reiciendis voluptate
										placeat in optio consequuntur culpa magni repudiandae veniam aut. Magni sed asperiores omnis error nemo cum minima illum rerum assumenda ipsa excepturi odit laborum doloremque iure temporibus consectetur in culpa libero iusto repellendus. Culpa
										perspiciatis nesciunt explicabo officiis beatae ipsam qui odio architecto asperiores ad amet aspernatur veniam ex voluptates cumque expedita reiciendis nobis incidunt harum praesentium a totam ut cum corrupti quia rem provident delectus fuga
										deserunt itaque aut fugiat veritatis necessitatibus inventore nisi enim aliquid quibusdam! Nihil ratione laboriosam accusamus. Iure sapiente iste odit voluptas sit reiciendis. Cum voluptatibus quia cupiditate cumque eveniet mollitia unde adipisci
										vel itaque ipsa est iste ducimus sed consequuntur ratione eaque voluptates et odit quod nemo quis aut repudiandae ipsum nostrum deserunt! Excepturi cum eos ut labore debitis facilis ipsum! Fugit eos dicta amet neque qui deserunt!
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
		</div>
	</div>
	
</body>


</html>
