<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Bank;
use App\Banks_User;
use App\Pago;
use Carbon\Carbon;
use App\Variable;
class PagosController extends Controller
{



	public function index()
	{
		$pagos = Pago::all();
		$secName = 'pagos';
		return view('cms.pagos.index', compact('pagos', 'secName'));
	}

    public function cuentasBancarias(Request $request)
    {  
        $user = auth()->user();
        $cuentas = Banks_User::where('title', '!=', 'PayPal')->get();
        if($user)
        {
            if(isset($request->orden))
            {
                
                $orden = Order::find($request->orden);
                
                if($user->id == $orden->user->id && $orden->status === 'ACTIVO' || $orden->status === 'REGISTRADO')
                {
                    $user_id = $user->id;
                    return view('cuentas', compact('orden', 'cuentas'));
                }
            }
        }

        return redirect('/');
    }


    public function agregarPago(Request $request)
    {	
    	$user = auth()->user();

     		if($user)
     		{

     			if(isset($request->orden))
     			{
     				
     				$orden = Order::find($request->orden);

     				if($user->id == $orden->user->id)
     				{
     	                $banks = Banks_User::all();
                        $dolarPrice = Variable::where('name', 'dolar')->first();
     					
     	                return view('formulario_realizarPago', compact('user', 'orden', 'banks', 'dolarPrice'));
     				}
     			}

     		}

     		return redirect('/');
    }


    public function agregarNuevoPago(Request $request)
    {
            $user = auth()->user();

            

                if($user)
                {

                    if(isset($request->orden))
                    {
                        
                        $orden = Order::find($request->orden);

                        if($user->id == $orden->user->id && $orden->status === 'REGISTRADO')
                        {
                            $user_id = $user->id;
                            $banks = Bank::where('title', '!=', 'Otros')->get();
                            $banksUsers = Banks_User::where('title', '!=', 'PayPal')->get();
                            
                            return view('pagos', compact('user_id', 'orden', 'banks', 'banksUsers'));
                        }
                    }

                }

                return redirect('/');   
    }


    public function guardarPago(Request $request)
    {
        // return $request->all();
        $user = auth()->user();
    	$pagoRealizado = new Pago();
        
        $pagoRealizado->user_id = $user->id;
        $pagoRealizado->monto = $request->monto;
        $pagoRealizado->order_id = $request->orden_id;
        $pagoRealizado->id_banco_receptor = $request->id_banco_receptor;
        $pagoRealizado->referencia = $request->referencia;
        $pagoRealizado->titular_cuenta = $request->titular_cuenta;
        $pagoRealizado->documento_identidad_titular = $request->documento_identidad_titular;

        $pagoRealizado->save();

        return response()->json($pagoRealizado, 201);
    }


    public function obtenerPagos($id)
    {
        $orden = Order::find($id);

        $pagos = $orden->pagos;

        $pagos_data = [];
        $contador = 1;
        
        foreach ($pagos as $pago) {

            $pagos_data[] = [
                'id' => $pago->id,
                'numero' => $contador,
                'titular' => $pago->titular_cuenta,
                'monto' => $pago->monto,
                'banco_receptor' => $pago->receptor->title,
                'referencia' => $pago->referencia,
                'fecha' => $pago->fecha,
                'identidad_titular' => $pago->documento_identidad_titular, 
            ];
            $contador++;
        }


        $data = [
            'orden_id' => $orden->id,
            'total_pago' => $orden->total_amount,
            'pagos' => $pagos_data,
        ];

        return response()->json($data, 200);

    }


    public function eliminarPago($id, $orden)
    {
        $user = auth()->user();
        $orden = Order::findOrFail($orden);
        $pago = Pago::findOrFail($id);

        if($user->id == $orden->user_id )
        {
            $pago->delete();
            return response()->json(null, 200);
        }

        return response()->json('No autorizado', 401);

    }
}
