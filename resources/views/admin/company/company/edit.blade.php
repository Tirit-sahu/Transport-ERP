@extends('admin.company.company.company')
@section('formtitle','Master Company Edit Form')
@section('formaction',"company/company/$company->id")
@section('company_owner_name',$company->company_owner_name)
@section('company_name',$company->company_name)
@section('company_head_name',$company->company_head_name)
@section('company_phone',$company->company_phone)
@section('company_mobile',$company->company_mobile)

@section('company_mobile2',$company->company_mobile2)

@section('head_office_address',$company->head_office_address)
@section('company_address',$company->company_address)
@section('company_pan_card',$company->company_pan_card)

@section('company_gst_no',$company->company_gst_no)
@section('state_id',$company->state_id)
@section('company_Loading_prefix',$company->company_Loading_prefix)


@section('logo')
	@if($company->company_logo)
	<img src="{{asset('Storage/companyimg')}}/{{$company->company_logo}}" alt="image" width="40px">
	@endif
@endsection

@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection