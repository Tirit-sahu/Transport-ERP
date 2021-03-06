@extends('admin.dispatch.load.load')
@section('formtitle','Master Loading Entry Form')
@section('formaction','dispatch/load')
@section('button','Save')



@section('loading_date',old('loading_date'))

@section('loading_no',Helpers::getcode())

@section('vehicle_nno',old('vehicle_no'))
@section('bags',old('bags'))
@section('weight',old('weight'))
@section('fright_rate',old('fright_rate'))
@section('commision_rate',old('commision_rate'))
@section('consignor',old('consignor'))
@section('from_place',old('from_place'))

@section('consignee',old('consignee'))

@section('to_plce',old('to_plce'))
@section('diesel_advance',old('diesel_advance'))
@section('pentrol_pump',old('pentrol_pump'))
@section('cash_advance',old('cash_advance'))