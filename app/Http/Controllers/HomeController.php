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
   
    public function index()
    {
        $banners_principales = Logo_Banner::where('tipo','principal')->where('status','1')->get();
        $banners_promocionales = Logo_Banner::where('tipo','promocional')->where('status','1')->get();
        $categories = Category::all();
        $categorias = $categories;
        $productos_destacados= Product::where('isfeatured','1')->orderByRaw('rand()')->take(12)->get();
        $productos_recientes= Product::latest()->orderByRaw('rand()')->take(12)->get();
        //dos categorias ramdon en el Home    
        $dos_categorias  = Category::orderByRaw('rand()')->take(2)->get();
        if($dos_categorias){
            $productos_cat_uno= Product::where('category_id',$dos_categorias[0]->id)->orderByRaw('rand()')->take(12)->get();
            $productos_cat_dos= Product::where('category_id',$dos_categorias[1]->id)->orderByRaw('rand()')->take(12)->get();
        }else{
            $productos_cat_uno= null;
            $productos_cat_dos= null;
        }
        return view('home', compact('banners_principales','banners_promocionales', 'categories','categorias','productos_destacados','productos_recientes','dos_categorias','productos_cat_uno','productos_cat_dos' ));
    }

     public function lading()
    {
        $sliders = Logo_Banner::where('tipo', 'banner')->where('status', 1)->get();
        $logo = Logo_Banner::where('tipo', 'logo')->first();
        $categorias = Category::all();

        return view('landing', compact('sliders', 'logo','categorias'));
    }


    public function products(Request $request)
    {

        if(isset($request->search))
        {
            $productos = Product::where('title', 'LIKE', '%'.$request->search.'%')->paginate(25);
        }else {
            $productos = Product::paginate(25);
        }
        
        $categorias = Category::all();
        $logo = Logo_Banner::where('tipo', 'logo')->first();
        return view('productos', compact('productos', 'categorias', 'logo'));
    }

    public function showProduct($slug)
    {
        $product = Product::where('slug', $slug)->with('images')->first();
        $logo = Logo_Banner::where('tipo', 'logo')->first();

        return view('ver_producto', compact('product', 'logo'));
    }

    public function showProductsByCategory($slug)
    {
        $product_categorie = Category::where('slug', $slug)->first();
        $categorias = Category::all();
        $logo = Logo_Banner::where('tipo', 'logo')->first();
        $productos = $product_categorie->products()->paginate(25);

        return view('productos', compact('productos', 'categorias', 'logo', 'product_categorie'));
    }

    public function verCarrito()
    {
        $logo = Logo_Banner::where('tipo', 'logo')->first();
        if(auth()->user())
        {
            $cart = auth()->user()->cartVerify();
            $cart_details = $cart->cartDetails()->with('product')->get();
            return view('carrito', compact('cart_details', 'logo'));
        }else {
            return view('carrito', compact('logo'));
        }
    }

 
}
