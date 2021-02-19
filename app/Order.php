<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'total_amount', 'status', 'comment', 'discount','n-control', 'address_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function orderProduct()
    {
    	return $this->hasMany('App\OrderProduct', 'order_id');
    }

    public function shiping()
    {
    	return $this->hasOne('App\Shiping_data', 'order_id');
    }

    public function pagos()
    {
        return $this->hasMany('App\Pago', 'order_id');
    }
    //estatus de la orden
    public function statusorden()
    {
        return $this->belongTo('App\StatusOrder');
    }
}
