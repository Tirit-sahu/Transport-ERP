@extends('admin.company.company.company')
@section('formtitle','Company Form')
@section('formaction','company/company')

@section('company_owner_name',old('company_owner_name'))
@section('company_name',old('company_name'))
@section('company_head_name',old('company_head_name'))
@section('company_phone',old('company_phone'))
@section('company_mobile',old('company_mobile'))

@section('company_mobile2',old('company_mobile2'))

@section('head_office_address',old('head_office_address'))
@section('company_address',old('company_address'))
@section('company_pan_card',old('company_pan_card'))

@section('company_gst_no',old('company_gst_no'))
@section('state_id',old('state_id'))
@section('company_Loading_prefix',old('company_Loading_prefix'))




@section('button','Save')