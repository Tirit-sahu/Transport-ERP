@extends('admin.dispatch.load.load')
@section('formtitle','Loading Entry Edit Form')
@section('formaction',"dispatch/load/$load->id")

@section('loading_date',$load->loading_date)
@section('loading_no',$load->loading_no)
@section('vehicle_no',$load->vehicle_no)
@section('item_master',$load->item_master)
@section('hemal',$load->hemal)
@section('hema_rate',$load->hema_rate)
@section('bag',$load->bag)
@section('weight',$load->weight)
@section('freight_rate',$load->freight_rate)
@section('commision_rate',$load->commision_rate)
@section('consignor',$load->consignor)
@section('from_place',$load->from_place)

@section('consignee',$load->consignee)

@section('to_plce',$load->to_plce)
@section('diesel_advance',$load->diesel_advance)
@section('diesel_advance_ltr',$load->diesel_advance_ltr)
@section('pentrol_pump',$load->pentrol_pump)
@section('cash_advance',$load->cash_advance)
@section('loading_type',$load->loading_type)

@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection