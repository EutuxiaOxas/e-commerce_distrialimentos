<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo_Banner;

use Storage;
use Str;

class PromotionController extends Controller
{
    public function index()
    {
		$banners = Logo_Banner::All();
        $secName = 'web';
    	return view('cms.promociones.index')->with(compact('banners', 'secName'));
    }

    public function crearPromocion()
    {
		$secName = 'web';
    	return view('cms.promociones.crear_promocion', compact('secName'));
    }
	
    public function agregarPromocion(Request $request)
    {

		$path = $request->file('image')->store('public');
    	$file = Str::replaceFirst('public/', '',$path);

    	$banner = new Logo_Banner;

    	$banner->create([
            'image' => $file,
            'url' => $request->url,
            'tipo' => $request->tipo,
            'status' => $request->status,
        ]);

    	return back()->with('message', 'Banner creado con éxito!');
    }



    public function editarPromocion($id)
    {
		$banner = Logo_Banner::find($id);
        $secName = 'web';
        return view('cms.promociones.editar_promocion', compact('banner', 'secName'));
    }

    public function actualizarPromocion(Request $request, $id)
    {
		$banner = Logo_Banner::find($id);

        if($request->file('image'))
        {
            $deleted = Storage::disk('public')->delete($banner->image);

            if(isset($deleted) || $banner->image == null)
            {
                $path = $request->file('image')->store('public');

                $file = Str::replaceFirst('public/', '',$path);

                $banner->update([
                    'title' => $request->title,
                    'description' =>$request->description,
                    'image' => $file,
                ]);
                
                return back()->with('message', 'Banner actualizado con éxito');
            } else {
                return back()->with('message', 'No se pudo actualizar el banner');
            }
        } else {
            $banner->update([
                'title' => $request->title,
                'description' =>$request->description,
            ]);

            return back()->with('message', 'Banner actualizado con éxito');
        }
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


	public function activarBanner($id)
    {
        $banner = Logo_Banner::find($id);

        $banner->status = 1;
        $banner->save();

        return back()->with('message', 'Banner activado con éxito');

    }

    public function ocultarBanner($id)
    {
        $banner = Logo_Banner::find($id);

        $banner->status = 0;
        $banner->save();

        return back()->with('error', 'Banner ocultado con éxito');
    }
}
