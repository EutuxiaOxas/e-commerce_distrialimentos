<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Shiping_data;
class ShipingDataController extends Controller
{
    public function index(Request $request)
    {
    	$user = auth()->user();
    	if($user)
    	{
    		if(isset($request->orden))
    		{
    			
    			$orden = Order::find($request->orden);
    			$ordenProducts = $orden->orderProduct;
                $formulario = Shiping_data::where('user_id', $user->id)->first();

    			if($user->id == $orden->user->id && $orden->status === 'ACTIVO')
    			{
                    $user_id = $user->id;
    				if(isset($formulario))
                    {
                        return view('formulario_envio', compact('orden', 'ordenProducts', 'user_id', 'formulario'));
                    }

                    return view('formulario_envio', compact('orden', 'ordenProducts', 'user_id'));
    			}
    		}
    	}

    	return redirect('/');
    }

    public function guardarDatosEnvio(Request $request)
    {
        
        if($request->wantsJson()){
            
            $user = auth()->user();
            Shiping_data::create([
                'orden_id' => $request->orden_id,
                'user_id' => $user->id,
                'documento_de_identidad' => $request->documento_de_identidad,
                'direccion_1' => $request->direccion_1,
                'direccion_2' => $request->direccion_2,
                'telefono' => $request->telefono,
                'codigo_postal' => $request->codigo_postal,
            ]);

            return response()->json('', 204);
        }

        Shiping_data::create($request->all());

        return redirect("/home")->with('message', 'Orden realizada con éxito!');

    }
    

    public function getShipingData(Request $request, $id){

        $user = auth()->user();
        $orden= Order::find($id);


        if($request->wantsJson()){
            if($user->id === $orden->user_id || $user->roles->rol === 'inventario' || $user->roles->rol === 'administrador') 
            {
                $info = $orden->shiping;
                return response()->json($info, 200);
            }
        }

        return redirect('/');
    }
}
