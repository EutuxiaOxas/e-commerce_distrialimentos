<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;

class AlmacenController extends Controller
{
    public function getAllProducts(Request $request)
    {
        if($request->search){
            $productos = Product::with(['category', 'cartDetail'])->where('title', 'LIKE', '%'.$request->search.'%')->paginate(25);
        }else {
            $productos = Product::with(['category', 'cartDetail'])->orderBy('id', 'DESC')->paginate(20);
        }
        $categorias = Category::all(); // categorias de productos
        
        return view('almacen', compact('productos', 'categorias'));
    }

    public function showProduct($slug)
    {
        $product = Product::where('slug', $slug)->with('images')->first();
        $categorias = Category::all();
        
        //PRECIOS POR UNIDAD

        $vipUnitPrice = round($product->vip_price / $product->units_packaging, 2);
        $alMayorUnitPrice = round($product->wholesale_price / $product->units_packaging, 2);
        $alGranMayorUnitPrice = round($product->big_wholesale_price / $product->units_packaging, 2);

        // dd($alGranMayorUnitPrice);

        return view('detalle', compact('product', 'categorias', 'vipUnitPrice', 'alMayorUnitPrice', 'alGranMayorUnitPrice'));
    }

    public function showProductsByCategory($slug)
    {
        $product_categorie = Category::where('slug', $slug)->first();
        $categorias = Category::all();
        $productos = $product_categorie->products()->paginate(25);
        return view('almacen', compact('productos', 'categorias', 'product_categorie' ));
    }

    public function showProductsByBrand($brand)
    {
        $product_brand = Brand::where('brand', $brand)->first();
        $categorias = Category::all();
        $productos = $product_brand->products()->paginate(25);
        return view('almacen', compact('productos', 'categorias'));
    }
    
}
