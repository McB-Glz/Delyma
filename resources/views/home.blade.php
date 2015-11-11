@extends('layouts.master')
@section('title', 'Bienvenido')

@section('css')

@stop

@section('content')

<div class="container-fluid" id="main-header">
  <div class="overlay"></div>
  <div class="img-wrapper">
    <img src="{{ url('assets/img/logos/logo-main.png') }}" class="img-responsive" alt="Grupo DELYMA" title="Grupo DELYMA">
    <a href="#quienes-somos" id="arrow-btn"><img src="{{ url('assets/img/arrow.png') }}"></a>
  </div>
</div>

<div class="container-fluid about one-bg" id="quienes-somos">
  <div class="row desc">
    <div class="col-sm-8 col-sm-offset-2">
      <p>Somos una empresa 100% mexicana con el firme    compromiso de generar valor a nuestros clientes a través de nuestro servicio y productos de alta calidad.</p>
    </div>
  </div>
  <div class="row dots">
    <div class="col-sm-4 col-sm-offset-4">
      <div class="img-wrapper">
        <img src="{{ url('assets/img/dot-one.png') }}">
        <img src="{{ url('assets/img/dot-two.png') }}">
        <img src="{{ url('assets/img/dot-three.png') }}">
        <img src="{{ url('assets/img/dot-four.png') }}">
      </div>
    </div>
  </div>
</div>

<div class="container-fluid products two-bg">
  <div class="row products-info">
    <div class="col-sm-8 pull-right">
      <p>Grupo Delyma ofrece en México el portafolio de Calumet Specialty Products Partners www.calumetspecialty.com ( NASDAQ: CLMT ) productor líder independiente de alta calidad en la producción de hidrocarburos de especialidades y producciónuctos combustibles en América del Norte.</p>
      <p>Contamos con un amplio portafolio de diferentes aplicaciones a traves de las marcas Royal Purple, Bel Ray y Quantum que son marcas competitivas en su oferta, de muy alta tecnología y símbolos de calidad.</p>
    </div>
    <div class="col-sm-4">
      <div class="img-wrapper">
        <img src="{{ url('assets/img/vectors/lubricantes.png') }}" class="img-responsive">
      </div>
    </div>
  </div>
  <div class="row products-title">
    <div class="col-xs-12">
      <h2>Beneficios por utilizar nuestros productos</h2>
    </div>
  </div>
  <div class="row products-grid">
    <div class="col-sm-6">
      <div class="products-grid--single bg-blueFour">
        <p>Ahorro sustancial en gastos de operación: ahorro  en energía, ahorro en lubricante, ahorro en          mantenimiento.</p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="products-grid--single bg-blueThree">
        <p>Extrema calidad en productos automotrices (sintéticos y semi-sintéticos) bajo una propuesta    comercial extraordinariamente competitiva en el mercado Mexicano.</p>
      </div>
    </div>
  </div>
  <div class="row products-grid">
    <div class="col-sm-6">
      <div class="products-grid--single bg-blueTwo">
        <p>Excelente portafolio de productos industriales para todo tipo de aplicación promoviendo la mayor vida útil de sus máquinas industriales.</p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="products-grid--single bg-blueOne">
        <p>Excelente nivel de servicio (excelencia operacional). Capacitación técnica y muestreo de lubricantes.</p>
      </div>
    </div>
  </div>
  
</div>

@stop

@section('js')

@stop
