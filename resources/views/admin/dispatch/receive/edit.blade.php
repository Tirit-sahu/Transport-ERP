@extends('admin.dispatch.load.load')
@section('formtitle','Master Loading Entry Edit Form')
@section('formaction',"dispatch/load/$load->id")

@section('loading_date',$load->loading_date)
@section('loading_no',$load->loading_no)
@section('vehicle_no',$load->vehicle_no)
@section('bags',$load->bags)
@section('weight',$load->weight)
@section('fright_rate',$load->fright_rate)
@section('commision_rate',$load->commision_rate)
@section('consignor',$load->consignor)
@section('from_place',$load->from_place)

@section('consignee',$load->consignee)

@section('to_plce',$load->to_plce)
@section('diesel_advance',$load->diesel_advance)
@section('pentrol_pump',$load->pentrol_pump)
@section('cash_advance',$load->cash_advance)


@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection