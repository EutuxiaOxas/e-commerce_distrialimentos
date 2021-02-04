<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AlmacenController extends Controller
{
    public function getAllProducts()
    {
        $productos = Product::with(['category'])->orderBy('id', 'DESC')->paginate(20);

        return view('sketch.almacen', compact('productos'));
    }

    public function showProduct($slug)
    {
        $product = Product::where('slug', $slug)->with('images')->first();

        return view('sketch.detalle', compact('product'));
    }
}
