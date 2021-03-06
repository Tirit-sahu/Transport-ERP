<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
     public function getOpenDateAttribute($value){
     	if($value !=''){
    	return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }
}

    public function setOpenDateAttribute($value){
    	if($value !=''){
    	return $this->attributes['open_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
    }
}


    public function truckowner(){
 	 	return $this->belongsTo(Truckowner::Class);
 	 }


 	 public function tructype(){
 	 	return $this->belongsTo(Trucktype::Class);
 	 }
 	 
 	public function loadingEntry(){
 		return $this->hasMany(LoadingEntry::Class);
 	}

}
