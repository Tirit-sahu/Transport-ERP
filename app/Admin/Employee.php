<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Employee extends Model
{

    public function Company(){
        return $this->belongsTo(Company::Class);
    }
   
    public function getDojAttribute($value){
        if($value !=''){
    	return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }}


    public function getLisenceDateAttribute($value){
    
    if($value !=''){
    	return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }}

    public function getLisenceDateExpAttribute($value){
        if($value !=''){
    	return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }
        }

    public function getDobAttribute($value){
        if($value !=''){
    	return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }
}




     

      public function setLisenceDateAttribute($value){
    if($value !=''){
    	return $this->attributes['lisence_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
    }}

      public function setLisenceDateExpAttribute($value){
       if($value !=''){ 
    	return $this->attributes['lisence_date_exp'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
    }
}
      public function setDobAttribute($value){
    if($value !=''){
    	return $this->attributes['dob'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
    }
        }
     
      



}
