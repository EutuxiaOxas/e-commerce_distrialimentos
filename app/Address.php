<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function city()
    {
        return $this->belongsTo('App\city');
    }
    
    public function state()
    {
        return $this->belongsTo('App\state');
    }
    
    public function township()
    {
        return $this->belongsTo('App\township');
    }
   
}
