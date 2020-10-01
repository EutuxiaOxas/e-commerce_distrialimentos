<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id', 'status'];

    public function cartDetails()
    {
    	return $this->hasMany('App\CartDetail', 'cart_id');
    }

    public function cartAmount()
    {
    	$detalles = $this->cartDetails;
    	$total = 0;

    	foreach ($detalles as $detalle) {
    		$total = $total + ($detalle->product->price * $detalle->cantidad);
    	}

    	return $total;
    }
}
