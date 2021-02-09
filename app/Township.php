<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
    //Municipios 
    public function city()
    {
    	return $this->belongsTo('App\City');
    }
}
