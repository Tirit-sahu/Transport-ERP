<div class="modal fade" id="leaveModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Driver/Conductor Leave</h4>
        </div>
        <form action="{{ url('/driverMappingLeave') }}" method="POST">
            @csrf
            <input type="hidden" id="mappingId" name="mappingId">
        <div class="modal-body">
            
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Designation</label>
                    <div class="col-sm-10">
                        <select name="designation" class="form-control" id="">
                            <option value=""></option>
                            <option value="Driver">Driver</option>
                            <option value="Conductor">Conductor</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Leave Date</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="leaveDate" id="leaveDate" placeholder="Leave Date">
                  </div>
                </div>
              
        </div>
        <div class="modal-footer">            
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Submit</button>
        </div>
    </form>
      </div>
    </div>
</div>

<script>
    $( function() {
	
	$("#leaveDate").datepicker(
	{ 
	dateFormat: 'dd-mm-yy',
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	}
	);
    });
</script>