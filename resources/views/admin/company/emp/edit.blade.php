@extends('admin.company.emp.emp')
@section('formtitle','Master Consignor Prefix Edit Form')
@section('formaction',"company/emp/$emp->id")

@section('name',$emp->name)
@section('designation',$emp->designation)
@section('doj',$emp->doj)

@section('pan_no',$emp->pan_no)
@section('lisence_no',$emp->lisence_no)
@section('lisence_date',$emp->lisence_date)
@section('lisence_date_exp',$emp->lisence_date_exp)
@section('dob',$emp->dob)
@section('mobile',$emp->mobile)
@section('mobile2',$emp->mobile2)
@section('salary',$emp->salary)
@section('bank_ac_no',$emp->bank_ac_no)
@section('address',$emp->address)
@section('status',$emp->status)

@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection 