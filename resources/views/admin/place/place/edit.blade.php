@extends('admin.place.place.place')
@section('formtitle','Place Edit Form')
@section('formaction',"place/place/$place->id")
@section('city_code',$place->city_code)
@section('placename',$place->placename)

@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection