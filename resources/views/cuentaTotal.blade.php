@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
<div class="card mb-4">
    <img class="card-img-top " src="https://www.xtrategik.com/blog_xtrategik/wp-content/uploads/2020/10/opciones-de-pasarelas-de-pago-en-colombia-XtrategiK-Blog.gif" width="100" height="170" alt="Card image cap">
    <div class="card-body">
      <h3 class="card-title">Saldo Total</h3>
      <p class="card-text">Total: {{ $cuentaTotal }}</p>

    </div>
  </div>

    @include('layouts.subview-form-errors')

</div>
</div>
@endsection
