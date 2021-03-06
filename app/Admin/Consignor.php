<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Consignor extends Model
{
     public function Place()
    {
        return $this->belongsTo(Place::Class);
    }

      public function State()
    {
        return $this->belongsTo(State::Class);
    }

      public function ConsignorPrefix()
    {
        return $this->hasMany(ConsignorPrefix::Class);
    }

    public function loadingEntry(){
    return $this->hasMany(LoadingEntry::Class);
  }
}
