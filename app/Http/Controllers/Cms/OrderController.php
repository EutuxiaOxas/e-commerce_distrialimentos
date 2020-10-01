<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\OrderProduct;
class OrderController extends Controller
{
    public function index()
    {
    	$orders = Order::all();
    	$secName = 'ordenes';

    	return view('cms.ventas.index', compact('orders', 'secName'));
    }


    public function nuevaOrden(){
    	$user = auth()->user();
    	$cart = $user->cartVerify();
    	$total = $cart->cartAmount();

    	$order = Order::create([
    		'user_id' => $user->id,
    		'total_amount' => $total,
    		'status' => 'PROCESS',
    	]);

    	$id = $order->id;


    	$cart->update([
    		'status' => 'PROCESS',
    	]);

    	foreach ($cart->cartDetails as $detalle) {
    		$oderProduct = OrderProduct::create([
    			'order_id' => $id,
    			'product_id' => $detalle->product->id,
    			'quantity' => $detalle->cantidad,
    			'price' => $detalle->product->price,
    		]);
    	}

    	return redirect('/home')->with('message', 'Su orden se ha creado correctamente y se encuentra en proceso!');
    }
}
