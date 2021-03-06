<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Carbon;
class Session extends Model
{
     protected $fillable = [
        'name', 'startdate', 'enddate','cementprefix', 'clinkerorefix',
    ];

    public function getStartdateAttribute($value){
        if($value !=''){
    	return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }}
    
    public function getEnddateAttribute($value){
    if($value !=''){
    	return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }}

     public function setStartdateAttribute($value){
    if($value !=''){
    	return $this->attributes['startdate'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
    }}

    public function setEnddateAttribute($value){
    if($value !=''){
    	return $this->attributes['enddate'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
    }}
    
    public function ConsignorPrefix(){
        return $this->hasMany(ConsignorPrefix::Class);
    }
    
}
