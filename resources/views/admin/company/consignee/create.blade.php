@extends('admin.company.consignee.consignee')
@section('formtitle','Master Consignee Form')
@section('formaction','company/consignee')
@section('button','Save')



@section('consignee_name',old('consignee_name'))
@section('place_id',old('place_id'))
@section('state_id',old('state_id'))
@section('consignee_mobile',old('consignee_mobile'))
@section('consignee_email',old('consignee_email'))

@section('consignee_address',old('consignee_address'))
@section('consignee_gst_no',old('consignee_gst_no'))
@section('company_commission',old('company_commission'))
@section('status',old('status'))
@section('type',old('type'))