<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Petrolpump extends Model
{


	 public function State(){
 	 	return $this->belongsTo(State::Class);
 	 }


    public function loadingEntry(){
        return $this->hasMany(LoadingEntry::Class);
    }

}
