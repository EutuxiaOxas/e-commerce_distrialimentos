<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enterprise;
use App\Address;
use App\Category;

class FormController extends Controller
{
    //index
    function index() {
        //vars
        $user = auth()->user();
        $empresa =  Enterprise::find($user->id); //empresa
        $direcciones = Address::find($user->id); //direcciones
        $categorias = Category::all();
        //result
        return view('formulario', compact('user','empresa','direcciones', 'categorias'));
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
