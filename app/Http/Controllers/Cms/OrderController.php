<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\OrderProduct;
use App\Variable;
use App\Address;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function index()
    {
    	$orders = Order::orderBy('id', 'DESC')->paginate(10);
    	$secName = 'ordenes';

    	return view('cms.ventas.index', compact('orders', 'secName'));
    }


    public function nuevaOrden(Request $request){
    	$user = auth()->user();

		$iva = Variable::where('name', 'IVA')->first();

        $oldOrder = Order::where('status_id', '1')
                        ->where('user_id', $user->id)
                        ->first();
    	
        if(isset($oldOrder))
        {
            $oldOrder->status_id = '5'; //cancelado
            $oldOrder->save();
        }

    	$cart = $user->cartVerify();
    	$total = $cart->cartAmount($iva);



    	$order = Order::create([
    		'user_id' => $user->id,
    		'total_amount' => $total['total'],
    		'sub_total' => $total['subTotal'],
    		'iva' => $total['iva'] ? $iva->value : 0,
    		'status_id' => '1',
			'comment' => 'sin comentario',
			'discount' => 0,
			'n-control' => 0,
			'address_id' => $request->address_id,
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
    			'price' => $detalle->product->wholesale_price,
    		]);
    	}


    	return redirect("/gracias-por-su-pedido");

    }

    public function getOrderDetail(Request $request, $id)
    {

    	if($request->wantsJson()){

    		$orden = Order::find($id);
			$ordenStatus = $orden->statusOrder;
    		$detalles = $orden->orderProduct;

			$address = Address::with(['delivery_route', 'state', 'city', 'township'])
						->where('id', $orden->address->id)
						->first();
			
			$dolar = Variable::where('name', 'DOLAR')->first();
			$totalBolivar = number_format($orden->total_amount * $dolar->value, 0, ',', '.');

    		$productos = [];

    		foreach ($detalles as $detalle) {

				$totalDetail = $detalle->price * $detalle->quantity;

    			$producto = [
    				'img' => $detalle->product->image,
    				'title' => $detalle->product->title,
    				'productQuantity' => $detalle->quantity,
    				'productPrice' => $detalle->price,
					'detailTotalAmount' => $totalDetail
    			];

    			$productos[] = $producto;
    		}

			$data = [
				'order' => [
					'id' => $orden->id,
					'created_at' => $orden->created_at->format('d-m-Y'),
					'updated_at' =>  $orden->updated_at->format('d-m-Y'),
					'total_amount' => $orden->total_amount
				],
				'status' => $ordenStatus,
				'orderDetails' => $productos,
				'address' => $address,
				'orderTotalAmount' => [
					'total' => $orden->total_amount,
					'totalBolivar' => $totalBolivar,
					'subTotal' => $orden->sub_total,
					'iva' => $orden->iva
				],
			];

    		return $data;
    	}

    	return redirect('/');
    	
    }


    public function cancelarOrden($id)
    {
        $orden = Order::find($id);
        $orden->status_id = '5'; //cancelar orden
        $orden->save();

        return redirect('/home')->with('message', 'Orden cancelada con éxito');
    }
}
