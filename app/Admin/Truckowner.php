<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Truckowner extends Model
{
    public function state(){
 	 	return $this->belongsTo(State::Class,'state_code');
 	 }

 	 public function truck(){
    	return $this->hasMany(Truck::Class);
    }


}
