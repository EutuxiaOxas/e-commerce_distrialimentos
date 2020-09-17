<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo_Banner;
use App\Product;
use App\Category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function lading()
    {
        $sliders = Logo_Banner::where('tipo', 'banner')->where('status', 1)->get();
        $logo = Logo_Banner::where('tipo', 'logo')->first();
        return view('landing', compact('sliders', 'logo'));
    }


    public function products()
    {
        $productos = Product::paginate(25);
        $categorias = Category::all();
        $logo = Logo_Banner::where('tipo', 'logo')->first();
        return view('productos', compact('productos', 'categorias', 'logo'));
    }

    public function showProduct($id)
    {
        $product = Product::find($id);
        $logo = Logo_Banner::where('tipo', 'logo')->first();

        return view('ver_producto', compact('product', 'logo'));
    }
}
