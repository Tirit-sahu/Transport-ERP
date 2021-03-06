	
		<div id="left">
			<form action="http://www.eakroko.de/flat/search-results.html" method="GET" class='search-form'>
				<div class="search-pane">
					<input type="text" name="search" placeholder="Search here...">
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</form>

			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Truck Loading</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{route('admin.index')}}">Loading Process</a>
					</li>
					<li>
						<a href="{{ url('/rackHandling') }}">Rack Handling</a>
					</li>
					
				</ul>
			</div>

			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Maintenance</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{ url('/headMaster') }}">Head Master</a>
					</li>
					<li>
						<a href="{{ route('driver.create') }}">Driver Master</a>
					</li>
					<li>
						<a href="{{ route('driverMapping') }}">Driver Mapping</a>
					</li>
					
					<li>
						<a href="{{ url('/truckService') }}">Truck Service</a>
					</li>
					<li>
						<a href="{{ url('/TruckOtherExpense') }}">Truck Other Expenses</a>
					</li>
					
				</ul>
			</div>

			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Inventory</span>
					</a>
				</div>
				<ul class="subnav-menu">

					<li>
						<a href="{{ url('/tyre-opening-record') }}">Tyre Opening Record</a>
					</li>

					<li>
						<a href="{{ url('/battery-opening-balance-create') }}">Battery Opening Record</a>
					</li>


					<li>
						<a href="{{ url('/purchase-entry-create') }}">Purchase Entry</a>
					</li>
					<li>
						<a href="{{ url('/itemIssue') }}">Item Issue</a>
					</li>
					<li>
						<a href="{{ url('/tyre-mapping-create') }}">Tyre Mapping</a>
					</li>									
				</ul>

			</div>

			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Accounts</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{ url('/openingBal') }}">Account Setting</a>
					</li>
					<li>
						<a href="{{ url('/generateSalary') }}">Generate Salary</a>
					</li>	
					<li>
						<a href="{{ url('/truckIncExp') }}">Truck Income Expenses Report</a>
					</li>				
					{{-- <li>
						<a href="#">PAY EMI</a>
					</li> --}}					
				</ul>

			</div>
			
			{{-- <div class="subnav">
				<div class="subnav-title">
					<a href="{{ url('/dbBackup') }}" style="text-decoration: none;">
						<span style="color: rgb(80, 31, 31);"><i class="fa fa-download" aria-hidden="true"></i> DB Backup </span>
					</a>
				</div>				
			</div> --}}
			
		</div>