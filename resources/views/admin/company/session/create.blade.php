@extends('admin.company.session.session')
@section('formtitle','Session Form')
@section('formaction','company/session')

@section('name',old('name'))
@section('startdate',old('startdate'))
@section('enddate',old('enddate'))


@section('button','Save')