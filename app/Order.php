<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'total_amount', 'status_id', 'comment', 'discount','n-control', 'address_id', 'sub_total', 'iva', 'pago_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function orderProduct()
    {
    	return $this->hasMany('App\OrderProduct', 'order_id');
    }

    public function address()
    {
    	return $this->belongsTo('App\Address', 'address_id');
    }

    public function pagos()
    {
        return $this->hasMany('App\Pago', 'order_id');
    }
    //estatus de la orden
    public function statusOrder()
    {
        return $this->belongsTo('App\StatusOrder', 'status_id');
    }
}
