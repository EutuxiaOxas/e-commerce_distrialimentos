
    <!-- header -->
    <header class="header-sticky header-dark">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-{{$color_header ?? 'light'}}">
            <a class="navbar-brand" href="../../index.html">
              {{-- <img class="navbar-logo navbar-logo-light" src="../../assets/images/demo/logo/logo-light.svg" alt="Logo"> --}}
              {{-- <img class="navbar-logo navbar-logo-dark" src="../../assets/images/demo/logo/logo-dark.svg" alt="Logo"> --}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="burger"><span></span></span></button>
  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav align-items-center mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/" role="button">
                    Inicio
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/nosotros" role="button">
                    Nosotros
                  </a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="/servicios" role="button">
                    Servicios
                  </a>
                </li> --}}
                <li class="nav-item">
                  <a class="nav-link" href="/productos" role="button">
                    Productos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/contacto" role="button">
                    Contacto
                  </a>
                </li>
              </ul>
  
              {{-- <ul class="navbar-nav align-items-center mr-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Nuestras Lineas
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($categories as $category)
                    <a class="dropdown-item" href="#">
                      <span>{{$category->title}}</span>
                      <p>Descripcion base de datos</p>
                    </a>
                    <div class="dropdown-divider"></div>
                    @endforeach
                  </div>
                </li>
              </ul> --}}
              <a href="tel:+58-424-401-07-76" class="phone bordered">+58 424 401 0776</a><br>
            </div>
          </nav>
        </div>
      </header>
      <!-- header -->