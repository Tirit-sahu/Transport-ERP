@extends('admin.truck.truck.truck')
@section('formtitle','Master Truck Edit Form')
@section('formaction',"truck/truck/$truck->id")

@section('truck_number',$truck->truck_number)
@section('truckowner_id',$truck->truckowner_id)
@section('tructype_id',$truck->tructype_id)
@section('truck_model',$truck->truck_model)

@section('manufacturer',$truck->manufacturer)
@section('chassisno',$truck->chassisno)
@section('engineno',$truck->engineno)

@section('document',$truck->document)

@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection