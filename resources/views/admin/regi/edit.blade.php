@extends('admin.regi.regi')
@section('formtitle','Add New User Form')
@section('formaction',"regi/$user->id")
@section('name',$user->name)
@section('email',$user->email)
@section('usertype',$user->usertype)

@section('method')
	@method('put')
@endsection

@section('button','Update')