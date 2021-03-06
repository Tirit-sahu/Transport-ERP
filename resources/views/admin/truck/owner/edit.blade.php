@extends('admin.truck.owner.owner')
@section('formtitle','Master Truck Owner Edit Form')
@section('formaction',"truck/owner/$owner->id")

@section('owner_name',$owner->owner_name)
@section('father_name',$owner->father_name)
@section('mobile',$owner->mobile)
@section('pan_no',$owner->pan_no)

@section('address',$owner->address)
@section('owner_type',$owner->owner_type)
@section('gst_no',$owner->gst_no)
@section('state_code',$owner->state_code)

@section('ac_no',$owner->ac_no)
@section('bank_name',$owner->bank_name)
@section('branch_name',$owner->branch_name)
@section('tds_status',$owner->tds_status)
@section('ifsc_code',$owner->ifsc_code)

@section('alter_ac_no',$owner->alter_ac_no)
@section('alter_bank_name',$owner->alter_bank_name)
@section('alter_branch_name',$owner->alter_branch_name)
@section('alter_ifsc_code',$owner->alter_ifsc_code)
@section('tds_status',$owner->tds_status)


@section('document')
	@if($owner->document)
	<a target="_blank" href="{{ asset('storage/app/public/documnetowner/'.$owner->document) }}">
	<img src="{{ asset('storage/app/public/documnetowner/'.$owner->document) }}" alt="image" width="40px">
	</a>
	@endif
@endsection

@section('upload_pan_card')
	@if($owner->upload_pan_card)
	<a target="_blank" href="{{ asset('storage/app/public/documnetowner/'.$owner->upload_pan_card) }}">
	<img src="{{ asset('storage/app/public/documnetowner/'.$owner->upload_pan_card) }}" alt="image" width="40px">
	</a>
	@endif
@endsection

@section('upload_aadhar_card')
	@if($owner->upload_aadhar_card)
	<a target="_blank" href="{{ asset('storage/app/public/documnetowner/'.$owner->upload_aadhar_card) }}">
	<img src="{{ asset('storage/app/public/documnetowner/'.$owner->upload_aadhar_card) }}" alt="image" width="40px">
</a>
	@endif
@endsection


@section('button','Update')

@section('method')
	@method('PATCH ')
@endsection