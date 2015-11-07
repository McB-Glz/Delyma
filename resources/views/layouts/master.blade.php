<!DOCTYPE html>
<!--
           __  __      ____   _____ _     
    ____ |  \/  |    |  _ \ / ____| |    
   / __ \| \  / | ___| |_) | |  __| |____
  / / _` | |\/| |/ __|  _ <| | |_ | |_  /
 | | (_| | |  | | (__| |_) | |__| | |/ / 
  \ \__,_|_|  |_|\___|____/ \_____|_/___|
   \____/               ______           
                       |______|          
:: @McB_Glz
-->
<!--[if lte IE 7 ]> <html class="ie6 ie7 ielt9"> <![endif]-->
<!--[if IE 8 ]>     <html class="ie8 ielt9"> <![endif]-->
<!--[if IE 9 ]>     <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
@include('layouts._head')

  <body class="@yield('class', '')">
    <!--[if lte IE 7]>
      <p class="chromeframe">Estás usando un navegador <strong>antiguo</strong>. Por favor <a href="http://browsehappy.com/">actualiza tu navegador</a> para visualizar el sitio correctamente.</p>
    <![endif]-->
    @include('layouts._nav')

    <main class="main" id="main_container">
      @include('layouts._messages')
      @yield('content')
    </main>

    <footer>
      @include('layouts._footer')
    </footer>

    @if (env('production'))
      <script src="{{ url('assets/js/app.min.js') }}"></script>
    @else
      <script src="{{ url('assets/js/app.js') }}"></script>
    @endif

    @yield('js')

    <div class="alert alert-danger noJS" style="display:none;">
      Le recomendamos habilitar el uso de javascript en su navegador para mejorar su experiencia en nuestra plataforma
    </div>

  </body>
</html>
