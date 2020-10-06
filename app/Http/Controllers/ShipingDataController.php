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
    			
    			if($user->id == $orden->user->id)
    			{
    				return view('formulario_envio', compact('orden'));
    			}
    		}
    	}

    	return redirect('/');
    }


    public function guardarDatosEnvio(Request $request)
    {
    	Shiping_data::create($request->all());

    	return redirect('/home')->with('message', 'Orden realizada con éxito y en proceso!');
    }
}
