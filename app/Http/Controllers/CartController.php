<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\CartDetail;
use App\User;
use App\Variable;
class CartController extends Controller
{
    public function getCart()
    {
    	$cart_details = auth()->user()->cartVerify()->cartDetails()->get();

    	$cart = [];

    	foreach ($cart_details as $detail) {

    		$cart[] = [
                'producto' => $detail->product()->first(),
                'iva' => $detail->product()->first()->iva->msg,
                'imagen' => $detail->product()->first()->image,
                'cantidad' => $detail->cantidad,
                'empaque' => $detail->product()->first()->packaging->packaging,
                'disponible' => $detail->product()->first()->available_stock
            ];
    	}

    	return $cart;
    }

    public function updateCount(Request $request)
    {
        $cart = auth()->user()->cartVerify();
        $detail =CartDetail::where('product_id', $request->detalle_id)->where('cart_id', $cart->id)->first();
        if($detail->cart_id == $cart->id){
            $detail->cantidad = $request->cantidad;
            $detail->save();

            return response()->json('Cantidad del producto actualizada con éxito', 200);
        }

    }


    public function addToCart(Request $request)
    {

    	$user = auth()->user();

    	$cart_id = $user->cartVerify()->id;

        $detalle_activo = CartDetail::where('cart_id', $cart_id)
                                     ->where('product_id', $request->product_id)
                                     ->first();

    	if(isset($detalle_activo))
        {
            $contador = $detalle_activo->cantidad;
            
            if($request->cantidad > 0) {

                $detalle_activo->cantidad = $request->cantidad;
                $detalle_activo->save();

            }else {
                $detalle_activo->delete();
            }

        }else{
            $detail = new CartDetail;

            $detail->create([
                'product_id' => $request->product_id,
                'cart_id' => $cart_id,
                'cantidad' => $request->cantidad,
            ]);
        }

    	return response()->json('', 200);

    }


    public function addStorageToCart(Request $request)
    {


        $user = auth()->user();
        
        $cart_id = $user->cartVerify()->id;
        

        $productos = $request->products;

        foreach ($productos as $producto) {
            $detalle_activo = CartDetail::where('cart_id', $cart_id)
                                     ->where('product_id', $producto['id'])
                                     ->first();

            if(isset($detalle_activo)){
                $detalle_activo->cantidad = $detalle_activo->cantidad + $producto['cantidad'];
                $detalle_activo->save();

            }else {
                CartDetail::create([
                    'product_id' => $producto['id'],
                    'cart_id' => $cart_id,
                    'cantidad'=> $producto['cantidad'], 
                ]);
            }
        }

        return response()->json('', 200);
    }


    public function aumentarCantidad(Request $request, $id)
    {
        $cart = auth()->user()->cartVerify();

        $detail = $cart->cartDetails
                    ->where('product_id', $id)
                    ->where('cart_id', $cart->id)
                    ->first();
        
        if($detail->cart_id == $cart->id){
            $detail->cantidad = $request->cantidad;
            $detail->save();

            return response()->json('Cantidad aumentada con éxito', 200);
        }

    }

    public function eliminarDetalle($id)
    {
        $cart = auth()->user()->cartVerify();

        $detail = $cart->cartDetails
                    ->where('product_id', $id)
                    ->where('cart_id', $cart->id)
                    ->first();

        if($detail->cart_id == $cart->id){
            $detail->delete();

            return response()->json('Producto eliminado con éxito', 200);
        }
        
    }

    public function vaciarCarrito(Request $request){
       $cart_details = auth()->user()->cartVerify()->cartDetails;

       foreach ($cart_details as $detail) {
           $detail->delete();
       }

       return response()->json('Carrito vaciado con éxito', 200);
    }


    public function getCartTotalAmount()
    {


        $user = auth()->user();
        $cart = $user->cartVerify();

        $iva = Variable::where('name', 'IVA')->first();
        $dolarPrice = Variable::where('name', 'dolar')->first();

        $amount = $cart->cartAmount($iva);
        $totalBolivares = $amount['total'] * $dolarPrice->value;
        
        return [
            'total' => $amount['total'],
            'subTotal' => $amount['subTotal'],
            'totalBolivar' => $totalBolivares,
            'iva' => $amount['iva'] ? $iva->value : 0,
        ];
    
    }
}
