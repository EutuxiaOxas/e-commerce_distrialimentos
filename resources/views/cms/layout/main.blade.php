<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/AdminLTE/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}">

  <!--datables CSS básico-->
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/datatables/datatables.min.css') }}" />
  <!--datables estilo bootstrap 4 CSS-->
  <link rel="stylesheet" type="text/css"
      href="{{ asset('vendor/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') }}">

  <!-- Axios -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  <script src="/AdminLTE/plugins/jquery/jquery.min.js"></script>
  <style>
    h1,h2,h3,h4,h5,h6 {
      font-family: 'Source Sans Pro', sans-serif;
    }
    p,li,a,ul,input,select,td,th,button,small{
     font-family: 'Roboto', sans-serif;
    }

  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<!-- IDENTIFICADOR SECCIÓN -->
<input type="hidden" id="seccion_name" value="{{$secName}}">

<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" >
          Distrialmientos del Centro C.A.
        </a>
      </li>
    </ul>
    
    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> --}}
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('cms.home')}}" class="nav-link">Tablero principal</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <form action="/logout" id="logout_form" method="POST">
          @csrf
          <a href="#" onclick="document.getElementById('logout_form').submit()" class="nav-link">Cerrar Sesión</a>
        </form>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('cms.home')}}" class="brand-link">
      <span class="brand-text font-weight-light">Administrador</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Usuario: {{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if(auth()->user()->roles->title == 'administrador')
          <li class="nav-item ">
            <a href="{{ route('cms.users') }}" class="nav-link secciones usuarios ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          @endif

          @if(auth()->user()->roles->title == 'editor' || auth()->user()->roles->title == 'administrador')
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link secciones web">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Página web
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              {{-- banner --}}
              <li class="nav-item">
                <a href="{{route('banners.home')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banners</p>
                </a>
              </li>
              {{-- promociones --}}
              <li class="nav-item">
                <a href="{{route('promociones.home')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i></i>
                  <p>Promociones</p>
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link secciones bancos">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Configuraciones
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('tienda.category.home')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('tienda.brand.home')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marcas</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{route('bank.home')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bancos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('bank.user.home')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cuentas Bancarias</p>
                </a>
              </li> --}}
            </ul>
          </li>
          @endif
          @if(auth()->user()->roles->title == 'inventario' || auth()->user()->roles->title == 'administrador')
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link secciones tienda">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Tienda
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('tienda.product.home')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('tienda.product.home')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inventario</p>
                </a>
              </li>
             
            </ul>
          </li> 
          @endif
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link secciones ordenes">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Ventas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('order.home')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ordenes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="{{route('compradores.home')}}" class="nav-link secciones compradores">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Compradores
              </p>
            </a>
          </li>
         
          {{-- <li class="nav-item ">
            <a href="{{route('pagos.home')}}" class="nav-link secciones pagos">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pagos
              </p>
            </a>
          </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        @yield('content')
        <!-- Main row -->
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->

<!-- Bootstrap -->
<script src="/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/AdminLTE/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/AdminLTE/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/AdminLTE/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/AdminLTE/plugins/raphael/raphael.min.js"></script>
<script src="/AdminLTE/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/AdminLTE/plugins/jquery-mapael/maps/usa_states.min.js"></script>


<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
        let name = document.getElementById('seccion_name'),
            enlaces =document.querySelectorAll('.secciones');

        changeColor(name.value, enlaces)

    });

    function changeColor(name, enlaces)
    {
        enlaces.forEach(enlace => {
            if(enlace.classList.contains(name))
            {
                enlace.classList.add('active');
            }
        });
    }
</script>

</body>
</html>
