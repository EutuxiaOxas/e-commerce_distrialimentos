<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enterprise;
use App\Direction;

class PerfilController extends Controller
{
    //dashboard - mis datos
    public function mis_datos()
    {
        $user = auth()->user();
        $empresa =  Enterprise::find($user->id); //empresa
        $direcciones = Direction::find($user->id); //direcciones
        $ordenes = $user->orders()->where('status', '!=', 'CANCELADO')->orderBy('id', 'DESC')->paginate(3);

        return view('perfil.mis_datos', compact('user', 'ordenes','empresa','direcciones'));
    }

    //dashboard - mis compras
    public function mis_compras()
    {
        return view('perfil.compras');

    }
}
