@if ($errors->any())
  <div id="alertas" class="alert alert-danger">
    <a class="close" href="javascript: void();" onClick="this.parentNode.style.display = 'none'; return false;">&times;</a>
    @foreach ($errors->all() as $error)
      {!! $error !!}<br />
    @endforeach
  </div>
@endif

@if(Request::get('success') || Session::has('success'))
  <?php
  if(Request::get('success')){
    $success = Request::get('success');
  }else if(Session::has('success')){
    $success = Session::get('success');
  }
  ?>
  <div id="success" class="alert alert-success">
    @if($success === true || $success == 1)
      La operación ha sido realizada exitosamente
    @else
      {!! $success !!}
    @endif
  </div>
@endif
