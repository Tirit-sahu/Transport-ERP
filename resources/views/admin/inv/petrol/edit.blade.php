@extends('admin.inv.petrol.petrol')
@section('formtitle','Master Petrol Pump Edit Form')
@section('formaction',"petrol/petrol/$petrol->id")

@section('petrol_pump_name',$petrol->petrol_pump_name)
@section('address',$petrol->address)
@section('district',$petrol->district)
@section('state_id',$petrol->state_id)

@section('mobile',$petrol->mobile)
@section('alter_mobile',$petrol->alter_mobile)
@section('email',$petrol->email)
@section('gst_no',$petrol->gst_no)

@section('pan_no',$petrol->pan_no)

@section('designation',$petrol->designation)
@section('contact_person_name',$petrol->contact_person_name)
@section('contact_person_mobile',$petrol->contact_person_mobile)
@section('contact_person_email',$petrol->contact_person_email)
@section('type',$petrol->type)

@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection