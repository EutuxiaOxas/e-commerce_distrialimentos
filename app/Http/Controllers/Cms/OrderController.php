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
    		'iva' => $total['iva'],
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


    	return redirect("/pago?orden=".$id);

    }

    public function getOrderDetail(Request $request, $id)
    {

    	if($request->wantsJson()){

    		$orden = Order::find($id);
			if(auth()->user()->id == $orden->user_id)
			{
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

				return response()->json($data, 200);
			}else {
				return response()->json('No autorizado', 401);
			}
    	}

    	return redirect('/');
    	
    }


	public function verifyPagosOrden($id)
	{
		$orden = Order::findOrFail($id);
		$dolarPrice = Variable::where('name', 'dolar')->first();

		$totalAmount = $orden->total_amount;
		$pagos = $orden->pagos;

		foreach($pagos as $pago) 
		{
			$dolarActive = false;

			if(strtolower($pago->receptor->title) == 'zelle' || strtolower($pago->receptor->title) == 'efectivo')
			{
				$dolarActive = true;
			}

			$totalAmount = $totalAmount - ($dolarActive ? $pago->monto : $pago->monto * $dolarPrice->value);

		}

		if($totalAmount <= 0) {
			$orden->update([
				'status_id' => 2
			]);
			return redirect('/gracias-por-su-pedido');
		}

		return back();
	}


    public function cancelarOrden($id)
    {
        $orden = Order::findOrFail($id);
        $orden->status_id = '5'; //cancelar orden
        $orden->save();

        return redirect('/perfil/compras')->with('message', 'Orden cancelada con éxito');
    }
}
