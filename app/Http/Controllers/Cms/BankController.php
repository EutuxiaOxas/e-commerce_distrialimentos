<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bank;
class BankController extends Controller
{
    public function index()
    {
    	$banks = Bank::all();
    	$secName = 'bancos';
    	return view('cms.configuraciones.bancos', compact('banks', 'secName'));
    }

    public function getBank($id){
    	$banco = Bank::find($id);

    	return $banco;
    }

    public function agregarBanco(Request $request)
    {
    	Bank::create($request->all());

    	return back()->with('message', 'Banco agregado con éxito!');
    }

    public function actualizarBanco(Request $request, $id){
    	$banco = Bank::find($id);

    	$banco->update($request->all());

    	return back()->with('message', 'Banco actualizado con éxito!');
    }
}
