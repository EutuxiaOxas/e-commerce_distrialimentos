<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
    public function index()
    {
    	$categorias = Category::all();
        $secName = 'tienda';
    	return view('cms.productos.category', compact('categorias', 'secName'));
    }


    public function guardarCategoria(Request $request)
    {
    	Category::create($request->all());

    	return back()->with('message', 'Categoría creada con éxito');
    }

    public function atualizarCategoria(Request $request, $id)
    {
    	$categoria = Category::find($id);

    	$categoria->update($request->all());

    	return back()->with('message', 'Categoria actualizada con éxito');
    }

    public function eliminarCategoria($id)
    {
    	$categoria = Category::find($id);

    	$categoria->delete();

    	return back()->with('error', 'Categoria Eliminada con éxito');
    }
}
