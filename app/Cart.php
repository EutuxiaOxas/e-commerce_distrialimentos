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

    //Total carrito
    public function cartAmount($iva)
    {

    	$detalles = $this->cartDetails;
    	$totalCart = 0;

        //detalles Carrito
    	foreach ($detalles as $detalle) {

            //producto
            $producto = $detalle->product;

            //Cantidad del producto en el carrito
            $cantidadProducto = $detalle->cantidad;

            //Precios del producto y minimo para vender a gran mayor
            $granMayorMinimo = $producto->amount_min_big_wholesale;
            $granMayorPrice = $producto->big_wholesale_price;
            $alMayorPrice = $producto->wholesale_price;

            
            if($cantidadProducto >= $granMayorMinimo) {

                //Verificar si el producto cuenta con IVA
                if($producto->iva->value) 
                {
                    $totalCart = $totalCart + (($granMayorPrice * $cantidadProducto) + $iva->value);
                }else 
                {
                    $totalCart = $totalCart + ($granMayorPrice * $cantidadProducto);
                }

            }else {

                if($producto->iva->value) 
                {
                    $totalCart = $totalCart + (($alMayorPrice * $cantidadProducto) + $iva->value);
                }else 
                {
                    $totalCart = $totalCart + ($alMayorPrice * $cantidadProducto);
                }
            }
    	}

    	return $totalCart;
    }
}
