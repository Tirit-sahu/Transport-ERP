@extends('admin.goods.cate.cate')
@section('formtitle','Master Item Category Edit Form')
@section('formaction',"goods/cate/$cate->id")
@section('item_category_name',$cate->item_category_name)

@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection