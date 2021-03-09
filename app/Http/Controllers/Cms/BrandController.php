<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;

use Storage;
use Str;


class BrandController extends Controller
{
        //--------- PAGINA PRINCIPAL TIENDA/Marcas ------- 
        public function index()
        {
            $marcas = Brand::all();
            $secName = 'bancos';
            return view('cms.configuraciones.brand', compact('marcas', 'secName'));
        }


            //--------- VERIFICACIÓN SLUG DE TIENDA/MARCAs A TAVÉS DE AJAX -------
    public function verifySlug($slug)
    {
        $slug = Brand::where('slug', $slug)->first();
        if(isset($slug))
        {
            return 'ocupado';
        }else
        {
            return 'aceptado';
        }
    }
    //--------- OBTENER MARCA A TRAVÉS DE AJAX -------
    public function getBrand($id)
    {
        $brand = Brand::find($id);
        $data = [
            'slug' => $brand->slug,
            'marcas' => Brand::where('padre_id', 0)->get(),
        ];
        return $data;
    }
    //--------- GUARDAR -------
    public function guardarMarca(Request $request)
    {   
        $path2 = $request->file('banner')->store('public');
        $file2 = Str::replaceFirst('public/', '',$path2);
        
        $new_brand = new Brand();
        $new_brand->name =  $request->name;
        $new_brand->description =  $request->description;
        $new_brand->banner =  $file2;
        //guardar 
        $new_brand->save();
    	return back()->with('message', 'Marca creada con éxito');
    }
    //--------- ACTUALIZAR -------
    public function atualizarMarca(Request $request, $id)
    {
        $marca = Brand::find($id);
        $band1 = false;
        $band2 = false;
        //se modifico el icono
        if($request->file('icono'))
        {
            $deleted = Storage::disk('public')->delete($marca->icono);

            if(isset($deleted) || $marca->icono == null)
            {
                $path1 = $request->file('icono')->store('public');
                $file1 = Str::replaceFirst('public/', '',$path1);
                $band1=true;
               
            } else {
                return back()->with('message', 'No se pudo actualizar la marca');
            }
        }
          //se modifico la imagen principal
          if($request->file('image_main'))
          {
              $deleted = Storage::disk('public')->delete($marca->image_main);
  
              if(isset($deleted) || $marca->image_main == null)
              {
                  $path2 = $request->file('image_main')->store('public');
                  $file2 = Str::replaceFirst('public/', '',$path2);
                  $band2 = true;

                
              } else {
                  return back()->with('message', 'No se pudo actualizar la marca');
              }
          }
        //almacenar
        if ($band1 && $band2){ 
            $marca->update([
                'title' => $request->title,
                'description' => $request->description,
                'padre_id' => $request->padre_id,
                'slug' => $request->slug,
                'icono' => $file1,
                'image_main' => $file2,
            ]);
        }else{
            if ($band1){
                $marca->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'padre_id' => $request->padre_id,
                    'slug' => $request->slug,
                    'icono' => $file1,
                ]);
            }else{
                if($band2){
                    $marca->update([
                        'title' => $request->title,
                        'description' => $request->description,
                        'padre_id' => $request->padre_id,
                        'slug' => $request->slug,
                        'image_main' => $file2,
                    ]);
                }else{
                    $marca->update([
                        'title' => $request->title,
                        'description' => $request->description,
                        'padre_id' => $request->padre_id,
                        'slug' => $request->slug,
                    ]);
                }

            }
        }

    	return back()->with('message', 'Marca actualizada con éxito');
    }
    //--------- ELIMINAR -------
    public function eliminarMarca($id)
    {
    	$marca = Brand::find($id);

    	$marca->delete();

    	return back()->with('error', 'Marca Eliminada con éxito');
    }
    
}
