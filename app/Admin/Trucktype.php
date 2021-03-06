<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Trucktype extends Model
{
    public function truck(){
    	return $this->hasMany(Truck::Class,'tructype_id');
    }
}
