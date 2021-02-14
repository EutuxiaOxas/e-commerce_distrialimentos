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

class FormController extends Controller
{
    //index
    function index() {
        //vars
        $user = auth()->user();
        $empresa =  Enterprise::where('user_id', $user->id)->first(); //empresa
        $direcciones = Address::where('user_id', $user->id)->get(); //direcciones
        $categorias = Category::all();
        $estados = State::all(); //estados
        $ciudades = City::all(); //ciudades
        $municipios = Township::all(); //municipios
        $rutaEntregas = DeliveryRoute::all(); //rutas de entrega
        //result
        return view('formulario', compact('user','empresa','direcciones', 'categorias','estados', 'ciudades', 'municipios', 'rutaEntregas'  ));
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
