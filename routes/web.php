<?php

use Illuminate\Support\Facades\Route;
use App\Banks_User;
use App\Logo_Banner;
use App\Category;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// SOLO PARA MAQUETACION 

//CAMBIAR TIPO DE MONEDA
Route::get('/currency/{type}', function($type) {
	if($type === 'usd')
	{

		if(session()->has('currency')) {
			session()->forget('currency');
			session(['currency' => 'USD']);
		}

	}else 
	{
		if(session()->has('currency')) {
			session()->forget('currency');
			session(['currency' => 'VES']);
		}
	}

	return back();
})->name('active.curency');

//home 
Route::get('/', 'HomeController@index' )->name('home');

//nosotros 
Route::get('/nosotros', function () {
	return view('sketch.nosotros');
});

//Almacen
Route::get('/almacen', 'AlmacenController@getAllProducts')->name('almacen.all');

//detalle 
Route::get('/detalle', function () {
	return view('sketch.detalle');
});

//formulario 
Route::get('/formulario', 'FormController@index')->middleware('auth')->name('formulario');
Route::get('/gracias-por-su-pedido', 'FormController@thanks')->name('formulario.thanks');

//perfil - home - datos 
// Route::get('/perfil', function () {
// 	return view('perfil');
// })->name('perfil');

//perfil - direcciones 
Route::get('/perfil/direcciones', function () {
	return view('sketch.perfil-direcciones');
});

//perfil - pedidos solicitados
Route::get('/perfil/pedidos', function () {
	return view('sketch.pedidos-pedidos');
});

//perfil - historial de pedidos
Route::get('/perfil/historial', function () {
	return view('sketch.pedidos-historial');
});

//formularios usuarios sin datos
Route::get('/formulario-sindatos', function () {
	return view('sketch.formulario-sindatos');
});


//carrito de compras
Route::get('/carrito-de-compra', function () {
	return view('sketch.carrito-de-compra');
});


Route::get('/header', function () {
	return view('sketch.header');
});

//ayuda 
Route::get('/ayuda', function () {
	$categorias = Category::all();
	return view('en_desarrollo', compact('categorias'));
})->name('ayuda');

//Soy nuevo 
Route::get('/soy-nuevo', function () {
	$categorias = Category::all();
	return view('en_desarrollo', compact('categorias'));
})->name('soy-nuevo');

//politicas 
Route::get('/politicas', function () {
	$categorias = Category::all();
	return view('en_desarrollo', compact('categorias'));
})->name('politicas');

//Formulario nuevo usuario/Usuario no loggeado
Route::get('/formulario_nuevo', function () {
	return view('sketch.formulario_nuevo');
});

//FIN DE SOLO PARA MAQUETACION





//Route::get('/', 'HomeController@lading')->name('home');

Route::get('/auth/google', 'LoginGoogleController@loginRedirect')->name('google.login');
Route::get('/auth/google/callback', 'LoginGoogleController@loginCallback');

// CAMBIAR CONTRASEÑA

Route::middleware('auth')->group(function () {
	Route::get('/auth/change-password', 'PerfilController@cambiarContraseñaView')->name('change.password.view');
	Route::post('/auth/change-password', 'PerfilController@cambiarContraseñaUsuario')->name('change.password');
});

//--------- PERFIL ROUTES ---------
Route::middleware('auth')->group(function () {

	Route::get('/perfil', 'PerfilController@mis_datos')
	->name('perfil.home');

	Route::get('/perfil/compras', 'PerfilController@mis_compras')
	->name('perfil.compras');
	Route::get('/perfil/get/address/{id}', 'PerfilController@obtenerDireccion');

	Route::post('/perfil/userInfo', 'PerfilController@agregarDatosPersonales')->name('user.info.update');
	Route::post('/perfil/userEnterprise/update', 'PerfilController@agregarDatosDeEmpresa')->name('user.enterprise.update');
	Route::post('/perfil/userShippingAddreses/add', 'PerfilController@agregarDirecciones')->name('user.addreses.add');
	Route::post('/perfil/userShippingAddreses/update/{id}', 'PerfilController@actualizarDireccion')->name('user.addreses.update');
});

// Route::get('/productos', 'HomeController@products')->name('productos');
Route::get('/producto/{slug}', 'AlmacenController@showProduct')->name('producto.show');
Route::get('/categoria-productos/{slug}', 'AlmacenController@showProductsByCategory')->name('product.category.show');
Route::get('/marca-producto/{brand}', 'AlmacenController@showProductsByBrand')->name('product.brand.show');


Route::get('/cart', 'CartController@getCart');
Route::get('/cart/ver', 'HomeController@verCarrito');
Route::post('/cart/add', 'CartController@addToCart');
Route::post('/cart/quantity/{id}', 'CartController@aumentarCantidad');
Route::post('/cart/storage', 'CartController@addStorageToCart');
Route::post('/cart/item/delete/{id}', 'CartController@eliminarDetalle')->name('cart.detail.destroy');
Route::get('/cart/delete', 'CartController@vaciarCarrito')->name('cart.destroy');
Route::post('/cart/change/count', 'CartController@updateCount');
Route::get('/cart/amount', 'CartController@getCartTotalAmount');

Auth::routes();

/*---------------Login --------------*/
Route::get('/admin', 'Cms\LoginController@index');

//Metodo posts
Route::post('/cms/login', 'Cms\LoginController@login')->name('login.admin');
Route::post('/admin/logout', 'Cms\LoginController@logout')->name('login.logout');

/*---------------CMS ACCESO --------------*/

Route::middleware('cms')->group(function () {
	Route::get('/cms', 'Cms\IndexController@index')->name('cms.home');

	//-------------- BANCOS -----------
	Route::get('/cms/bancos', 'Cms\BankController@index')->name('bank.home');

	Route::get('/cms/get/bank/{id}', 'Cms\BankController@getBank');

	Route::post('/cms/agregar/banco', 'Cms\BankController@agregarBanco')->name('bank.store');
	Route::post('/cms/update/banco/{id}', 'Cms\BankController@actualizarBanco');

	//-------------- CUENTAS DE BANCO -----------
	Route::get('/cms/cuentas', 'Cms\BankUserController@index')->name('bank.user.home');
	Route::get('/cms/crear/cuenta', 'Cms\BankUserController@agregarCuenta')->name('bank.user.create');
	Route::get('/cms/editar/cuenta/{id}', 'Cms\BankUserController@editarCuenta')->name('bank.user.edit');


	Route::post('/cms/guardar/cuenta', 'Cms\BankUserController@guardarCuenta')->name('bank.user.store');
	Route::post('/cms/actualizar/cuenta/{id}', 'Cms\BankUserController@actualizarCuenta')->name('bank.user.update');

	//-------------- PROMOCIONES -----------
	Route::get('/cms/promociones', 'PromotionController@index')->name('promociones.home');
	Route::get('/cms/promociones/crear', 'PromotionController@crearPromocion')->name('promociones.create');
	Route::get('/cms/promociones/editar/{id}', 'PromotionController@editarPromocion')->name('promociones.show');

	Route::post('/cms/promociones/create', 'PromotionController@agregarPromocion')->name('promociones.store');
	Route::post('/cms/promociones/update/{id}', 'PromotionController@actualizarPromocion')->name('promociones.update');
	Route::post('/cms/promociones/eliminar/{id}', 'PromotionController@eliminarPromocion');
});

/*---------------ADMINISTRADORES --------------*/
Route::middleware('admin')->group(function () {
	/*---------------Usuarios --------------*/
		Route::get('/cms/admin_users', 'Cms\IndexController@adminUsers')->name('cms.users');
		Route::get('/cms/get/user/{id}', 'Cms\UserController@getUser');
		//Metodo posts
		Route::post('/cms/user/create', 'Cms\UserController@makeUser')->name('cms.users.create');
		Route::post('/cms/update/user/{id}', 'Cms\UserController@editUser');
		Route::post('/cms/password/user/{id}', 'Cms\UserController@editPassword');
		Route::post('/cms/eliminar/user/{id}', 'Cms\UserController@eliminarUsuario');
});

/*---------------EDITORES LANDING PAGE CMS--------------*/
Route::middleware('landing')->group(function () {
	
	Route::get('/cms/banners', 'Cms\LogoBannerController@index')->name('banners.home');
	Route::get('/cms/crear/banner', 'Cms\LogoBannerController@crearBanner')->name('banners.create');
	Route::get('/cms/editar/banner/{id}', 'Cms\LogoBannerController@editarBanner')->name('banners.show');

		//posts
	Route::post('/cms/guardar/banner', 'Cms\LogoBannerController@guardarBanner')->name('banners.store');
	Route::post('/cms/actualizar/banner/{id}', 'Cms\LogoBannerController@actualizarBanner')->name('banners.update');
	Route::post('/cms/eliminar/banner/{id}', 'Cms\LogoBannerController@eliminarBanner')->name('banners.destroy');
	Route::post('/cms/guardar/logo', 'Cms\LogoBannerController@guardarLogo')->name('banners.logo');

	//ocultar/activar banners principales
	Route::get('/cms/activar/banner/{id}', 'Cms\LogoBannerController@activarBanner')->name('banners.active');
	Route::get('/cms/ocultar/banner/{id}', 'Cms\LogoBannerController@ocultarBanner')->name('banners.desactive');
	//ocultar/activar banners promocionales
	Route::get('/cms/activar/promociones/{id}', 'Cms\PromotionController@activarBanner')->name('promociones.active');
	Route::get('/cms/ocultar/promociones/{id}', 'Cms\PromotionController@ocultarBanner')->name('promociones.desactive');

});

Route::middleware('tienda')->group(function () {
	
	/*--------------- VISTA TIENDA VIRTUAL --------------*/
	Route::get('/cms/tienda', 'Cms\CmsController@tiendaVirtual')->name('tienda.home');

		/*--------------- CATEGORIAS --------------*/
	Route::get('/cms/tienda/categorias', 'Cms\CategoryController@index')->name('tienda.category.home');
	Route::get('/cms/tienda/get/category/{id}', 'Cms\CategoryController@getCategory');
		//metodos posts
	Route::post('/cms/categoria/verify/{slug}', 'Cms\CategoryController@verifySlug');
	Route::post('/cms/tienda/guardar/categoria', 'Cms\CategoryController@guardarCategoria')->name('tienda.category.store');
	Route::post('/cms/tienda/actualizar/categoria/{id}', 'Cms\CategoryController@atualizarCategoria');
	Route::post('/cms/tienda/eliminar/categoria/{id}', 'Cms\CategoryController@eliminarCategoria');


		/*--------------- PRODUCTOS --------------*/
	Route::get('/cms/tienda/productos', 'Cms\ProductController@index')->name('tienda.product.home');

	Route::get('/cms/tienda/crear/producto', 'Cms\ProductController@crearProducto')->name('tienda.product.create');

	Route::get('/cms/tienda/editar/producto/{id}', 'Cms\ProductController@editarProducto')->name('tienda.product.show');

	Route::post('/cms/productos/verify/{slug}', 'Cms\ProductController@verifySlug');

	Route::post('/cms/tienda/guardar/producto', 'Cms\ProductController@guardarProducto')->name('tienda.product.store');

	Route::post('/cms/tienda/actualizar/producto/{id}', 'Cms\ProductController@actualizarProducto')->name('tienda.product.update');

	Route::post('/cms/tienda/eliminar/producto/{id}', 'Cms\ProductController@eliminarProducto');

		/*--------------- PRODUCTOS IMAGENES --------------*/
	Route::post('/cms/update/product/image/{id}', 'Cms\ProductImageController@editImage');



	/*--------------- VISTA ORDENES --------------*/

	Route::get('/cms/ventas', 'Cms\OrderController@index')->name('order.home');
	

	/*--------------- VISTA COMPRADORES --------------*/

	Route::get('/cms/compradores', 'Cms\IndexController@compradores')->name('compradores.home');

});
//--------INFORMACION DE ENVIO-----
Route::get('/get/shiping-info/{id}', 'ShipingDataController@getShipingData');

//-------------- ORDENES -----------
Route::get('/make/order', 'Cms\OrderController@nuevaOrden')
	->middleware('auth')
	->name('order.store');

Route::get('/order/Detail/{id}', 'Cms\OrderController@getOrderDetail');

Route::post('/cancelar/orden/{id}', 'Cms\OrderController@cancelarOrden')->name('orden.cancelar');

//-------------- FORMULARIO DE ENVIO -----------
Route::get('/shiping-data', 'ShipingDataController@index');

Route::post('/guardar/shiping-data', 'ShipingDataController@guardarDatosEnvio')
	->middleware('auth')
	->name('shiping.store');




//-------------- PAGOS -----------
Route::get('/cms/pagos', 'PagosController@index')->name('pagos.home');
Route::get('/cuentas', 'PagosController@cuentasBancarias');
Route::get('/pago', 'PagosController@agregarPago');
Route::get('/nuevo/pago', 'PagosController@agregarNuevoPago');
Route::post('/pago', 'PagosController@guardarPago')->name('pagos.store');
Route::get('/obtener/pago/{id}', 'PagosController@obtenerPagos');


//-------------- OBTENER DIRECCIONES -----------
Route::get('/user/address', 'AddressController@getAddress');