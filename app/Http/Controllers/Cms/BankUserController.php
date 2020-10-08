<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Banks_User;
class BankUserController extends Controller
{
    public function index()
    {
    	$banksUser	= Banks_User::all();
    	$secName = 'bancos';

    	return view('cms.configuraciones.bancos_user', compact('banksUser', 'secName'));
    }

    public function agregarCuenta()
    {
    	$secName = 'bancos';
    	return view('cms.configuraciones.bancos_users.crear_bancos_user', compact('secName'));
    }

    public function guardarCuenta(Request $request)
    {
    	Banks_User::create($request->all());

    	return back()->with('message', 'Cuenta de banco agregada con éxito!');
    }

    public function editarCuenta($id){
    	$cuenta = Banks_User::find($id);
    	$secName = 'bancos';

    	return view('cms.configuraciones.bancos_users.editar_bancos_user', compact('cuenta', 'secName'));
    }

    public function actualizarCuenta(Request $request, $id)
    {
    	$cuenta = Banks_User::find($id);

    	$cuenta->update($request->all());

    	return back()->with('message', 'Cuenta actualizada con éxito');
    }
}
