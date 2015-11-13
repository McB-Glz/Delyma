<nav class="navbar navbar-default navbar-fixed-top" id="main-menu">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('assets/img/logos/logo-header.png') }}" class="img-responsive main-logo" id="main-logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <!-- {{ Request::is('studio') ? 'active' : '' }} -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="general"><a href="#quienes-somos">Quiénes Somos</a></li>
        <li class="general"><a href="#marcas">Marcas</a></li>
        <li class="general"><a href="#categorias">Categorías</a></li>
        <li class="general"><a href="#contacto">Contacto</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>