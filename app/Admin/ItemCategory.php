<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    public function item(){
    	return $this->hasMany(Item::Class);
    }

      
}
