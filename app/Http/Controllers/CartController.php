<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\CartDetail;
use App\User;
class CartController extends Controller
{
    public function getCart()
    {
    	$cart_details = auth()->user()->cartVerify()->cartDetails()->get();

    	$cart = [];

    	foreach ($cart_details as $detail) {
    		$cart[] = $detail->product()->first();
    	}

    	return $cart;
    }


    public function addToCart(Request $request)
    {


    	$user = auth()->user();

    	$cart_id = $user->cartVerify()->id;

    	$detail = new CartDetail;
    	
    	$detail->create([
    		'product_id' => $request->product_id,
    		'cart_id' => $cart_id,
    		'cantidad' => 1,
    	]);

    	return response()->json('', 200);

    }


    public function addStorageToCart(Request $request)
    {


        $user = auth()->user();
        
        $cart_id = $user->cartVerify()->id;

        $productos = $request->products;

        foreach ($productos as $producto) {
            CartDetail::create([
                'product_id' => $producto['id'],
                'cart_id' => $cart_id,
                'cantidad'=> 1, 
            ]);
        }

        return response()->json('', 200);
    }
}
