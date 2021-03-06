@extends('admin.inv.petrol.petrol')
@section('formtitle','Master Petrol Pump Form')
@section('formaction','petrol/petrol')
@section('button','Save')

@section('petrol_pump_name',old('petrol_pump_name'))
@section('address',old('address'))
@section('district',old('district'))
@section('state_id',old('state_id'))

@section('mobile',old('mobile'))
@section('alter_mobile',old('alter_mobile'))
@section('email',old('email'))
@section('gst_no',old('gst_no'))

@section('pan_no',old('pan_no'))

@section('designation',old('designation'))
@section('contact_person_name',old('contact_person_name'))
@section('contact_person_mobile',old('contact_person_mobile'))
@section('contact_person_email',old('contact_person_email'))


@section('type',old('type'))