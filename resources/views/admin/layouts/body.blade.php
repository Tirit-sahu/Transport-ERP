@include('admin.layouts.head')
@include('admin.layouts.header')
<body>

	
		<div class="container-fluid" id="content">
	{{-- @include('admin.layouts.leftheader') --}}
		{{-- <div id="main"> --}}
			<div class="container-fluid">
	
			
				    <div class="row">
                
             			@yield('content')
             		
					</div>
					
				</div>
					
		{{-- </div> --}}
					
				</div>
				
				
				
		
	
				
				
</body>


</html>
