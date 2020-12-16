<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;

use Storage;
use Str;
class PromotionController extends Controller
{
    public function index()
    {
    	$promotions = Promotion::all();
    	$secName = 'promociones';
    	return view('cms.promociones.index', compact('promotions', 'secName'));
    }

    public function crearPromocion()
    {
    	$secName = 'promociones';
    	return view('cms.promociones.crear_promocion', compact('secName'));
    }


    public function agregarPromocion(Request $request)
    {

    	$path = $request->file('image')->store('public');
    	$file = Str::replaceFirst('public/', '',$path);

		$promocion = Promotion::create([
			'name' => $request->name,
			'order' => $request->order,
			'url' => $request->url,
			'image' => $file,
		]);


		return back()->with('message', 'Promocion agregada con éxito!');
    }


    public function editarPromocion($id)
    {
    	$promocion = Promotion::find($id);
    	$secName = 'promociones';

    	return view('cms.promociones.editar_promocion', compact('promocion', 'secName'));
    }

    public function actualizarPromocion(Request $request, $id)
    {
    	$promocion = Promotion::find($id);


    	if($request->file('image'))
    	{
    	    $deleted = Storage::disk('public')->delete($promocion->image);

    	    if(isset($deleted) || $promocion->image == null)
    	    {

    	    	$path = $request->file('image')->store('public');
    			$file = Str::replaceFirst('public/', '',$path);

    	    	$promocion->update([
    	    		'name' => $request->name,
    	    		'order' => $request->order,
    	    		'url' => $request->url,
    	    		'image' => $file,
    	    	]);
    	    }else {
    	    	return back()->with('error', 'Ha ocurrido un error, intentelo nuevamente');
    	    }

    	} else {
    		$promocion->update([
    			'name' => $request->name,
    			'order' => $request->order,
    			'url' => $request->url,
    		]);
    	}

    	return back()->with('message', 'Promocion actualizada con éxito');
    }


    public function eliminarPromocion($id)
    {
    	$promocion = Promotion::find($id);

    	$deleted = Storage::disk('public')->delete($promocion->image);

    	if(isset($deleted) || $promocion->image == null)
    	{
    		$promocion->delete();

    		return back()->with('error', 'Promocion eliminada con éxito');
    	}

    	return back()->with('error', 'No se pudo eliminar la promocion');
    }
}
