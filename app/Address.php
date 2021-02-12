<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $fillable = [
        'user_id',
        'address',
        'state_id',
        'city_id',
        'township_id',
        'postal_code',
        'responsable',
        'responsable_phone',
        'delivery_route_id',
        'type',
    ];

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
