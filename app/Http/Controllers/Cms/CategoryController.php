<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

use Storage;
use Str;

class CategoryController extends Controller
{
    //--------- PAGINA PRINCIPAL TIENDA/CATEGORIAS ------- 
    public function index()
    {
    	$categorias = Category::all();
        $secName = 'tienda';
    	return view('cms.productos.category', compact('categorias', 'secName'));
    }

    //--------- VERIFICACIÓN SLUG DE TIENDA CATEGORIA A TAVÉS DE AJAX -------
    public function verifySlug($slug)
    {
        $slug = Category::where('slug', $slug)->first();
        if(isset($slug))
        {
            return 'ocupado';
        }else
        {
            return 'aceptado';
        }
    }
    //--------- OBTENER CATEGORIA A TRAVÉS DE AJAX -------
    public function getCategory($id)
    {
        $category = Category::find($id);
        $data = [
            'slug' => $category->slug,
            'categorias' => Category::where('padre_id', 0)->get(),
        ];
        return $data;
    }
    //--------- GUARDAR -------
    public function guardarCategoria(Request $request)
    {   $path1 = $request->file('icono')->store('public');
        $path2 = $request->file('image_main')->store('public');
        $file1 = Str::replaceFirst('public/', '',$path1);
        $file2 = Str::replaceFirst('public/', '',$path2);


    	Category::create([
            'title' => $request->title,
            'description' => $request->description,
            'padre_id' => $request->padre_id,
            'slug' => $request->slug,
            'icono' => $file1,
            'image_main' => $file2,
        ]);

    	return back()->with('message', 'Categoría creada con éxito');
    }
    //--------- ACTUALIZAR -------
    public function atualizarCategoria(Request $request, $id)
    {
    	$categoria = Category::find($id);

        if($request->file('icono'))
        {
            $deleted = Storage::disk('public')->delete($categoria->icono);

            if(isset($deleted) || $categoria->icono == null)
            {
                $path = $request->file('icono')->store('public');

                $file = Str::replaceFirst('public/', '',$path);

                $categoria->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'padre_id' => $request->padre_id,
                    'slug' => $request->slug,
                    'icono' => $file,
                ]);
            } else {
                return back()->with('message', 'No se pudo actualizar la categoria');
            }
        } else {
            $categoria->update([
                'title' => $request->title,
                'description' => $request->description,
                'padre_id' => $request->padre_id,
                'slug' => $request->slug,
            ]);
        }

    	return back()->with('message', 'Categoria actualizada con éxito');
    }
    //--------- ELIMINAR -------
    public function eliminarCategoria($id)
    {
    	$categoria = Category::find($id);

    	$categoria->delete();

    	return back()->with('error', 'Categoria Eliminada con éxito');
    }
}
