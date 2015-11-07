<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0" />

  <title>@yield('title', '')</title>
  <meta name="description" content="@yield('description', '')" />
  <meta name="author" content="dinkbit" />

  @yield('meta')

  <meta property="og:locale" content="es_LA" />
  <meta property="og:title" content="@yield('title_share', '')" />
  <meta property="og:description" content="@yield('description', '')" />
  <meta property="og:url" content="{{{ Request::url() }}}" />
  <meta property="og:site_name" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="@yield('image', url('assets/img/logo_share.png'))" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />

  <!-- FAV and TOUCH ICONS -->
  {{-- http://www.favicon-generator.org/ --}}
  <link rel="shortcut icon" href="{{{ url('assets/img/ico/favicon.ico') }}}" type="image/x-icon" />
  {{-- APPLE ICONS --}}
  <link rel="apple-touch-icon" sizes="57x57" href="{{{ url('assets/img/ico/apple-icon-57x57.png') }}}" />
  <link rel="apple-touch-icon" sizes="60x60" href="{{{ url('assets/img/ico/apple-icon-60x60.png') }}}" />
  <link rel="apple-touch-icon" sizes="72x72" href="{{{ url('assets/img/ico/apple-icon-72x72.png') }}}" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{{ url('assets/img/ico/apple-icon-76x76.png') }}}" />
  <link rel="apple-touch-icon" sizes="114x114" href="{{{ url('assets/img/ico/apple-icon-114x114.png') }}}" />
  <link rel="apple-touch-icon" sizes="120x120" href="{{{ url('assets/img/ico/apple-icon-120x120.png') }}}" />
  <link rel="apple-touch-icon" sizes="144x144" href="{{{ url('assets/img/ico/apple-icon-144x144.png') }}}" />
  <link rel="apple-touch-icon" sizes="152x152" href="{{{ url('assets/img/ico/apple-icon-152x152.png') }}}" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{{ url('assets/img/ico/apple-icon-180x180.png') }}}" />
  {{-- ANDROID ICONS --}}
  <link rel="icon" type="image/png" sizes="16x16" href="{{{ url('assets/img/ico/favicon-16x16.png') }}}" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{{ url('assets/img/ico/favicon-32x32.png') }}}" />
  <link rel="icon" type="image/png" sizes="96x96" href="{{{ url('assets/img/ico/favicon-96x96.png') }}}" />
  <link rel="icon" type="image/png" sizes="192x192" href="{{{ url('assets/img/ico/android-icon-192x192.png') }}}" />
  <link rel="manifest" href="{{{ url('assets/img/ico/manifest.json') }}}">
  {{-- MICROSOFT ICONS --}}
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{{ url('assets/img/ico/ms-icon-144x144.png') }}}">
  <meta name="theme-color" content="#ffffff">

  @if (!env('APP_DEBUG', false))
    <link media="all" type="text/css" rel="stylesheet" href="{{ url('assets/css/main.min.css') }}"/>
  @else
    <link media="all" type="text/css" rel="stylesheet" href="{{ url('assets/css/main.css') }}"/>
  @endif

  @yield('css')

  <script>var base_url = "{{ env('BASE_URL', url('/')) }}";</script>

  <script src="{{ url('assets/js/vendor/jquery.min.js') }}"></script>
  <script src="{{ url('assets/js/vendor/modernizr.min.js') }}"></script>

  @if (!env('APP_DEBUG', false))
    <script src="{{ url('assets/js/base.min.js') }}"></script>
  @else
    <script src="{{ url('assets/js/base.js') }}"></script>
  @endif

  @yield('js_head')
</head>
