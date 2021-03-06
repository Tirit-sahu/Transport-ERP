<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
      public function Consignor()
    {
        return $this->hasMany(Consignor::Class);
    }

    public function Consignee(){
    	return $this->hasMany(Consignee::Class);
    }

    public function loadingEntry(){
 		return $this->hasMany(LoadingEntry::Class);
 	}
}
