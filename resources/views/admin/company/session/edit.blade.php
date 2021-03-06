@extends('admin.company.session.session')
@section('formtitle','Session Edit Form')
@section('formaction',"company/session/$session->id")
@section('name',$session->name)
@section('startdate',$session->startdate)
@section('enddate',$session->enddate)

@section('button','Update')

@section('method')
	@method('patch')
@endsection