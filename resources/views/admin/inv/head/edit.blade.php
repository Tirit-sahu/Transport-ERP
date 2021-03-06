@extends('admin.inv.head.head')
@section('formtitle','Master Other Income Expense Head Form')
@section('formaction',"inv/head/$head->id")

@section('head_name',$head->head_name)
@section('head_type',$head->head_type)



@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection