<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function Employee(){
    	return $this->hasMany(Employee::Class);
    }
}
