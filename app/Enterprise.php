<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Enterprise extends Model
{

    protected $fillable = [
    'user_id', 
    'name', 
    'RIF', 
    'SADA', 
    'state_id', 
    'city_id', 
    'legal_address', 
    'postal_code', 
    'opening_time',
    'closing_time',
    ];

    public function city()
    {
        return $this->belongsTo('App\city');
    }
    
    public function state()
    {
        return $this->belongsTo('App\state');
    }
    
    //
    public function getOperationTime()
    {
        $time_open =  Carbon::createFromTimeString($this->opening_time, 'America/Caracas');;
        $time_close =  Carbon::createFromTimeString($this->closing_time, 'America/Caracas'); ;

       return 'Desde '. $time_open->isoFormat('h:mm A'). ' hasta '.  $time_close->isoFormat('h:mm A');

    }
}
