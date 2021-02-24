<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enterprise;
use App\Address;
use App\State;
use App\City;
use App\Township;
use App\DeliveryRoute;
use App\Category;
use App\Variable;
use App\User;

class PerfilController extends Controller
{
    //dashboard - mis datos
    public function mis_datos()
    {
        $user = auth()->user();
        $empresa =  Enterprise::where('user_id', $user->id)->first(); //empresa
        $direcciones = Address::where('user_id', $user->id)->get(); //direcciones
        $estados = State::all(); //estados
        $ciudades = City::all(); //ciudades
        $municipios = Township::all(); //municipios
        $rutaEntregas = DeliveryRoute::all(); //municipios
        $categorias = Category::all();
        return view('perfil.mis_datos', compact('user', 'empresa','direcciones', 'ciudades', 'estados', 'municipios', 'rutaEntregas','categorias'));
    }

    //dashboard - mis compras
    public function mis_compras()
    {
        $user = auth()->user();
        $categorias = Category::all();
        // $ordenes = $user->orders()->where('status_id', '!=', 'CANCELADO')->orderBy('id', 'DESC')->paginate(3);
        $ordenes = $user->orders()->orderBy('id', 'DESC')->paginate(25);
        $tasa_bs_dolar = Variable::where('name','DOLAR')->first();
        return view('perfil.compras', compact('user','categorias','ordenes','tasa_bs_dolar'));

    }

    public function agregarDatosPersonales(Request $request)
    {
        $user = auth()->user();

        $user->update($request->all());

        if($request->wantsJson()) {
            $user = User::find($user->id);
            return response()->json($user, 200);
        }

        return back();
    }

    public function agregarDatosDeEmpresa(Request $request)
    {
        $user = auth()->user();
        $enterprise = Enterprise::where('user_id', $user->id)->first();
        $empresa = null;
        if(isset($enterprise)) {
            $enterprise->update($request->all());
        }else {
            $empresa = Enterprise::create([
                'user_id' => $user->id,
                'name' => $request->name,
                'RIF'  => $request->RIF,
                'legal_address' => $request->legal_address,
                'postal_code' => $request->postal_code,
                'SADA' => $request->SADA,
                'state_id' => $request->state_id,
                'city_id' => $request->city_id,
                'opening_time' => $request->opening_time,
                'closing_time' => $request->closing_time, 
            ]); 
        }

        if($request->wantsJson()) {
            if(isset($enterprise))
            {
                $empresa = Enterprise::with(['state', 'city'])->where('id', $enterprise->id)->first();
            }else {
                $empresa = Enterprise::with(['state', 'city'])->where('id', $empresa->id)->first();
            }
            
            $data =  [
                "enterprise" => $empresa,
                "time" =>  $empresa->getOperationTime(),
            ];
            return response()->json($data, 200);
        }

        return back();
    }

    public function agregarDirecciones(Request $request)
    {
        $user = auth()->user();

        $direccion = Address::create([
            'user_id' => $user->id,
            'address' => $request->address,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'township_id' => $request->township_id,
            'postal_code' => $request->postal_code,
            'responsable' => $request->responsable,
            'responsable_phone' => $request->responsable_phone,
            'delivery_route_id' => $request->delivery_route_id,
            'type' => $request->type,
        ]);

        if($request->wantsJson()) {
            $direccion = Address::with(['delivery_route', 'state', 'city'])->where('id', $direccion->id)->first();
            return response()->json($direccion, 200);
        }
        return back();
    }

    public function actualizarDireccion(Request $request, $id) 
    {
        $user = auth()->user();
        $direccion = Address::where('id', $id)->where('user_id', $user->id)->first();

        $direccion->update($request->all());

        return back();
    }

    public function obtenerDireccion($id)
    {
        $user = auth()->user();
        $direccion = Address::where('id', $id)->where('user_id', $user->id)->first();
        return response()->json($direccion, 200);
    }
}
