@extends("layouts.app")
@section("content")

<div class = "centrar">
<div class="text-center">

<div class="row">
<div class="col-6">
<div class="card mt-5 " style= "width: 280px">
  
  <div class="card-body">
      <h5 class="card-title">BROCHA MINI</h5>
      <p class="card-text">$10.000</p>
      <button type="button" class="btn btn-outline-primary">
      <Link to="/BotonComprar">COMPRAR</Link> </button>
    </div>
  </div>
  <br>
</div>

<div class="col-6">

<br>
<a class="btn btn-primary" href="{{ url('/pay') }}" role="button">Arrendar</a>

<br>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15897.81167237157!2d-75.46941715!3d5.03005245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1650291659549!5m2!1ses!2sco" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
@endsection
