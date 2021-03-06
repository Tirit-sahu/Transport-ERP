<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
      public function Consignor()
    {
        return $this->hasMany(Consignor::Class);
    }

        public function Consignee(){
    	return $this->hasMany(Consignee::Class);
    }

    public function Truckowner(){
    	return $this->hasMany(Truckowner::Class,'id');
    }

    public function Petrolpump(){
        return $this->hasMany(Petrolpump::Class);
    }
}
