<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
     public function ItemCategory(){
        return $this->belongsTo(ItemCategory::Class,'item_category');
    }
}
