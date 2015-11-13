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
    <p>Grupo Delyma ofrece en México el portafolio de <a href="http://www.calumetspecialty.com/" target="_blank">Calumet Specialty Products Partners ( NASDAQ: CLMT ) </a>productor líder independiente de alta calidad en la producción de hidrocarburos de especialidades y productos combustibles en América del Norte.</p>
      <p>Contamos con un amplio portafolio de diferentes aplicaciones a traves de las marcas Royal Purple, Bel Ray y Quantum que son marcas competitivas en su oferta, de muy alta tecnología y símbolos de calidad.</p>
      <div class="row">
        <div class="col-sm-6 nogut">
          <a href="{{ url('assets/pdf/Catalogo Quantum.pdf') }}" class="btn btn-block btn-outline" target="_blank">Catálogo Quantum <i class="fa fa-download"></i></a>
        </div>
      </div>
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
        <p>Ahorro sustancial en gastos de operación: ahorro  en energía, ahorro en lubricante, ahorro en mantenimiento.</p>
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

<div class="container-fluid marcas one-bg" id="marcas">
  <div class="row">
    <div class="col-xs-12 marcas-title">
      <h2>Marcas</h2>
    </div>
  </div>

  <div class="row marcas-single">
    <div class="col-sm-7 pull-right">
      <p>Ofrece un amplio portafolio de lubricantes sintéticos para la industria, especialmente la relacionada con el sector de energía. Igualmente ofrece productos de extraordinaria calidad en aplicaciones del sector automotriz así como en flotas de camiones y vehículos de competencia. </p>
    </div>
    <div class="col-sm-5">
      <div class="img-wrapper">
        <a href="http://www.royalpurpleconsumer.com/" target="_blank"><img src="{{ url('assets/img/logos/royal-purple.png') }}" class="img-responsive"></a>
      </div>
    </div>
  </div>

  <div class="row marcas-single">
    <div class="col-sm-7 pull-right">
      <p>Al igual que Royal Purple® es una marca “premium” que ofrece     un completo portafolio para la industria, generando valor a las          empresas que lo usan, especialmente en el sector de la industria alimenticia, minera, autos y motos deportivas.</p>
    </div>
    <div class="col-sm-5">
      <div class="img-wrapper">
        <a href="http://www.belray.com/" target="_blank"><img src="{{ url('assets/img/logos/bel-ray.png') }}" class="img-responsive"></a>
      </div>
    </div>
  </div>

  <div class="row marcas-single">
    <div class="col-sm-7 pull-right">
      <p>Marcas nuevas que están ingresando en forma agresiva en el    mercado estadounidense, ofreciendo un producto de alta calidad  a un precio muy competitivo.</p>
    </div>
    <div class="col-sm-5">
      <div class="img-wrapper">
        <a href="http://www.qlubricants.com/" target="_blank"><img src="{{ url('assets/img/logos/quantum.png') }}" class="img-responsive"></a>
      </div>
    </div>
  </div>

</div>

<div class="container-fluid categories two-bg" id="categorias">
  <div class="row">
    <div class="col-xs-12 categories-title">
      <h2>Categorías</h2>
    </div>
  </div>

  <div class="row categories-single">
    <div class="col-sm-8 pull-right">
      <h3>Automotriz</h3>
      <p>Ofrecemos productos minerales y sintéticos para cuidar y limpiar el motor y la transmisión de sus automóviles y motocicletas.</p>
      <div class="row">
        <div class="col-sm-6 nogut">
          <a href="#collapseAutomotriz" class="btn btn-block btn-outline" data-toggle="collapse">Conoce nuestros principales productos</a>
        </div>
      </div>
      <div class="row collapse" id="collapseAutomotriz">

        <div class="col-sm-6">
          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-four.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Quantum® X-5 FullSYN Motor Oil</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-three.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Quantum® X-5 Max Blend Motor Oil</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-two.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Quantum® TS Global Synthetic Transmission Fluid</p>
            </div>
          </div>

        </div>

        <div class="col-sm-6">
          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-four.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Quantum® T-3 ATF</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-three.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Quantum® Gold ELC Anticongelante y Refrigerante</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-two.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Quantum® X-4 Supreme Motor Oil</p>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="col-sm-4">
      <div class="img-wrapper">
        <img src="{{ url('assets/img/vectors/automotriz.png') }}" class="img-responsive">
      </div>
    </div>
  </div>

  <div class="row categories-single">
    <div class="col-sm-8 pull-right">
      <h3>Transporte y maquinaria pesada</h3>
      <p>Lubricantes que permiten alcanzar el máximo rendimiento extendiendo la vida útil de la unidad, minimizando costos operativos para camiones, equipos de minería, construcción y agricultura.</p>
      <div class="row">
        <div class="col-sm-6 nogut">
          <a href="#collapsePesada" class="btn btn-block btn-outline" data-toggle="collapse">Conoce nuestros principales productos</a>
        </div>
      </div>
      <div class="row collapse" id="collapsePesada">

        <div class="col-sm-6">
          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-four.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Hyperion® ELITE Synthetic Engine Oil</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-three.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Hyperion® Ultra 15W-40 CJ-4</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-two.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Hyperion® HD 15W-40 CI-4 Plus</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-one.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Quantum® HD 15W-40 CI-4</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-four.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Quantum® Fleet Vehicular Gas Engine Oil 15W-40</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-three.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Quantum® FullSYN Premium Gear Oil</p>
            </div>
          </div>

        </div>

        <div class="col-sm-6">
          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-four.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Hyperion® Synthetic HD Tranmission Fluid</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-three.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Hyperion® SYN Trans CD 50</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-two.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Quantum® MP Gear Lube</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-one.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Quantum® MolyCAT Grease EP 2</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-four.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Quantum® Multi Purpose Lithium Grease EP2</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-three.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Hyperion® Universal Tractor Fluid</p>
            </div>
          </div>

        </div>

      </div>
    </div>
    
    <div class="col-sm-4">
      <div class="img-wrapper">
        <img src="{{ url('assets/img/vectors/pesada.png') }}" class="img-responsive">
      </div>
    </div>
  </div>

  <div class="row categories-single">
    <div class="col-sm-8 pull-right">
      <h3>Industria</h3>
      <p>Lubricantes Premium diseñados específicamente para uso y aplicación de cada una de las diferentes industrias, entregando una confiable protección y un sobresaliente desempeño. </p>
      <div class="row">
        <div class="col-sm-6 nogut">
          <a href="#collapseIndustria" class="btn btn-block btn-outline" data-toggle="collapse">Conoce nuestros principales productos</a>
        </div>
      </div>
      <div class="row collapse" id="collapseIndustria">

        <div class="col-sm-6">
          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-four.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Hyperion® 6000 AW Hydraulic Oil</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-three.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Ideal® Food Grade Hydraulic Oil</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-two.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Quantum® EP Industrial Gear Oil</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-one.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Hyperion® Supreme Compressor Oil</p>
            </div>
          </div>

        </div>

        <div class="col-sm-6">
          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-four.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Hyperion® Premium Turbine Oil</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-three.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Hyperion® Gas Engine Oil Low Ash</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-two.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Hyperion® Ashless Gas Engine Oil</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left media-middle">
                <div class="img-wrapper">
                  <img class="media-object" src="{{ url('assets/img/bullet-one.png') }}">
                </div>
            </div>
            <div class="media-body">
              <p>Quantum® Heat Transfer Oil</p>
            </div>
          </div>

        </div>

      </div>
    </div>
    
    <div class="col-sm-4">
      <div class="img-wrapper">
        <img src="{{ url('assets/img/vectors/industria.png') }}" class="img-responsive">
      </div>
    </div>
  </div>

</div>

@stop

@section('js')

@stop
