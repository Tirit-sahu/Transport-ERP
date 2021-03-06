@extends('admin.company.bank.bank')
@section('formtitle','Master Bank Form')
@section('formaction','company/bank')
@section('button','Save')



@section('ac_holder_name',old('ac_holder_name'))
@section('holder_mobile',old('holder_mobile'))
@section('bank_name',old('bank_name'))
@section('bank_branch',old('bank_branch'))
@section('bank_ac',old('bank_ac'))

@section('bank_IFSC',old('bank_IFSC'))
@section('bank_address',old('bank_address'))
