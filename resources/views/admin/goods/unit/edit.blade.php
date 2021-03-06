@extends('admin.goods.unit.unit')
@section('formtitle','Edit Unit Master')
@section('formaction',"goods/unit/$unit->id")
@section('name',$unit->name)

@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection