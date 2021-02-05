<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //estados
    public function cities()
    {
    	return $this->hasMany('App\City');
    }
}
