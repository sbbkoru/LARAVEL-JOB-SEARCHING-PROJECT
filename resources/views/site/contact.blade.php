@extends('site.layout.layout');

@section('breadcrumb')
<li class="list-inline-item active">
<a href="{{ route('site.index') }}">Home</a> </li><span>/</span>
<li class="list-inline-item">
<a href="">Contact</a> </li>
@endsection

@section('content')
<div class="container">
<div class="card">
<div class="card-body">
<div class="mx-auto d-block">
<img class="rounded-circle mx-auto d-block mb-2" style="max-height: 200px;" src="{{ asset('panel/images/berkay.jpg') }}" alt="Card image cap">
<h5 class="text-sm-center mt-4 mb-2">Berkay Büyükkoru</h5>
<div class="location text-sm-center">
<i class="fa fa-map-marker"></i> Istanbul, Turkey</div>
</div>
<hr>
<div class="card-text text-sm-center">
<a href="https://github.com/sbbkoru"><i class="fab fa-github-square mr-1" style="min-height: 10px;"></i>Github</a>
<a href="https://www.linkedin.com/in/berkaybuyukkoru/"><i class="fab fa-linkedin mr-1" style="min-height: 10px;"></i>Linkedin</a>
<p>+905379197681</p>
<p>sbbuyukkoru@gmail.com</p>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div><p style="font-size: 40px;" class="text-center mb-3 mt-1">TECHNOLOGIES</p></div>
    </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
      <img class="rounded-circle mx-auto d-block mb-2" style="max-height: 100px;min-width:100px;" src="{{ asset('panel/images/html2.jpg') }}" alt="HTML">
        <h5 class="card-title" style="font-size: 20px;">HTML5</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
      <img class="rounded-circle mx-auto d-block mb-2" style="max-height: 100px;min-width:100px;" src="{{ asset('panel/images/css.jpg') }}" alt="CSS">
        <h5 class="card-title" style="font-size: 20px;">CSS3</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
      <img class="rounded-circle mx-auto d-block mb-2" style="max-height: 100px;min-width:100px;" src="{{ asset('panel/images/js.jpg') }}" alt="JS">
        <h5 class="card-title" style="font-size: 20px;">JavaScript</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
      <img class="rounded-circle mx-auto d-block mb-2" style="max-height: 100px;min-width:100px;" src="{{ asset('panel/images/bootstrap2.jpg') }}" alt="BOOTSTRAP">
        <h5 class="card-title" style="font-size: 20px;">Bootstrap 5</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
      <img class="rounded-circle mx-auto d-block mb-2" style="max-height: 100px;min-width:100px;" src="{{ asset('panel/images/php.jpg') }}" alt="JS">
        <h5 class="card-title" style="font-size: 20px;">PHP</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
      <img class="rounded-circle mx-auto d-block mb-2" style="max-height: 100px;min-width:100px;" src="{{ asset('panel/images/laravel2.jpg') }}" alt="JS">
        <h5 class="card-title" style="font-size: 20px;">Laravel</h5>
      </div>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div><p style="font-size: 40px;" class="text-center mb-3 mt-1">EAGER TO LEARN</p></div>
    </div>
    <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
      <img class="rounded-circle mx-auto d-block mb-2" style="max-height: 100px;min-width:100px;" src="{{ asset('panel/images/vue6.jpg') }}" alt="vue">
        <h5 class="card-title" style="font-size: 20px;">VueJS</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
      <img class="rounded-circle mx-auto d-block mb-2" style="max-height: 100px;min-width:100px;" src="{{ asset('panel/images/nuxt.jpg') }}" alt="nuxt">
        <h5 class="card-title" style="font-size: 20px;">NuxtJS</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
      <img class="rounded-circle mx-auto d-block mb-2" style="max-height: 100px;min-width:100px;" src="{{ asset('panel/images/tailwind.jpg') }}" alt="JS">
        <h5 class="card-title" style="font-size: 20px;">Tailwind CSS</h5>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection
