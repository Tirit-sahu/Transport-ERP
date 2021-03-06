@extends('admin.truck.owner.owner')
@section('formtitle','Master Truck Owner Form')
@section('formaction','truck/owner')
@section('button','Save')


@section('owner_name',old('owner_name'))
@section('father_name',old('father_name'))
@section('mobile',old('mobile'))
@section('pan_no',old('pan_no'))

@section('address',old('address'))
@section('owner_type',old('owner_type'))
@section('gst_no',old('gst_no'))
@section('state_code',old('state_code'))

@section('ac_no',old('ac_no'))
@section('bank_name',old('bank_name'))
@section('branch_name',old('branch_name'))
@section('tds_status',old('tds_status'))
@section('ifsc_code',old('ifsc_code'))

@section('alter_ac_no',old('alter_ac_no'))
@section('alter_bank_name',old('alter_bank_name'))
@section('alter_branch_name',old('alter_branch_name'))
@section('alter_ifsc_code',old('alter_ifsc_code'))
@section('tds_status',old('tds_status'))