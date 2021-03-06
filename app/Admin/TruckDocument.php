<?php

namespace App\Admin;
use Carbon;
use Illuminate\Database\Eloquent\Model;

class TruckDocument extends Model
{
    public function getPermitIssueDateAttribute($value){
    	if($value !=''){
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
        }
    }
    
    public function getPermitExpiryDateAttribute($value){
        if($value !=''){
    	return \Carbon\Carbon::parse($value)->format('d-m-Y');
        }
    }

     public function setPermitIssueDateAttribute($value){
        if($value !=''){
    	return $this->attributes['permit_issue_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
        }
    }

    public function setPermitExpiryDateAttribute($value){
        if($value !=''){
    	return $this->attributes['permit_expiry_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
        }
    }


    // fintess
    public function getFitnessIssueDateAttribute($value){
        if($value !=''){
    	return \Carbon\Carbon::parse($value)->format('d-m-Y');
        }
    }
    
    public function getFitnessExpiryDateAttribute($value){
    	   if($value !=''){
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
        }
    }

     public function setFitnessIssueDateAttribute($value){
        if($value !=''){
    	return $this->attributes['fitness_issue_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
        }
     }

    public function setFitnessExpiryDateAttribute($value){
        if($value !=''){
    	return $this->attributes['fitness_expiry_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
        }
    }
    //endfitness

    //start

    public function getInsIssueDateAttribute($value){
        if($value !=''){
    	return \Carbon\Carbon::parse($value)->format('d-m-Y');
        }
    }
    
    public function getInsExpiryDateAttribute($value){
        if($value !=''){
    	return \Carbon\Carbon::parse($value)->format('d-m-Y');
        }
    }

     public function setInsIssueDateAttribute($value){
        if($value !=''){
        	return $this->attributes['ins_issue_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
        }
    }

    public function setInsExpiryDateAttribute($value){
    
    if($value !=''){
        	return $this->attributes['ins_expiry_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
        }
    }

    //road tax

    public function getRoadIssueDateAttribute($value){
    if($value !=''){
    	return \Carbon\Carbon::parse($value)->format('d-m-Y');
        }
    }
    
    public function getRoadExpiryDateAttribute($value){
    	if($value !=''){
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
            }
    }


     public function setRoadIssueDateAttribute($value){
        if($value !=''){
        	return $this->attributes['road_issue_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
        }
    }


    public function setRoadExpiryDateAttribute($value){
        if($value !=''){
    	return $this->attributes['road_expiry_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
        }
    }

    //pollutin

    public function getPollIssueDateAttribute($value){
    	if($value !=''){
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
        }
    }

    
    public function getPollExpiryDateAttribute($value){
    	if($value !=''){
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
        }
    }

     public function setPollIssueDateAttribute($value){
        if($value !=''){
    	return $this->attributes['poll_issue_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
        }
    }

    public function setPollExpiryDateAttribute($value){
    	if($value !=''){
        return $this->attributes['poll_expiry_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
        }
    }


    //noti


     public function getNotiIssueDateAttribute($value){
    	if($value !=''){
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
         }
    }
    
    public function getNotiExpiryDateAttribute($value){
    	if($value !=''){
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
            }
     }

     public function setNotiIssueDateAttribute($value){
        if($value !=''){
        	return $this->attributes['noti_issue_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
        }
    }

    public function setNotiExpiryDateAttribute($value){
    	if($value !=''){
        return $this->attributes['noti_expiry_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
        }
    }

	//khanji

	public function getKhanijIssueDateAttribute($value){
    	if($value !=''){
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
        }
    }
    
    public function getKhanijExpiryDateAttribute($value){
    	if($value !=''){
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
        }
    }

     public function setKhanijIssueDateAttribute($value){
    	if($value !=''){
        return $this->attributes['khanij_issue_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
            }
    }

    public function setKhanijExpiryDateAttribute($value){
    	if($value !=''){
        return $this->attributes['khanij_expiry_date'] =\Carbon\Carbon::parse($value)->format('Y-m-d');
        }
    }


     public function truck(){
        
        return $this->belongsTo(Truck::Class, 'truck_id');
     }


}
