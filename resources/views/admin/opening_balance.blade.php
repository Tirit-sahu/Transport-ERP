
@include('admin.layouts.head')
@include('admin.layouts.header')
<?php 
    $vehicle = '';
    $driver = ''; 
    $head = '';
    $actionURI = '';
    $button = '';
    if (isset($truck_other_expenses)) {
        $vehicle = $truck_other_expenses->vehicle;
        $driver = $truck_other_expenses->driver;
        $head = $truck_other_expenses->HEAD;
        $button = '- UPDATE -';
        $actionURI = url('TruckOtherExpenseUpdate/'.$truck_other_expenses->id);  
    }else{
        $button = '- SAVE -';
        $actionURI = url('TruckOtherExpenseStore');
    }
?>
<div class="container-fluid" id="content">
{{-- @include('admin.layouts.leftheader') --}}
		{{-- <div id="main"> --}}
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h2>Tamanna RoadCarrier</h2>
					</div>
					<div class="pull-right">
						
						@include('admin.dashboard_header');
					</div>
				</div>
				
                
                
                <div class="row">
        
                    <div class="col-sm-12">
                            <div class="box box-bordered box-color satblue">
                                <div class="box-title">
                                    <h3>
                                        <i class="fa fa-bars"></i>Account Setting</h3>
                                </div>
                                <div class="box-content nopadding">
                                    
                                    <div class="tab-content padding tab-content-inline tab-content-bottom">
                                        <div class="tab-pane active" id="first11">
                                        
                                           
                                                <form action="{{ url('/openingBal/store') }}" method="POST" class='form-horizontal'>
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="opening_bal" class="control-label col-sm-2">Opening Balance</label>
                                                        <div class="col-sm-10">
                                                        <input type="text" name="opening_bal" value="{{ old('opening_bal') }}" id="opening_bal" class="form-control">
                                                            <span class="text-danger">{{ $errors->first('opening_bal') }}</span>
                                                            {{-- <span class="help-block">This is just a supporting text</span> --}}
                                                        </div>
                                                    </div>                                  
                                                   
                                                    <div class="form-actions pull-right">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        {{-- <button type="button" class="btn">Cancel</button> --}}
                                                    </div>
                                                </form>
                                            
                                    <div class="col-sm-12">
                                        <div class="box box-color box-bordered">
                                        <div class="box-title">
                                            <h3>
                                                View Data
                                            </h3>
                                        </div>
                                        <div class="box-content nopadding">
            
                                            <div class="box-header">
                                                @if (Session::has('success'))
                                                      <div class="alert alert-success alert-dismissible fade in text-center">
                                                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                      <strong>Successfully </strong> {{ Session::get('success') }}
                                                      </div>
                                                @endif
                                    
                                                @if (Session::has('error'))
                                                  <div class="alert alert-error alert-dismissible fade in text-center">
                                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                  <strong>Warning </strong> {{ Session::get('error') }}
                                                  </div>
                                                @endif
                                                </div>
                                        
                                        <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>SNO.</th>
                                            <th>Opening Balance</th>
                                            <th>Date Time</th>
                                            <th>Options</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; @endphp
                                        @foreach($account_settings as $row)
                                        <tr>
                                            <td>{{ ++$i }}</td>                               
                                            <td >{{ $row->opening_bal }}</td>
                                            <td >{{ $row->created_at }}</td>
                                            <td>
                                                
                                               
                                                {{-- <a href="{{ url('/msession/edit/'.$row->id) }}" class="btn" rel="tooltip" title="Edit">
                                                    <i class="fa fa-edit"></i> --}}
                                                </a>
                                                <a onclick="return confirm('Are you sure ?')" href="{{ url('/openingBal/destroy/'.$row->id) }}" class="btn" rel="tooltip" title="Delete">
                                                    <i class="fa fa-times"></i>
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
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    
                    
                    
					@include('admin.document_footer');
					
				</div>
				
				
				
				
			</div>
		{{-- </div> --}}

</div>












