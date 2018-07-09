<!-- classes: -->
<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
<!-- ================ -->
<div class="main-navigation main-navigation--mega-menu  animated">
  <nav class="navbar navbar-expand-lg navbar-light p-0">
    <div class="navbar-brand clearfix hidden-lg-up">

      <!-- logo -->
      <div id="logo-mobile" class="logo">
        <a href="{{route('welcome')}}"><img id="logo_img" src="{{asset('images/logo.jpg')}}" alt="Copef Salta"></a>
        {{-- <a href="index.html"><img id="logo-img-mobile" src="{{asset('images/logo_light_blue.png')}}" alt="The Project"></a> --}}
      </div>

      <!-- name-and-slogan -->
      <div class="site-slogan">
        Inspiración, Innovación
      </div>

    </div>

    <!-- header dropdown buttons -->
    <div class="header-dropdown-buttons hidden-lg-up p-0 ml-auto mr-3">
      <div class="btn-group">
        <button type="button" class="btn dropdown-toggle dropdown-toggle--no-caret" id="header-drop-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></button>
        <ul class="dropdown-menu dropdown-menu-right dropdown-animation" aria-labelledby="header-drop-3">
          <li>
            <form role="search" class="search-box margin-clear">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Search">
                <i class="fa fa-search form-control-feedback"></i>
              </div>
            </form>
          </li>
        </ul>
      </div>
    </div>
    <!-- header dropdown buttons end -->

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <!-- main-menu -->
      <ul class="navbar-nav ml-xl-auto">

        <!-- mega-menu start -->
        <li class="nav-item dropdown active mega-menu mega-menu--wide">
          <a href="/" class="nav-link">Inicio</a>
        </li>
        <li class="nav-item dropdown ">
          <a href="portfolio-grid-2-3-col.html" class="nav-link dropdown-toggle" id="fifth-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Institucional</a>
          <ul class="dropdown-menu" aria-labelledby="fifth-dropdown">
            <li ><a href="{{route('pagina',['id' => 28])}}">Historia</a></li>
            <li ><a href="{{route('directivas')}}">Comisión Directiva</a></li>
            <li ><a href="{{route('pagina',['id' => 30])}}">Matrícula</a></li>
            <li ><a href="{{route('photos')}}" >Galería de fotos</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="{{route('courses')}}" class="nav-link">Capacitación</a>
        </li>

        <li class="nav-item">
          <a href="{{route('news')}}" class="nav-link">Noticias</a>
        </li>

        {{-- <li class="nav-item">
          <a href="{{route('photos')}}" class="nav-link">Fotos</a>
        </li> --}}

        <li class="nav-item">
          <a href="{{route('courses')}}" class="nav-link">Campus</a>
        </li>

        <li class="nav-item">
          <a href="{{route('courses')}}" class="nav-link">Contactenos</a>
        </li>

      </ul>
      <!-- main-menu end -->
    </div>
  </nav>
</div>
