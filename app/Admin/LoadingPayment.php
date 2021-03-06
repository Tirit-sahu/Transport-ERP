<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class LoadingPayment extends Model
{
      public function Consignee(){
 	 	return $this->belongsTo(Consignee::Class,'consignee');
 	 }
 
 public function setPaymentDateAttribute($value){
  if($value !=''){
      return $this->attributes['payment_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
    }}




    public function getPaymentDateAttribute($value){
  if($value !=''){
      return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }}
    
 	public function Consignor(){
 	 	return $this->belongsTo(Consignor::Class,'consignor');
 	}

 	public function place(){
 	 	return $this->belongsTo(Place::Class,LoadingEntry::Class, 'from_place');
 	}

 	public function toplace(){
 	 	return $this->belongsTo(Place::Class,LoadingEntry::Class, 'to_plce');
 	}

 	public function petrolpumps(){
 	 	return $this->belongsTo(Petrolpump::Class,'pentrol_pump');
 	}

 	public function truck(){
 	 	return $this->belongsTo(Truck::Class, LoadingEntry::Class, 'vehicle_no');
 	}

 	public function truckOwner()
    {
        return $this->hasOneThrough(Truckowner::Class, Truck::Class,'vehicle_no');
    }

 	public function user(){
 	 	return $this->belongsTo(User::Class,'createdby');
 	}


    public function entry(){
        return $this->belongsTo(LoadingEntry::Class,LoadingReceiveing::Class,'loading_no');
    }

    public function receice(){
        return $this->belongsTo(LoadingReceiveing::Class,'loading_id');
    }

}