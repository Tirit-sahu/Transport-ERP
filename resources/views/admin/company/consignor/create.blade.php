@extends('admin.company.consignor.consignor')
@section('formtitle','Master Consignor Form')
@section('formaction','company/consignor')

@section('button','Save')



@section('consignor_name',old('consignor_name'))
@section('place_id',old('place_id'))
@section('state_id',old('state_id'))
@section('consignor_mobile',old('consignor_mobile'))
@section('consignor_email',old('consignor_email'))

@section('consignor_address',old('consignor_address'))
@section('consignor_gst_no',old('consignor_gst_no'))
@section('company_commission',old('company_commission'))
@section('status',old('status'))