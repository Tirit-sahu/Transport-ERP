<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Carbon;
class LoadingReceiveing extends Model
{
     public function setFromDateAttribute($value){
      {
    	return $this->attributes['from_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
    }}

      public function setToDateAttribute($value){
    	if($value !=''){
      return $this->attributes['to_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
        }}

    public function Consignee(){
 	 	return $this->belongsTo(Consignee::Class,'consignee');
 	 }


 	 public function Consignor(){
 	 	return $this->belongsTo(Consignor::Class,'consignor');
 	 }

 	 public function place(){
 	 	return $this->belongsTo(Place::Class,'from_place');
 	 }

 	 public function toplace(){
 	 	return $this->belongsTo(Place::Class,'to_plce');
 	 }

 	 public function petrolpumps(){
 	 	return $this->belongsTo(Petrolpump::Class,'pentrol_pump');
 	 }

 	 public function truck(){
 	 	return $this->belongsTo(Truck::Class,'vehicle_no');
 	 }

 	 public function truckOwner()
    {
        return $this->hasOneThrough(Truckowner::Class, Truck::Class,'vehicle_no');
    }

 	  public function user(){
 	 	return $this->belongsTo(User::Class,'createdby');
 	 }


      public function entry(){
        return $this->belongsTo(LoadingEntry::Class,'loading_no');
     }

}
