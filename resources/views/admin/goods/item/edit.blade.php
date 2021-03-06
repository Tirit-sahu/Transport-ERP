@extends('admin.goods.item.item')
@section('formtitle','Master Item Edit Form')
@section('formaction',"goods/item/$item->id")

@section('item_category',$item->item_category)
@section('item_name',$item->item_name)
@section('description',$item->description)
@section('unit_messure',$item->unit_messure)
@section('item_rate',$item->item_rate)
@section('hsncode',$item->hsncode)


@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection