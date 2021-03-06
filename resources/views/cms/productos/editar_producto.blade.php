@extends('cms.layout.main')
@section('title')
    Tienda | editar producto
@endsection


@section('content')
<div class="d-flex justify-content-between mt-4 mb-3">
	<h1 class="">Editar Producto</h1>
	<div>
		<a class="btn btn-outline-primary" href="{{route('tienda.product.home')}}">Volver</a>
	</div>
</div>
@if (session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>
@endif
<div id="errors_container" style="display: none;" class="alert alert-danger">
</div>
<input type="hidden" id="url_access" value="nada" name="">
<input type="hidden" value="{{$product->id}}" id="product_id">
<form action="{{route('tienda.product.update', $product->id)}}" id="formulario_producto" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="row mt-5">
	<div class="form-group col-12">
			<h5>Titulo</h5>
			<input class="form-control" id="title" type="text" maxlength="191" value="{{$product->title}}" r autocomplete="off" name="title">
			<small id="slug_alert"></small>
		</div>

		<div class="form-group col-12">
			<h5>Descripción</h5>
			<textarea class="form-control" id="description" name="description">{{$product->description}}</textarea>
		</div>

		<div class="form-group col-12"> 
			<h5>SKU</h5>
			<input type="text" class="form-control" id="sku" value="{{$product->sku}}" name="sku">
		</div>

		<div class="form-group col-12"> 
			<h5>Código de barra</h5>
			<input type="text" class="form-control" name="bar_code" value="{{$product->bar_code}}" id="bar_code">
		</div>
		
		<div class="form-group col-12"> 
			<h5>Stock Disponible</h5>
			<input type="number" class="form-control" name="available_stock" value="{{$product->available_stock}}" min="0" id="available_stock">
		</div>

		<div class="form-group col-12"> 
			<h5>IVA</h5>
			<select class="form-control" name="iva_id" id="iva_id">
				@foreach($ivas as $iva)
					<option value="{{$iva->id}}" {{$product->iva_id == $iva->id ? 'selected' : ''}}>{{$iva->msg}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group col-12"> 
			<h5>Precio al detal</h5>
			<input type="number" class="form-control" name="detail_price"  min="1" id="detail_price"  value="{{$product->detail_price}}">
		</div>

		<div class="form-group col-12"> 
			<h5>Precio al mayor</h5>
			<input type="number" class="form-control" name="wholesale_price" value="{{$product->wholesale_price}}" min="1" id="wholesale_price">
		</div>

		<div class="form-group col-12"> 
			<h5>Precio al gran mayor</h5>
			<input type="number" class="form-control" name="big_wholesale_price" value="{{$product->big_wholesale_price}}" min="1" id="big_wholesale_price">
		</div>

		<div class="form-group col-12"> 
			<h5>Precio VIP</h5>
			<input type="number" class="form-control" name="vip_price" min="1" id="vip_price" value="{{$product->vip_price}}">
		</div>

		<div class="form-group col-12"> 
			<h5>Cantidad minima para vender al mayor</h5>
			<input type="number" class="form-control" name="amount_min_wholesale" min="1" id="amount_min_wholesale" value="{{$product->amount_min_wholesale}}">
		</div>

		<div class="form-group col-12"> 
			<h5>Cantidad minima para vender al gran mayor</h5>
			<input type="number" class="form-control" name="amount_min_big_wholesale" value="{{$product->amount_min_big_wholesale}}" min="1" id="amount_min_big_wholesale">
		</div>

		<div class="form-group col-12"> 
			<h5>Cantidad minima para vender a precio VIP</h5>
			<input type="number" class="form-control" name="amount_min_vip" min="1" id="amount_min_vip" value="{{$product->amount_min_vip}}">
		</div>

		<div class="form-group col-12"> 
			<h5>Empaquetado</h5>
			<select class="form-control" name="packaging_id" id="packaging_id">
				@foreach($packagings as $packaging)
					<option value="{{$packaging->id}}" {{$product->packaging_id == $packaging->id ? 'selected' : ''}}>{{$packaging->packaging}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group col-12"> 
			<h5>Unidades que trae el empaquetado</h5>
			<input type="number" class="form-control" name="units_packaging" value="{{$product->units_packaging}}" min="1" id="units_packaging">
		</div>

		<div class="form-group col-12"> 
			<h5>Descuento</h5>
			<input type="number" class="form-control" name="discount" value="{{$product->discount}}" min="0" id="discount">
		</div>
		
		<div class="form-group col-6">
			<h5>Categoria</h5>
			<select id="categoria" class="form-control" name="category_id">
				<option value="0">Selecciona una categoria</option>
				@foreach($categorias as $categoria)
					<option value="{{$categoria->id}}" {{$product->category_id == $categoria->id ? 'selected' : '' }}>{{$categoria->title}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group col-6">
			<h5>Marcas</h5>
			<select id="marca" class="form-control" name="brand_id">
				<option value="0">Selecciona una categoria</option>
				@foreach($brands as $brand)
					<option value="{{$brand->id}}" {{$product->brand_id == $brand->id ? 'selected' : ''}}>{{$brand->brand}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group col-6">
			<h5>Imagen principal</h5>
			<input id="imagen" type="file" name="image">
		</div>

		<div class="form-group col-12">
			<h5>Imagenes secundarias</h5>
			@php $contador = 0 @endphp
			@foreach($product->images as $image)
			<div class="mb-2">
				<img src="{{asset('storage/'.$image->image)}}" style="width: 40px;">
				<button type="button" id="{{$image->id}}" class="btn btn-sm btn-outline-success button_modal" data-toggle="modal" data-target="#modalActualizar">
					Actualizar imagen
				</button>
			</div>
			@php $contador += 1 @endphp
			@endforeach

			@if($contador < 6)
				@while($contador < 6)
					<div class="mb-2">
						<img src="" style="width: 40px; height: 40px; object-fit: cover;" alt="imagen">
						<input type="file" class="secondary_img" name="second_image[]">
					</div>
				@php $contador = $contador + 1 @endphp	
				@endwhile	
			@endif

		</div>

		<div class="form-group col-12">
			<input type="submit" id="submitForm" class="btn btn-primary" value="Actualizar producto">
		</div>
		<div class="form-group col-12" style="visibility: hidden;">
			<input class="form-control" id="slug" type="text" value="{{$product->slug}}" name="slug">
		</div>
	</div>
</form>

<div class="modal fade" id="modalActualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar imagen secundaria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="row">
                	<div class="col-6 text-center">
                		<h5>Antes</h5>
                		<img id="old_image" src="" style="width: 70px">
                	</div>
                	<div class="col-6 text-center">
                		<h5>Nueva</h5>
                		<img id="new_image" class="mb-2" src="" style="width: 70px">
                		<div>
                			<form action="" id="actualizar_modal_form" method="POST" enctype="multipart/form-data">
                			    @csrf
                			    <input type="file" id="load_image" name="new_image">
                			</form>
                		</div>
                	</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" id="actualizar_modal" class="btn btn-primary">Actualizar imagen</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
	let title = document.getElementById('title'),
		unitPrice = document.getElementById('unit_price'),
		packagingPrice = document.getElementById('packaging_price'),
		imagen = document.getElementById('imagen'),
		description = document.getElementById('description'),
		categoria = document.getElementById('categoria'),
		form = document.getElementById('formulario_producto'),
		amount = document.getElementById('amount'),
		iva = document.getElementById('iva'),
		sku = document.getElementById('sku'),
		unit = document.getElementById('unit'),
		packed = document.getElementById('packed'),
		errors_container = document.getElementById('errors_container'),
		modal_submit = document.getElementById('actualizar_modal'),
		verify_access = document.getElementById('url_access'),
		discount = document.getElementById('discount'),
		availableStock = document.getElementById('available_stock'),
		inStock = document.getElementById('in_stock'),
		outStock = document.getElementById('out_stock'),
		submit = document.getElementById('submitForm');


	modal_submit.addEventListener('click', e => {
		let form = document.getElementById('actualizar_modal_form');

		form.submit();
	});

	submit.addEventListener('click', (e) => {
		e.preventDefault();

		let errors = []
		errors_container.innerHTML = '';
		errors_container.style.display = 'none'

		// if(title.value === ''){
		// 	errors.push('Debes agregar un titulo')
		// }if(unitPrice.value == ''){
		// 	errors.push('Debes agregar un unit price')
		// }if(description.value == ''){
		// 	errors.push('Debes agregar una descripción')
		// }if(categoria.selectedIndex === 0){
		// 	errors.push('Debes escoger una categoria')
		// }if(verify_access.value == 0){
		// 	errors.push('Debes escoger un titulo diferente')
		// }if(iva.value == '' ) {
		// 	errors.push('Debes agregar un iva')
		// }if(sku.value == '') {
		// 	errors.push('Debes agregar un sku')
		// }if(amount.value == ''){
		// 	errors.push('Debes agregar un amount')	
		// }if(unit.value == ''){
		// 	errors.push('Debes agregar un unit')
		// }if(packed.value == ''){
		// 	errors.push('Debes agregar un packed')
		// }if(discount.value == '') {
		// 	errors.push('Debes agregar un discount')
		// }if(availableStock.value == ''){
		// 	errors.push('Debes agregar un availableStock')
		// }if(inStock.value == ''){
		// 	errors.push('Debes agregar un inStock')
		// }if(outStock.value == ''){
		// 	errors.push('Debes agregar un outStock')
		// }


		if(errors.length > 0){
			let error_main = document.createElement('ul')

			errors.forEach(error => {
				error_main.innerHTML += `
					<li>${error}</li>

				`
			});
			errors_container.innerHTML += `
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
			`

			errors_container.appendChild(error_main)
			errors_container.style.display = 'block';
		} else {
			form.submit();
		}

	});
</script>

<script type="text/javascript">
	let slug = document.getElementById('slug')
	title.addEventListener('keyup', (e) => {	
		let value = string_to_slug(e.target.value)
		slug.value = value
		if(title.value != ''){
			verifySlug(value);
		}else {
			let alert = document.getElementById('slug_alert').textContent = '';
		}
	});

	function verifySlug(valor){
		let producto_id = document.getElementById('product_id');
			axios.post(`/cms/productos/verify/${valor}`, {
				product_id: producto_id.value,
			})
			.then(res =>{
				if(res.data == 'aceptado'){
					slugAlert('aceptado')
				}else if(res.data == 'ocupado'){
					slugAlert('ocupado')
				}
			})
		}


	function slugAlert(value){
		let alert = document.getElementById('slug_alert');

		if(value == 'aceptado'){
			alert.textContent = 'Titulo permitido para su uso'
			alert.style.color = 'green';
			verify_access.value = 1
		}

		if(value == 'ocupado')
		{
			alert.textContent = 'Este titulo ya esta siendo utilizado, escoja un titulo diferente'
			alert.style.color = 'red';
			verify_access.value = 0
		}
	}

	function string_to_slug (str) {
	    str = str.replace(/^\s+|\s+$/g, ''); // trim
	    str = str.toLowerCase();
	  
	    // remove accents, swap ñ for n, etc
	    var from = "àáãäâèéëêìíïîòóöôùúüûñç·/_,:;";
	    var to   = "aaaaaeeeeiiiioooouuuunc------";

	    for (var i=0, l=from.length ; i<l ; i++) {
	        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
	    }

	    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
	        .replace(/\s+/g, '-') // collapse whitespace and replace by -
	        .replace(/-+/g, '-'); // collapse dashes

	    return str;
	}
</script>

<script type="text/javascript">
	let modalButtons = document.querySelectorAll('.button_modal');
	let nueva = document.getElementById('load_image'),
			new_container = document.getElementById('new_image');




	if(modalButtons){
		modalButtons.forEach(button => {
			button.addEventListener('click', e => {
				let id = e.target.id,
					old_image = e.target.parentNode.firstElementChild.src

				modalImage(id, old_image)
			})
		})
	}

	nueva.onchange = function(e) {

	    let reader = new FileReader();
	    reader.readAsDataURL(e.target.files[0]);

	    reader.onload = function() {
	        new_container.src = reader.result;
	    }

	}

	function modalImage(id, old_image){
		let old = document.getElementById('old_image'),
			form = document.getElementById('actualizar_modal_form');

		form.action = `/cms/update/product/image/${id}`

		old.src = old_image;
	}
</script>

<script type="text/javascript">
	let seconsImg = document.querySelectorAll('.secondary_img');

	if(seconsImg){
		seconsImg.forEach(second => {
			second.onchange = function(e) {
				let image = e.target.parentNode.children[0];
			    let reader = new FileReader();
			    reader.readAsDataURL(e.target.files[0]);

			    reader.onload = function() {
			        image.src = reader.result;
			    }

			}
		})
	}
</script>

@endsection