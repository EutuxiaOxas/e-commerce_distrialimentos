@extends('cms.layout.main')
@section('title')
    Tienda | Categorias
@endsection

@section('content')
<h2>Categorias de productos</h2>
<hr>
<section class="container-fluid">
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    @endif

    <div id="errors_container" style="display: none;" class="alert alert-danger" role="alert">
    </div>


    <form action="{{route('tienda.category.store')}}" id="form_create_category" method="POST" autocomplete="off">
        @csrf
        <div class="row">
            <h4 class="col-12">Crear Categoría</h4>
            
            <div class="col-md-4 form-group px-1 mt-3">
                <h5>Nombre</h5>
                <input class="form-control" id="create_category_title" type="text" name="title" placeholder="Nombre" autocomplete="off" required>
            </div>
            <div class="col-md-12 form-group px-1">
                <h5>Descripción</h5>
                <textarea class="form-control" id="create_category_description" name="description" placeholder="Descripción"></textarea>
            </div>
 
        </div>
        <div class="row form-group px-1">
            <input type="submit" id="crear_category_submit" class="btn btn-sm btn-primary px-5" value="Crear">
        </div>
    </form>

    <h2 class="mt-4 mb-3">Categorias</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
          	<th>#</th>
          	<th>Titulo</th>
          	<th>Descripción</th>
          	<th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categorias as $categoria)
          <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->title}}</td>
            <td>{{$categoria->description}}</td>
            <td>
            	<button type="button" id="{{$categoria->id}}" data-toggle="modal" data-target="#modalEditar" class="btn btn-outline-success editar_category">Editar</button>
            	<button type="button" id="{{$categoria->id}}" data-toggle="modal" data-target="#modalEliminar" class="btn btn-outline-danger eliminar_category">Eliminar</button>	
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</section>

<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="errors_modal" style="display: none;" class="alert alert-danger" role="alert">
                </div>
                <form action="" id="editar_form" method="POST">
                    @csrf
                    <div class="form-group">
                        <h5>Nombre</h5>
                        <input id="editar_title" class="form-control" type="text" name="title">
                    </div>
                    <div class="form-group">
                        <h5>Descripcion</h5>
                        <textarea class="form-control" id="editar_description" name="description"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="editar_submit" class="btn btn-primary">Actualizar Categoria</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="eliminar_form" method="POST">
                    @csrf
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="eliminar_submit" class="btn btn-danger">Eliminar Categoria</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  let crearCategorySubmit = document.getElementById('crear_category_submit');
  let errors_container = document.getElementById('errors_container');

  crearCategorySubmit.addEventListener('click', (e) => {
    e.preventDefault()

    const title = document.getElementById('create_category_title'),
          description = document.getElementById('create_category_description'),
          form = document.getElementById('form_create_category');

    let errors = [];
    errors_container.innerHTML = '';
    errors_container.style.display = 'none';


    if(title.value === ''){
      errors.push('Debe agregar un titulo')
    } if(description.value === ''){
      errors.push('Debe agregar una descripción');
    }


    if(errors.length > 0) {
      let error_main = document.createElement('ul')

      errors.forEach(error => {
        error_main.innerHTML += `

          <li>${error}</li>
        `
      });

      errors_container.appendChild(error_main)
      errors_container.style.display = 'block';

    } else {
      form.submit();
    }




  });
</script>


<script type="text/javascript">
  let editarButtons = document.querySelectorAll('.editar_category');
  let eliminarButtons = document.querySelectorAll('.eliminar_category');


  let modalEditarSubmit = document.getElementById('editar_submit');
  let modalEliminarSubmit = document.getElementById('eliminar_submit');



  modalEditarSubmit.addEventListener('click', (e) => {

    e.preventDefault()


    let form = document.getElementById('editar_form'),
        title = document.getElementById('editar_title'),
        description = document.getElementById('editar_description'),
        errors_modal = document.getElementById('errors_modal');


        let errors = []

        errors_modal.innerHTML = ''
        errors_modal.style.display = 'none'


        if(title.value === '')
        {
          errors.push('Debes colocar un titulo')
        } if (description.value === ''){
          errors.push('Debes colocar una description')
        }


        if(errors.length > 0){

          let error_main = document.createElement('ul')

          errors.forEach(error => {
            error_main.innerHTML += `

              <li>${error}</li>
            `
          });

          errors_modal.appendChild(error_main)
          errors_modal.style.display = 'block';
        } else {
          form.submit();
        }
  });

  modalEliminarSubmit.addEventListener('click', (e) => {
    let form = document.getElementById('eliminar_form');
    form.submit();
  });



  if(editarButtons)
  {
    editarButtons.forEach(button => {
      button.addEventListener('click', (e) => {
        let title = e.target.parentNode.parentNode.children[1].textContent,
            description = e.target.parentNode.parentNode.children[2].textContent,
            id = e.target.id;

            modalEditar(id,title,description);
      });
    });
  }

  if(eliminarButtons)
  {
    eliminarButtons.forEach(button => {
      button.addEventListener('click', (e) => {
            id = e.target.id;
            modalEliminar(id)
      });
    });
  }


  function modalEditar(id, title, description){
    let input_title = document.getElementById('editar_title'),
        input_description = document.getElementById('editar_description'),
        form = document.getElementById('editar_form');

    form.action = `/cms/tienda/actualizar/categoria/${id}`
    input_title.value = title
    input_description.value = description
  }

  function modalEliminar(id){
    let form = document.getElementById('eliminar_form');

    form.action = `/cms/tienda/eliminar/categoria/${id}`;
  }

</script>

@endsection
