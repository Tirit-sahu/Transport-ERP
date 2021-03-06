
<body>
	<div id="navigation">
		<div class="container-fluid">
			<a href="#" id="brand">Tamanna RoadCarrier</a>
			<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation">
				<i class="fa fa-bars"></i>
			</a>
			<ul class='main-nav'>
				<li>
					<a href="{{ url('admin/index')}}">
						<span>Dashboard</span>
					</a>
				</li>

				{{-- <li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Report</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">                   
                        <li class="dropdown-submenu"><a href="#">Loading Report</a>
                    	    <ul class="dropdown-menu">            
                             <li><a href="{{route('load.index')}}">Loading Process Report</a></li>
                             <li><a href="{{route('receive.create')}}">Loading Receiving Report</a></li>
                             <li><a href="{{ url('/paymentReport') }}">Loading Payment Report</a></li>                           
                       		</ul>
                    	</li>
						<li><a href="{{ route('stock.report') }}">Stock Report</a></li>          
					</ul>
				</li> --}}

				{{-- <li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Maintenance</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">                    
						
                        <li  class="dropdown-submenu"><a href="#">Documents</a>
                    	    <ul class="dropdown-menu">            
                             <li><a href="{{route('truckdocs.create')}}">Truck Documents</a></li>                           
					   </ul>					   
						</li>  
						
						<li><a href="{{ route('driverMapping') }}">Driver Mapping</a></li>
						<li>
							<a href="{{ url('/truckService') }}">Truck Service</a>
						</li>
						<li>
							<a href="{{ url('/TruckOtherExpense') }}">Truck Other Expenses</a>
						</li>
                         
					</ul>
				</li> --}}


				   <li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Masters</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
                    
           
                        <li  class="dropdown-submenu"><a href="#">Company</a>
                    	    <ul class="dropdown-menu">
            
                            <li><a href="{{route('session.create')}}">Session Master</a></li>
                           
                            
                            <li><a href="{{route('company.create')}}">Companies Master</a> </li>
                           
                            <li><a href="{{route('consignor.create')}}">Master Consignor</a> </li>
                            
                            <li><a href="{{route('consignee.create')}}">Master Consignee</a> </li>
                           
                            <li><a href="{{route('bank.create')}}">Master Bank</a> </li>
                            
                                                       
                           
                      		<li><a href="{{route('emp.create')}}">Master Employee</a> </li>
                            
                           
                       </ul>
                    </li>
                  
                        <li  class="dropdown-submenu"><a href="#">Place</a>
                    	    <ul class="dropdown-menu">                      
                            <li><a href="{{route('state.create')}}">State Master</a> </li>
                            <li><a href="{{route('place.create')}}">Place Master</a> </li>                         
                                                      
                             </ul>
                        </li>
                        
                              
                      
                        <li  class="dropdown-submenu"><a href="#">Good</a>
                    	    <ul class="dropdown-menu">           
									<li><a href="{{route('unit.create')}}">Unit</a>  </li>            
                                    <li><a href="{{route('cate.create')}}">Item Category</a>  </li>                           
                                    <li><a href="{{route('item.create')}}">Master Item</a>  </li>                            
                             </ul>
                        </li>
                     
	                        
                        <li  class="dropdown-submenu"><a href="#">Truck</a>
                    	    <ul class="dropdown-menu">                       
                            <li><a href="{{route('type.create')}}">Master Truck Type</a></li>
                            <li><a href="{{route('owner.create')}}">Truck Owner</a></li>
                            <li><a href="{{route('truck.create')}}">Master Truck</a>  </li>          
                            <li><a href="{{route('driver.create')}}">Driver/Conductor Master</a>  </li>                           
                             </ul>
                        </li>
           
		
                        <li  class="dropdown-submenu"><a href="#">Inventory</a>
                    	    <ul class="dropdown-menu">                                     
                                    <li><a href="{{route('petrol.create')}}">Petrol Pump Master</a></li>                                    
                                    <li><a href="#" style="display:none;">Group Master</a></li>                                    
									<li><a href="{{ url('/headMaster') }}">HEAD Master</a></li>
									<li><a href="{{ url('/supplierDatatable') }}">Supplier Master</a></li>  
								    <li><a href="{{ url('/godownDatatable') }}">Godown Master</a></li>  
                             </ul>
						</li>
						
						
                         
					</ul>
				</li>

				
				@if(Auth::user()->usertype=='Admin')
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span> Add User</span>
						<span class="caret"></span>
					</a> 
                    <ul class="dropdown-menu"> 
					
                    		<li><a href="{{route('regi.create')}}"> Add User </a></li>  				     
                           
					</ul>
                    </li>               
                @endif

                    <li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span> {{ Auth::user()->name }} </span>
						<span class="caret"></span>
					</a> 
                    <ul class="dropdown-menu"> 
						<li>

                            	 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                            </li>		
					</ul>
                    </li>
					
					<li>
						<a href="{{ url('/dbBackup') }}">
							<span>DB Backup</span>
						</a>
					</li>

					@if(Auth::user()->usertype=='Admin')
					<li>
						<a href="{{ url('/menu-password-setting') }}">
							<span>Menu's Password Setting</span>
						</a>
					</li>
					@endif
                   
                    </li>
                </ul>
            	</li>
				</ul>

				
				{{-- <div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown">John Doe
						<img src="img/demo/user-avatar.jpg" alt="">
					</a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="more-userprofile.html">Edit profile</a>
						</li>
						<li>
							<a href="#">Account settings</a>
						</li>
						<li>
							<a href="more-login.html">Sign out</a>
						</li>
					</ul>
				</div>  --}}
			</div>
		</div>
	</div>
