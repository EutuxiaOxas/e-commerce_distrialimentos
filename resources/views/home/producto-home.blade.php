{{-- productos destacados --}}
<div class="col spaces">
    <div class="container card radius">
        <div class="row card-body p-0 flex-fill">
            <div class="col-5 p-0 d-block d-md-none imagenIquierda align-self-center">
                <a href="{{route('producto.show', $p->slug)}}">
                 <img class="mw-100" src="{{asset('storage/'.$p->image)}}" alt="Featured Product">
                </a>
            </div>
            <div class="d-none d-md-block imagenArriba">
                <a href="{{route('producto.show', $p->slug)}}">
                <img class="card-img-top" src="{{asset('storage/'.$p->image)}}" alt="Featured Product">
                </a>
            </div>
            <div class="col-7 col-md-12 p-2">
            <div class="container py-1">
            <div class="wrapper d-flex flex-wrap h-100 ">
            <div class="row">
                <div class="col-6 pb-1 d-flex justify-content-between align-items-center">
                    <span class="inCart-icon almacen__productAdded" id="{{$p->id}}">
                      <div class="productDetail__componenteCamion productDetail__componenteCamion-desktop">
                        <img src="{{asset('images/imgs/check.svg')}}" alt="Check-Nike" style="width: auto">
                        <p>En camión</p>
                      </div>
                    </span>
                  </div>
            <div class="col-12 pb-1 pr-2 d-none d-md-block">
            <p class="text-muted text-right text-small"><strong class="text-muted">SKU:</strong>{{$p->sku}}</p>
            </div>
            <div class="col-12 p-0 titulo">
            <h6 class="text-secondary font-weight-bold">{{$p->title}}</h6>
            </div>
            <div class="col-12 p-0 descripcion">
            <p class="text-small pl-0">{{$p->description}}</p>
            </div>
            <div class="col-7 col-md-12 p-0 unidades">
            <p class="text-small text-muted">({{$p->available_stock}} disponibles)</p>
            </div>
            <div class="col-md-12 p-0 d-none d-md-block categoria">
                <a href="{{route('product.brand.show', $p->brand->name)}}" class="almacen__marcaText smaller">Marca: <span>{{ucfirst(strtolower($p->brand->name))}}</span></a>
                <a href="{{route('product.category.show', $p->category->slug)}}" class="almacen__categoriaText smaller">Categoria: <span>{{ucfirst(strtolower($p->category->title))}}</span></a>
            </div>
            <div class="col-5 p-0 iva">
                <p class="text-small text-muted">{{$p->iva->msg}}</p>
            </div>
            <div class="d-block d-md-none">
                {{-- <a href="{{route('product.category.show', $p->category->slug)}}" class="almacen__categoriaText smaller">Categoria: <span>{{ucfirst(strtolower($p->category->title))}}</span></a> --}}
            </div>
            <div class="col-12 text-center p-0 align-self-end d-block d-md-none PrecioTotal">
                <p class="text-black font-weight-bold"> 
                    {{$p->getPrice(session('currency'), $p->wholesale_price)}} 
                    {{session('currency') == 'USD' ? '$' : 'Bs'}}
                </p>
            <p class="text-small text-muted">{{$p->packaging->packaging}} - {{$p->units_packaging}} unidades</p>
            </div>
            <div class="col-12 p-0 m-1 align-self-end d-block d-md-none Botoncito">
                <div class="almancen__agregarProducto">
                    <div class="almacen__productoAgregado">
                    <p class="almancen__agregarProducto-text d-none">Selecciona una cantidad </p>
                    @php $disponible = $p->available_stock; @endphp
                    <select id="{{$p->id}}" class="form-control {{auth()->user() ? 'to_server' : 'to_storage'}} productSelectStock">
                        <option value="0">0</option>
                        @for($i = 1; $i <= $disponible; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                    </div>
                    <button class="almacen__agregarProducto-button agregarButtons {{auth()->user() ? 'agregarButtons-server': 'agregarButtons-storage'}}  p-2" data-id="{{$p->id}}">
                        Añadir al Camión
                    </button>
                </div>

            </div>
            <div class="card-pricing text-center center-elements align-self-end pb-2 d-none d-md-block">
            <h4 class="font-weight-bold mb-0 mt-3">
                {{$p->getPrice(session('currency'), $p->wholesale_price)}} 
                {{session('currency') == 'USD' ? '$' : 'Bs'}}
            </h4>
            <p class="text-small pb-2">{{$p->packaging->packaging}} de {{$p->units_packaging}} unidades</p>
                <div class="almancen__agregarProducto pt-2">
                    <div class="almacen__productoAgregado">
                    <p class="almancen__agregarProducto-text d-none">Selecciona una cantidad </p>
                    @php $disponible = $p->available_stock; @endphp
                    <select id="{{$p->id}}" class="form-control {{auth()->user() ? 'to_server' : 'to_storage'}} productSelectStock">
                        <option value="0">0</option>
                        @for($i = 1; $i <= $disponible; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                    </div>
                    <button class="almacen__agregarProducto-button agregarButtons {{auth()->user() ? 'agregarButtons-server' : 'agregarButtons-storage'}}" data-id="{{$p->id}}">
                    Añadir al camión 
                    </button>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>