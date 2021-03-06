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
        $subTotal = 0;
        $totalIva = 0;

        //detalles Carrito
    	foreach ($detalles as $detalle) {
            
            //producto
            $producto = $detalle->product;

            //Cantidad del producto en el carrito
            $cantidadProducto = $detalle->cantidad;

            //minimos para vender al mayor/granMayor/Vip
            $granMayorMinimo = $producto->amount_min_big_wholesale;
            $alMayorMinimo   = $producto->amount_min_wholesale;
            $precioVipMin    = $producto->amount_min_vip;  

            //precios
            $granMayorPrice = $producto->big_wholesale_price;
            $alMayorPrice = $producto->wholesale_price;
            $vipPrice  = $producto->vip_price;
            $detalPrice = $producto->detail_price;


            // PRECIO AL DETAL
            // if($cantidadProducto < $alMayorMinimo) 
            // {

            //     //Verificar si el producto cuenta con IVA
            //     if($producto->iva->value) 
            //     {
            //         $totalCart = $totalCart + (($detalPrice * $cantidadProducto) + $iva->value);
            //     }else 
            //     {
            //         $totalCart = $totalCart + ($detalPrice * $cantidadProducto);
            //     }

            // }


            //PRECIO AL  MAYOR
            if($cantidadProducto < $granMayorMinimo)
            {
                if($producto->iva->value) 
                {
                    $totalCart = $totalCart + ($alMayorPrice * $cantidadProducto);
                    $totalIva = $totalIva + (($iva->value/100)*($alMayorPrice * $cantidadProducto));
                    $subTotal = $subTotal + ($totalCart - $totalIva);

                }else 
                {
                    $totalCart = $totalCart + ($alMayorPrice * $cantidadProducto);
                    $subTotal = $subTotal + ($alMayorPrice * $cantidadProducto);
                }
            }


            //PRECIO AL GRAN MAYOR
            if($cantidadProducto >= $granMayorMinimo) 
            {

                if($producto->iva->value) 
                {
                    $totalCart = $totalCart + ($granMayorPrice * $cantidadProducto);
                    $totalIva = $totalIva + (($iva->value/100)*($granMayorPrice * $cantidadProducto));
                    $subTotal = $subTotal + ($totalCart - $totalIva);
                }else 
                {
                    $totalCart = $totalCart + ($granMayorPrice * $cantidadProducto);
                    $subTotal = $subTotal + $totalCart;
                }

            }


            // PRECIO VIP
            // if($cantidadProducto >= $precioVipMin) 
            // {

            //     if($producto->iva->value) 
            //     {
            //         $useIva = true;
            //         $totalCart = $totalCart + (($vipPrice * $cantidadProducto) + $iva->value);
            //         $subTotal = $subTotal + ($vipPrice * $cantidadProducto);
            //     }else 
            //     {
            //         $totalCart = $totalCart + ($vipPrice * $cantidadProducto);
            //         $subTotal = $subTotal + ($vipPrice * $cantidadProducto);
            //     }

            // }
            
    	}

    	return $amount = [
            'subTotal'  => $subTotal,
            'total'     => $totalCart,
            'iva'       => $totalIva,
        ];
    }
}
