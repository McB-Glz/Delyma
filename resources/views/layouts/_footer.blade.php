<div class="container-fluid contact one-bg" id="contacto">
  <div class="row">
    <div class="col-sm-6 pull-right contact-form">
      <div id="response" class="alert" role="alert" style="display: none;"></div>
      <form id="contactForm" method="POST" action="{{ url('/send-email') }}" class="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <div class="row">
          <div class="col-xs-12">
            <input type="text" class="form-control" name="name" id="name" placeholder="Nombre Completo">
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico">
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <textarea type="text" class="form-control" rows="3" name="message" id="message" placeholder="Mensaje"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-sm-offset-6">
             <button type="submit" class="btn btn-enviar btn-block">Enviar</button>
          </div>
        </div>
        
      </form>
    </div>
    <div class="col-sm-6 contact-info">
      <div class="img-wrapper">
        <img src="{{ url('assets/img/logos/logo-footer.png') }}" class="img-responsive">
      </div>
      <a href="mailto:contacto@grupodelyma.com">contacto@grupodelyma.com</a>
      <address>
        Carr. Pesquería Dulces Nombres, Km. 4 # 1000. <br/>Pesquería, Nuevo León, México, <br/>C.P. 66650
      </address>
    </div>
  </div>
  <div class="row footer-logo">
    <div class="col-xs-12">
      <div class="img-wrapper pull-right">
        <a href="http://apostrofe.com.mx/" target="_blank">
          <img src="{{ url('assets/img/logos/apostrofe.png') }}">
        </a>
      </div>
    </div>
  </div>
</div>