<!doctype html>
<html>


<!-- Mirrored from www.eakroko.de/flat/forms-basic.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 29 May 2018 10:40:12 GMT -->
<head>
		<meta charset="utf-8">
		<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>E-TRANSPORT SOLUTION</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{url('/')}}/admin/css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="{{url('/')}}/admin/css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- PageGuide -->
	<link rel="stylesheet" href="{{url('/')}}/admin/css/plugins/pageguide/pageguide.css">
	<!-- Fullcalendar -->
	<link rel="stylesheet" href="{{url('/')}}/admin/css/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" href="{{url('/')}}/admin/css/plugins/fullcalendar/fullcalendar.print.css" media="print">
	<!-- chosen -->
	<link rel="stylesheet" href="{{url('/')}}/admin/css/plugins/chosen/chosen.css">
	<!-- select2 -->
	<link rel="stylesheet" href="{{url('/')}}/admin/css/plugins/select2/select2.css">
	<!-- icheck -->
	<link rel="stylesheet" href="{{url('/')}}/admin/css/plugins/icheck/all.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{url('/')}}/admin/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="{{url('/')}}/admin/css/themes.css">
	<link href="{{url('/')}}/admin/parsley.css" rel="stylesheet">

	<!-- jQuery -->

	{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}

	{{-- <script src="{{url('/')}}/admin/js/jquery.min.js"></script> --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />	 --}}
	
	<!-- Nice Scroll -->
	<script src="{{url('/')}}/admin/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- jQuery UI -->
	<script src="{{url('/')}}/admin/js/plugins/jquery-ui/jquery-ui.js"></script>
	<!-- Touch enable for jquery UI -->
	<script src="{{url('/')}}/admin/js/plugins/touch-punch/jquery.touch-punch.min.js"></script>
	<!-- slimScroll -->
	<script src="{{url('/')}}/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="{{url('/')}}/admin/js/bootstrap.min.js"></script>
	<script src="{{url('/')}}/admin/parsley.js"></script>
	<!-- vmap -->
	<script src="{{url('/')}}/admin/js/plugins/vmap/jquery.vmap.min.js"></script>
	<script src="{{url('/')}}/admin/js/plugins/vmap/jquery.vmap.world.js"></script>
	<script src="{{url('/')}}/admin/js/plugins/vmap/jquery.vmap.sampledata.js"></script>
	<!-- Bootbox -->
	<script src="{{url('/')}}/admin/js/plugins/bootbox/jquery.bootbox.js"></script>


	<!-- New DataTables -->
	<script src="{{url('/')}}/admin/js/plugins/momentjs/moment-range.min.js"></script>
	<script src="{{url('/')}}/admin/js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="{{url('/')}}/admin/js/plugins/datatables/extensions/dataTables.tableTools.min.js"></script>
	<script src="{{url('/')}}/admin/js/plugins/datatables/extensions/dataTables.colReorder.min.js"></script>
	<script src="{{url('/')}}/admin/js/plugins/datatables/extensions/dataTables.colVis.min.js"></script>
	<script src="{{url('/')}}/admin/js/plugins/datatables/extensions/dataTables.scroller.min.js"></script>

	<!-- Chosen -->
	
	<!-- Flot -->
	<script src="{{url('/')}}/admin/js/plugins/flot/jquery.flot.min.js"></script>
	<script src="{{url('/')}}/admin/js/plugins/flot/jquery.flot.bar.order.min.js"></script>
	<script src="{{url('/')}}/admin/js/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="{{url('/')}}/admin/js/plugins/flot/jquery.flot.resize.min.js"></script>
	<!-- imagesLoaded -->
	<script src="{{url('/')}}/admin/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- PageGuide -->
	<script src="{{url('/')}}/admin/js/plugins/pageguide/jquery.pageguide.js"></script>
	<!-- FullCalendar -->
	<script src="{{url('/')}}/admin/js/plugins/fullcalendar/moment.min.js"></script>
	<!-- Chosen -->
	<script src="{{url('/')}}/admin/js/plugins/chosen/chosen.jquery.min.js"></script>
	<script src="{{url('/')}}/admin/js/plugins/datatables/extensions/dataTables.colReorder.min.js"></script>
	<!-- select2 -->
	<script src="{{url('/')}}/admin/js/plugins/select2/select2.min.js"></script>
	<!-- icheck -->
	<script src="{{url('/')}}/admin/js/plugins/icheck/jquery.icheck.min.js"></script>

	<script src="{{url('/')}}/admin/js/plugins/validation/jquery.validate.min.js"></script>
	<script src="{{url('/')}}/admin/js/plugins/validation/additional-methods.min.js"></script>

	<!-- Theme framework -->
	<script src="{{url('/')}}/admin/js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="{{url('/')}}/admin/js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="{{url('/')}}/admin/js/demonstration.min.js"></script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{url('/')}}/admin/img/favicon.html" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="{{url('/')}}/admin/img/apple-touch-icon-precomposed.png" />

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
	<script>
		$(document).ready(function() {
		$('.select2Jquery').select2();
		});
	</script>
	<script>
		$( function() {
		$( ".date").datepicker(
		{ 
		dateFormat: 'dd-mm-yy',
		changeMonth: true,
		changeYear: true,
		showButtonPanel: true,
		}
		);
		} );
	</script>

	<script type="text/javascript">

        $(document).ready(function() {
          var table = $('#dataTables').DataTable();
      
      
				$('#example1').DataTable({
				dom: 'Bfrtip',
				buttons: [
				{
				extend: 'excelHtml5',
				footer: true,
				exportOptions: {
				columns: ':visible'
				}
				},     

				{
				extend: 'colvis'
				}
				],
				} );
      
      
      
				$('#example2').DataTable({
				dom: 'Bfrtip',
				buttons: [
				{
				extend: 'excelHtml5',
				footer: true,
				exportOptions: {
				columns: ':visible'
				}
				},    

				{
				extend: 'colvis'
				}
				],
				// "paging": false
				} );
      
      } );
      
	  </script>
	  
	<script>
	$(document).ready(function() {
	// Setup - add a text input to each footer cell
	$('#FDataTable thead tr').clone(true).appendTo( '#FDataTable thead' );
	$('#FDataTable thead tr:eq(1) th').each( function (i) {
	if(i==1 || i==2 || i==3 || i==4 || i==5){
	var title = $(this).text();
	$(this).html( '<input style="width:100px;" type="text" placeholder="Search '+title+'" />' );

	$( 'input', this ).on( 'keyup change', function () {
		if ( table.column(i).search() !== this.value ) {
			table
				.column(i)
				.search( this.value )
				.draw();
		}
	} );
	}else{
		$(this).html( '' );
	}
	} );

	var table = $('#FDataTable').DataTable( {
	orderCellsTop: true,
	fixedHeader: true,
	dom: 'Bfrtip',
				buttons: [
				{
				extend: 'excelHtml5',
				footer: true,
				exportOptions: {
				columns: ':visible'
				}
				},    

				{
				extend: 'colvis'
				}
				],
				
	} );
	} );
	</script>



<script>
	$(document).ready(function() {
	// Setup - add a text input to each footer cell
	$('#loadingFDataTable thead tr').clone(true).appendTo( '#loadingFDataTable thead' );
	$('#loadingFDataTable thead tr:eq(1) th').each( function (i) {
	if(i==1 || i==3 || i==10 || i==9 || i==11 || i==17){
	var title = $(this).text();
	$(this).html( '<input style="width:100px;" type="text" placeholder="Search '+title+'" />' );

	$( 'input', this ).on( 'keyup change', function () {
		if ( table.column(i).search() !== this.value ) {
			table
				.column(i)
				.search( this.value )
				.draw();
		}
	} );
	}else{
		$(this).html( '' );
	}
	} );

	var table = $('#loadingFDataTable').DataTable( {
	orderCellsTop: true,
	fixedHeader: true,
	dom: 'Bfrtip',
				buttons: [
				{
				extend: 'excelHtml5',
				footer: true,
				exportOptions: {
				columns: ':visible'
				}
				},    

				{
				extend: 'colvis'
				}
				],
				
	} );
	} );
</script>


<script>
	$(document).ready(function() {
	// Setup - add a text input to each footer cell
	$('#receivingFDataTable thead tr').clone(true).appendTo( '#receivingFDataTable thead' );
	$('#receivingFDataTable thead tr:eq(1) th').each( function (i) {
	if(i==1 || i==2 || i==3 || i==4 || i==5){
	var title = $(this).text();
	$(this).html( '<input style="width:100px;" type="text" placeholder="Search '+title+'" />' );

	$( 'input', this ).on( 'keyup change', function () {
		if ( table.column(i).search() !== this.value ) {
			table
				.column(i)
				.search( this.value )
				.draw();
		}
	} );
	}else{
		$(this).html( '' );
	}
	} );

	var table = $('#receivingFDataTable').DataTable( {
	orderCellsTop: true,
	fixedHeader: true,
	dom: 'Bfrtip',
				buttons: [
				{
				extend: 'excelHtml5',
				footer: true,
				exportOptions: {
				columns: ':visible'
				}
				},    

				{
				extend: 'colvis'
				}
				],
				
	} );
	} );
</script>


<script>
	$(document).ready(function() {
	// Setup - add a text input to each footer cell
	$('#paymentFDataTable thead tr').clone(true).appendTo( '#paymentFDataTable thead' );
	$('#paymentFDataTable thead tr:eq(1) th').each( function (i) {
	if(i==1 || i==2){
	var title = $(this).text();
	$(this).html( '<input style="width:100px;" type="text" placeholder="Search '+title+'" />' );

	$( 'input', this ).on( 'keyup change', function () {
		if ( table.column(i).search() !== this.value ) {
			table
				.column(i)
				.search( this.value )
				.draw();
		}
	} );
	}else{
		$(this).html( '' );
	}
	} );

	var table = $('#paymentFDataTable').DataTable( {
	orderCellsTop: true,
	fixedHeader: true,
	dom: 'Bfrtip',
				buttons: [
				{
				extend: 'excelHtml5',
				footer: true,
				exportOptions: {
				columns: ':visible'
				}
				},    

				{
				extend: 'colvis'
				}
				],
				
	} );
	} );
</script>

	
</head>