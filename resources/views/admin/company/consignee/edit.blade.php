@extends('admin.company.consignee.consignee')
@section('formtitle','Master Consignee Edit Form')
@section('formaction',"company/consignee/$consignee->id")

@section('consignee_name',$consignee->consignee_name)
@section('place_id',$consignee->place_id)
@section('state_id',$consignee->state_id)
@section('consignee_mobile',$consignee->consignee_mobile)
@section('consignee_email',$consignee->consignee_email)

@section('consignee_address',$consignee->consignee_address)
@section('consignee_gst_no',$consignee->consignee_gst_no)
@section('company_commission',$consignee->company_commission)
@section('status',$consignee->status)
@section('type',$consignee->type)

@section('Document')
	@if($consignee->document)
	<img src="{{asset('Storage/docsImg')}}/{{$consignee->document}}" alt="image" width="40px">
	@endif
@endsection

@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection