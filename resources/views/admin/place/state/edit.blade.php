@extends('admin.place.state.state')
@section('formtitle','State Edit Form')
@section('formaction',"place/state/$state->id")
@section('statename',$state->statename)
@section('state_code',$state->state_code)

@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection