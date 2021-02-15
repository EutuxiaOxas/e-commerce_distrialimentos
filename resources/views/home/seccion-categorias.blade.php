 <!---------------------- Seccion de categorias  para desktop --------------------->
<section id="categories-destop" class="px-3 py-2 my-2 bg-light d-none d-md-block">
    <div class="container-fluid">
        {{-- titulo --}}
      <div class="row my-1 py-4">
        <div class="col">
          <h5 class="mb-0 font-weight-bold text-primary">Conoce algunas de nuestras categorias</h5>
          <h6 class="font-weight-bold text-muted">Ingresa a las categorias de nuestros almacenes</h6>            
        </div>
      </div>

      <div class="row">
        <div class="owl-carousel" id="categories">
          @foreach($categories as $category)
            <div class="col px-0">
              <a href="{{route('product.category.show', $category->slug)}}">
                  <div class="card categorie__mobileBody-item">
                    <div class="">
                      <div class="icon text-center">
                        <i class="text-primary">
                          <img src="{{asset('storage/'.$category->icono)}}" alt="">
                        </i>
                      </div>
                      <p class="text-center">{{$category->title}}</p>
                    </div>
                  </div>
                </a>
            </div>
            @endforeach
        </div>
      </div>
      
    </div>
  </section>
<!-- /categorias -->
 
 <!---------------------- Seccion de categorias  para movil --------------------->
  <section id="categories-movil" class="bg-light py-3 d-block d-md-none">
    <div class="categories container px-4">
      <div class="categoria_tittle">
        <h6 class="text-primary">Categorias en almacen</h6>
        <p class="small">Inicia la compra con una categoria del almacen</p>
      </div>
      {{-- categorias --}}
      <div class="categories row py-2">

        @foreach ($categorias->take(9) as $categoria)
        <div class="col-4 p-1">
          <a href="{{route('product.category.show', $categoria->slug)}}" class="s">
            <div class="card radius">
              <div class="card-body px-0 py-3 card-shadow radius card-body-hover">
                <div class="icon text-center">
                  <i>
                    <img src="{{asset('storage/'.$categoria->icono)}}" alt="icono" height="50px">
                  </i>
                </div>
                <p class="text-center small">{{$categoria->title}}</p>
              </div>
            </div>
          </a>
        </div>

        @endforeach
      



      </div>

      
      <div class="categories_footer row text-center py-2">
        <div class="col">
          <a href="#" onclick="document.querySelector('#categoriesIcon_desktop').click()">Ver todas las categorias</a>
        </div>
      </div>
    </div>
  </section>


