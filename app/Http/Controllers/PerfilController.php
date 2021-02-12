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
        $ordenes = $user->orders()->where('status', '!=', 'CANCELADO')->orderBy('id', 'DESC')->paginate(3);
        $categorias = Category::all();
        return view('perfil.mis_datos', compact('user', 'ordenes','empresa','direcciones', 'ciudades', 'estados', 'municipios', 'rutaEntregas','categorias'));
    }

    //dashboard - mis compras
    public function mis_compras()
    {
        $categorias = Category::all();
        return view('perfil.compras', compact('categorias'));

    }

    public function agregarDatosPersonales(Request $request)
    {
        $user = auth()->user();

        $user->update($request->all());

        return back();
    }

    public function agregarDatosDeEmpresa(Request $request)
    {
        $user = auth()->user();

        if($user->enterprise) {
            $empresa = Enterprise::update($request->all());
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
            'type' => 'direccion',
        ]);

        return back();
    }
}
