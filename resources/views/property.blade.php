@extends("layouts.app")
@section("content")

<div class="container">
<div class = "centrar">

<div class="row">
<div class="col-6">
<div class="card mt-5 " style= "width: 280px">

  <div class="card-body">
      <h5 class="card-title">APARTAESTUDIO</h5>
      <p class="card-text">$1'000.000</p>
    </div>
  </div>
  <br>
</div>

<div class="col-6">

<br>
<a class="btn btn-primary" href="{{ url('/pay') }}" role="button">Arrendar</a>

<br>
</div>

<form>
    <p class="clasificacion">
      <input id="radio1" type="radio" name="estrellas" value="5"><!--
      --><label for="radio1">★</label><!--
      --><input id="radio2" type="radio" name="estrellas" value="4"><!--
      --><label for="radio2">★</label><!--
      --><input id="radio3" type="radio" name="estrellas" value="3"><!--
      --><label for="radio3">★</label><!--
      --><input id="radio4" type="radio" name="estrellas" value="2"><!--
      --><label for="radio4">★</label><!--
      --><input id="radio5" type="radio" name="estrellas" value="1"><!--
      --><label for="radio5">★</label>
    </p>
  </form>


<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15897.81167237157!2d-75.46941715!3d5.03005245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1650291659549!5m2!1ses!2sco" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<div>
<br>
<br>
<textarea name="comentarios" rows="10" cols="40">Escribe aquí tus comentarios</textarea>
</div>
</div>
</div>
@endsection
