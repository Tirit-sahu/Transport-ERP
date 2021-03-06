@extends('admin.truck.type.type')
@section('formtitle','Master Truck Type Edit Form')
@section('formaction',"truck/type/$type->id")

@section('trucktype',$type->trucktype)
@section('avg_criteria',$type->avg_criteria)



@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection