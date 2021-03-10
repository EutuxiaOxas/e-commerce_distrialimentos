<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enterprise;
use App\Address;
use App\Category;
use App\State;
use App\City;
use App\Township;
use App\DeliveryRoute;
use App\Banks_User;

class FormController extends Controller
{
    //index
    function index() {
        //vars
        $user = auth()->user();
        $carritoCompras = $user->cartVerify()->cartDetails()->get();
        $empresa =  Enterprise::where('user_id', $user->id)->first(); //empresa
        $direcciones = Address::where('user_id', $user->id)->get(); //direcciones
        $categorias = Category::all();
        $estados = State::all(); //estados
        $ciudades = City::all(); //ciudades
        $municipios = Township::all(); //municipios
        $rutaEntregas = DeliveryRoute::all(); //rutas de entrega
        $banks = Banks_User::all();

        if(sizeof($carritoCompras) == 0) {
            return redirect('/almacen');

        }

        //result
        return view('formulario', compact('user','empresa','direcciones', 'categorias','estados', 'ciudades', 'municipios', 'rutaEntregas', 'banks'));
    }

    //Agradecimiento
    function thanks() {
        //vars
        $user = auth()->user();
        $categorias = Category::all();
        //result
        return view('pedido-completado', compact('user', 'categorias'));
            
    }

}
