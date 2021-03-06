<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon;

class LoadingEntry extends Model
{
     public function getLoadingDateAttribute($value){
        if($value !=''){
    	return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }}

    

    public function setLoadingDateAttribute($value){
        if($value !=''){
    	return $this->attributes['loading_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
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
 	 	return $this->belongsTo(Truck::Class,LoadingEntry::Class, 'vehicle_no');
 	 }

 	 public function truckOwner()
    {
        return $this->hasOneThrough(Truckowner::Class, Truck::Class,'vehicle_no');
    }

 	  public function user(){
 	 	return $this->belongsTo(User::Class,'createdby');
 	 }

     public function receive(){
        return $this->hasOne(LoadingReceiveing::Class);
     }
     public function entry(){
        return $this->hasOneThrough(LoadingEntry::Class,LoadingReceiveing::Class,'loading_no');
     }


}
