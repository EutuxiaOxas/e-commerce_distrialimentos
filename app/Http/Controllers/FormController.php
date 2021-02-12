<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enterprise;
use App\Direction;
use App\Category;

class FormController extends Controller
{
    //index
    function index() {
        //vars
        $user = auth()->user();
        $empresa =  Enterprise::find($user->id); //empresa
        $direcciones = Direction::find($user->id); //direcciones
        $categorias = Category::all();
        //result
        return view('formulario', compact('user','empresa','direcciones', 'categorias'));
    }

}
