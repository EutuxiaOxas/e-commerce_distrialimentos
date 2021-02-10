<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\ProductImage;
use App\Iva;
use App\Packaging;
use Storage;
use Str;


class ProductController extends Controller
{
    //--------- PAGINA PRINCIPAL TIENDA/PRODUCTOS -------
    public function index()
    {
    	$productos = Product::all();
        $secName = 'tienda';
    	return view('cms.productos.productos', compact('productos', 'secName'));
    }
    //--------- VERIFICACIÓN SLUG PRODUCTO -------
    public function verifySlug(Request $request, $slug)
    {

        $slug = Product::where('slug', $slug)->first();
        $producto = Product::find($request->product_id);

        if(isset($slug) && $slug->id == $producto->id){
            return 'aceptado';
        }

        if(isset($slug))
        {
            return 'ocupado';
        }else
        {
            return 'aceptado';
        }
    }

    public function crearProducto()
    {
        $ivas = Iva::all();
        $packagings = Packaging::all();
    	$categorias = Category::all();
        $secName = 'tienda';
    	return view('cms.productos.crear_producto', compact('categorias', 'secName', 'packagings', 'ivas'));
    }
    //--------- GUARDAR PRODUCTO -------
    public function guardarProducto(Request $request)
    {

    	$path = $request->file('image')->store('public');
    	$file = Str::replaceFirst('public/', '',$path);
        $producto = new Product;
        
        $precioAlMayor = $request->wholesale_price;
        $unidadesEmpaquetado = $request->units_packaging;

		$guardado = $producto->create([
	        'title' => $request->title,
	        'description' =>$request->description,
	        'category_id' => $request->category_id,
            'slug' => $request->slug."-".$request->sku,
	        'image' => $file,
            'sku' => $request->sku,
            'discount' => $request->discount,
            'available_stock' => $request->available_stock,
            'bar_code' => $request->bar_code,
            'iva_id' => $request->iva_id,
            'unit_price' => $precioAlMayor / $unidadesEmpaquetado,
            'wholesale_price' => $request->wholesale_price, 
            'big_wholesale_price' => $request->big_wholesale_price,
            'amount_min_big_wholesale' => $request->amount_min_big_wholesale,
            'packaging_id'  => $request->packaging_id,
            'units_packaging' =>  $request->units_packaging,
            'vip_price' => $request->vip_price,
            'amount_min_wholesale' => $request->amount_min_wholesale,
            'amount_min_vip' => $request->amount_min_vip,
            'detail_price' => $request->detail_price
        ]);
        

        //--------- GUARDAR IMAGENES SECUNDARIOS EN CASO DE EXISTIR -------
        if($request->file('second_image'))
        {
            foreach ($request->file('second_image') as $file) {
                $path_s = $file->store('public');
                $file_s = Str::replaceFirst('public/', '',$path_s);

                ProductImage::create([
                    'product_id' => $guardado->id,
                    'image' => $file_s,
                ]);
            }
        }

        
	    return back()->with('message', 'Producto creado con éxito');
    }

    public function editarProducto($id)
    {
        $product = Product::find($id);
        $ivas = Iva::all();
        $packagings = Packaging::all();
    	$categorias = Category::all();
        $secName = 'tienda';
    	return view('cms.productos.editar_producto', compact('product', 'categorias', 'secName', 'ivas', 'packagings'));
    }


    public function actualizarProducto(Request $request, $id)
    {


        $product = Product::find($id);
        
        $precioAlMayor = $request->wholesale_price;
        $unidadesEmpaquetado = $request->units_packaging;

        //--------- ACTUALIZAR DATOS Y IMAGEN PRINCIPAL DEL PRODUCTO -------
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
                    'category_id' => $request->category_id,
                    'slug' => $request->slug."-".$request->sku,
                    'image' => $file,
                    'sku' => $request->sku,
                    'discount' => $request->discount,
                    'available_stock' => $request->available_stock,
                    'bar_code' => $request->bar_code,
                    'iva_id' => $request->iva_id,
                    'detail_price' => $precioAlMayor / $unidadesEmpaquetado,
                    'wholesale_price' => $request->wholesale_price, 
                    'big_wholesale_price' => $request->big_wholesale_price,
                    'amount_min_big_wholesale' => $request->amount_min_big_wholesale,
                    'packaging_id'  => $request->packaging_id,
                    'units_packaging' =>  $request->units_packaging,
                    'vip_price' => $request->vip_price,
                    'amount_min_wholesale' => $request->amount_min_wholesale,
                    'amount_min_vip' => $request->amount_min_vip
    	        ]);
    	    } else {
    	        return back()->with('message', 'No se pudo actualizar el producto');
    	    }
    	} else {
    	    $product->update([
    	        'title' => $request->title,
                'description' =>$request->description,
                'category_id' => $request->category_id,
                'slug' => $request->slug."-".$request->sku,
                'sku' => $request->sku,
                'discount' => $request->discount,
                'available_stock' => $request->available_stock,
                'bar_code' => $request->bar_code,
                'iva_id' => $request->iva_id,
                'unit_price' => $precioAlMayor / $unidadesEmpaquetado,
                'wholesale_price' => $request->wholesale_price, 
                'big_wholesale_price' => $request->big_wholesale_price,
                'amount_min_big_wholesale' => $request->amount_min_big_wholesale,
                'packaging_id'  => $request->packaging_id,
                'units_packaging' =>  $request->units_packaging,
                'vip_price' => $request->vip_price,
                'amount_min_wholesale' => $request->amount_min_wholesale,
                'amount_min_vip' => $request->amount_min_vip,
                'detail_price'  => $request->detail_price
    	    ]);
    	}

        //--------- AGREGAR IMAGENES SECUNDARIAS A PRODUCTO EXISTENTE -------
        if($request->file('second_image'))
        {
            foreach ($request->file('second_image') as $file) {
                $path_s = $file->store('public');
                $file_s = Str::replaceFirst('public/', '',$path_s);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $file_s,
                ]);
            }
        }

        return back()->with('message', 'Producto actualizado con éxito');
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
