@extends('admin.company.bank.bank')
@section('formtitle','Master Bank Edit Form')
@section('formaction',"company/bank/$bank->id")

@section('ac_holder_name',$bank->ac_holder_name)
@section('holder_mobile',$bank->holder_mobile)
@section('bank_name',$bank->bank_name)
@section('bank_branch',$bank->bank_branch)
@section('bank_ac',$bank->bank_ac)

@section('bank_IFSC',$bank->bank_IFSC)
@section('bank_address',$bank->bank_address)


@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection