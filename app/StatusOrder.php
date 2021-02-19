<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusOrder extends Model
{
    public function Orders()
    {
        return $this->hasMany('App\Order', 'order_id');
    }
}
