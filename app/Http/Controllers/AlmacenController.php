<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class AlmacenController extends Controller
{
    public function getAllProducts()
    {
        $productos = Product::with(['category', 'cartDetail'])->orderBy('id', 'DESC')->paginate(20);
        $categorias = Category::all(); // categorias de productos
        return view('sketch.almacen', compact('productos', 'categorias'));
    }

    public function showProduct($slug)
    {
        $product = Product::where('slug', $slug)->with('images')->first();
        $categorias = Category::all();
        return view('sketch.detalle', compact('product', 'categorias'));
    }

    public function showProductsByCategory($slug)
    {
        $product_categorie = Category::where('slug', $slug)->first();
        $categorias = Category::all();
        $productos = $product_categorie->products()->paginate(25);
        return view('sketch.almacen', compact('productos', 'categorias'));
    }
}
