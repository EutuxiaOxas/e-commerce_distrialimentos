<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

use Storage;
use Str;


class ProductController extends Controller
{
    public function index()
    {
    	$productos = Product::all();

    	return view('cms.productos.productos', compact('productos'));
    }

    public function crearProducto()
    {
    	$categorias = Category::all();
    	return view('cms.productos.crear_producto', compact('categorias'));
    }

    public function guardarProducto(Request $request)
    {
    	$path = $request->file('image')->store('public');
    	$file = Str::replaceFirst('public/', '',$path);

		$producto = new Product;

		$producto->create([
	        'title' => $request->title,
	        'description' =>$request->description,
	        'price' => $request->price,
	        'category_id' => $request->category_id,
	        'image' => $file,
	    ]);

	    return back()->with('message', 'Producto creado con éxito');
    }

    public function editarProducto($id)
    {
    	$product = Product::find($id);
    	$categorias = Category::all();
    	return view('cms.productos.editar_producto', compact('product', 'categorias'));
    }


    public function actualizarProducto(Request $request, $id)
    {


    	$product = Product::find($id);

    	if($request->file('image'))
    	{
    	    $deleted = Storage::disk('public')->delete($product->image);

    	    if(isset($deleted) || $product->image == null)
    	    {
    	        $path = $request->file('image')->store('public');

    	        $file = Str::replaceFirst('public/', '',$path);

    	        $product->update([
    	            'title' => $request->title,
    	            'description' =>$request->description,
    	            'price' => $request->price,
    	            'category_id' => $request->category_id,
    	            'image' => $file,
    	        ]);
    	        
    	        return back()->with('message', 'Producto actualizado con éxito');
    	    } else {
    	        return back()->with('message', 'No se pudo actualizar el producto');
    	    }
    	} else {
    	    $product->update([
    	        'title' => $request->title,
    	        'price' => $request->price,
    	        'category_id' => $request->category_id,
    	        'description' =>$request->description,
    	    ]);

    	    return back()->with('message', 'Producto actualizado con éxito');
    	}
    }

    public function eliminarProducto($id)
    {
    	$product = Product::find($id);


    	$deleted = Storage::disk('public')->delete($product->image);

    	if(isset($deleted) || $product->image == null)
    	{
    		$product->delete();

    		return back()->with('error', 'Producto eliminado con éxito');
    	}

    	return back()->with('error', 'No se pudo eliminar el producto');

    }

}
