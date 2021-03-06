
@include('admin.layouts.head')
@include('admin.layouts.header')

<div class="container-fluid" id="content">
@include('admin.layouts.leftheader')
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
									<i class="fa fa-bars"></i>Maintenance</h3>
							</div>
							<div class="box-content nopadding">
								<ul class="tabs tabs-inline tabs-top">
									<li class='active'>
										<a href="#first11" data-toggle='tab' style="font-weight:bold">
											<i class="fa fa-inbox"></i>Driver Mapping</a>
									</li>
									<li>
										<a href="#second22" data-toggle='tab' style="font-weight:bold">
											<i class="fa fa-share"></i>Item Issue</a>
									</li>
									<li>
										<a href="#thirds3322" data-toggle='tab' style="font-weight:bold">
											<i class="fa fa-book"></i>Truck Service</a>
									</li>
									<li>
										<a href="#thirds3344" data-toggle='tab'style="font-weight:bold">
											<i class="fa fa-money"></i>Truck Other Expenses</a>
									</li>
								</ul>
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="first11">
                                    
                                    <form action="#" method="get" class='form-vertical'>
									<div class="row">
										
                                        
                                        
                                        
                                        
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
										
										
                                        
                                        
                                        
                                        
                                        
                                        <div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label"><strong>DRIVER  <img src="add.png" id="shortcut_truck"><a href="#" id="add_new" data-form="short_truck" tabindex="49"></a><span class="err" style="color:#F00;">*</span></strong></label>
												<select name="select" id="select" class='chosen-select form-control'>
                                                <option value="0">Select</option>
												<option value="1">Mukesh/8871181890</option>
												<option value="2">Durgesh/6268105118</option>
												<option value="3">Bhupesh/6268105112</option>
												<option value="4">Lomesh/8871181890</option>
												
												
											</select>
											</div>
										</div>
                                        
                                        <div class="col-sm-4">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>HELPER <span class="err" style="color:#F00;">*</span> 
</strong><img src="add.png" id="shortcut_truck"><a href="#" id="add_new" data-form="short_truck" tabindex="49"></a></label>
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
<label for="textfield" class="control-label"><strong>FROM DATE</strong></label>
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
<label for="textfield" class="control-label"><strong>ISSUE DATE<span class="err" style="color:#F00;">*</span> </strong> </label>
												<input type="text" name="textfield" id="textfield" 
                                                placeholder="DD/MM/YYYY" class="form-control">
											</div>
										</div>
                                        
                                        
                                        
                                        <div class="col-sm-2">
											<div class="form-group">
<label for="textfield" class="control-label"><strong>Issue No. </strong> </label>
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
	
	<th>ITEM </th>
	<th>UOM</th>
	<th>Serial/HSN. </th>
    <th>Exchange Receipt</th>
    <th>Item Type</th>
    <th>QTY </th>
    <th>RATE </th>
    <th>TOTEL AMT </th>
	
    
	<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
	
	<td>combo</td>
	<td>PCS</td>
	<td>TEXT</td>
    <td>COMBO scrap/reprbl</td>
    <td>COMBO old/new</td>
    <td>TEXT</td>
    <td>TEXT</td>
	<td>350000</td>
  
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
                    
                    
                    
                    
					
                    
					@include('admin.document_footer');
					
				</div>
				
				
				
				
			</div>
		</div>

</div>


