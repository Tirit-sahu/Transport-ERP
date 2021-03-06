@extends('admin.company.consignor.consignor')
@section('formtitle','Master Consignor Edit Form')
@section('formaction',"company/consignor/$consignor->id")

@section('consignor_name',$consignor->consignor_name)
@section('place_id',$consignor->place_id)
@section('state_id',$consignor->state_id)
@section('consignor_mobile',$consignor->consignor_mobile)
@section('consignor_email',$consignor->consignor_email)

@section('consignor_address',$consignor->consignor_address)
@section('consignor_gst_no',$consignor->consignor_gst_no)
@section('company_commission',$consignor->company_commission)
@section('status',$consignor->status)

@section('Document')
	@if($consignor->document)
	<img src="{{asset('Storage/docsImg')}}/{{$consignor->document}}" alt="image" width="40px">
	@endif
@endsection

@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection