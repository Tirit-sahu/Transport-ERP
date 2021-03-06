
@include('admin.layouts.head')
@include('admin.layouts.header')
<?php 
    $actionURI = '';
    $button = '';
    $headType = '';
    if (isset($head_master)) {
        $button = 'Update';
        $actionURI = url('HeadUpdate/'.$head_master->id);  
        $headType = $head_master->headType;
    }else{
        $button = 'Submit';
        $actionURI = url('HeadStore');
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
									<i class="fa fa-bars"></i>Head Entry</h3>
							</div>
							<div class="box-content nopadding">
								{{-- @include('admin.tab_maintenance') --}}
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									
                                    
                            <div>
                                <form action="{{  $actionURI }}" method="POST" class='form-horizontal'>
                                    @csrf
                                    
                                    <div class="form-group">
                                        <label for="textfield" class="control-label col-sm-2">Head Name</label>
                                        <div class="col-sm-10">
                                        <input type="text" name="headName" value="{{ old('headName', isset($head_master)?$head_master->headName:'') }}" id="headName" class="form-control">
                                            <span class="text-danger">{{ $errors->first('headName') }}</span>
                                        </div>
                                    </div> 

                                    <div class="form-group">
                                        <label for="textfield" class="control-label col-sm-2">Head Type</label>
                                        <div class="col-sm-10">
                                            <?php 
                                                $headtype = ['Credit', 'Debit'];                                                
                                            ?>
                                        <select name="headType" id="headType"  class='chosen-select form-control'>
                                            <option value=""></option>
                                            @foreach($headtype as $HT)
                                            <option <?php if($headType==$HT){ echo 'selected'; } ?> value="{{ $HT }}">{{ $HT }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">{{ $errors->first('headType') }}</span>
                                    </div> 
                                    </div>

                                    
                                   
                                    <div class="form-actions pull-right">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> {{ $button }}</button>
                                        @if(isset($head_master))
                                        <a href="{{ url('/headMaster') }}" class="btn btn-default">Cancel</a>
                                        @endif
                                    </div>
                                </form>

                                
                                <div class="col-sm-12">
                                    <div class="box box-color box-bordered">
                                    <div class="box-title">
                                        <h3>
                                            <i class="fa fa-list" aria-hidden="true"></i> SHOW HEAD DATA
                                        </h3>
                                    </div>
                                    <div class="box-content nopadding">
        
                                        <x-alert />
        
                                    <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>SNO.</th>
                                        <th>Head Name </th>
                                        <th>Head Type</th>
                                              
                                        <th>Options</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $i=0; @endphp
                                    @foreach($head_masters as $row)
                                    <tr>
                                        <td>{{ ++$i }}</td>                               
                                        <td >{{ $row->headName }}</td>
                                        <td >{{ $row->headType }}</td>                                
                                        <td>
                                            
                                            <a href="{{ url('/head/edit/'.$row->id) }}" class="btn" rel="tooltip" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a onclick="return confirm('Are you sure ?')" href="{{ url('/head/destroy/'.$row->id) }}" class="btn" rel="tooltip" title="Delete">
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
                    
                    
                    
					{{-- @include('admin.document_footer'); --}}
					
				</div>
				
				
				
				
			</div>
		{{-- </div> --}}

</div>





