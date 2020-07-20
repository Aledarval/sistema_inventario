@extends('layouts.template')
@section('title', '')
@section('content')
<div class="container-fluid">
<h1>Bienvenido al Sistema de Inventario (SISTINVE) </h1>

<div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-12" data-ride="carousel">

  <div class="controls-top">
  
    <a class="black-text" href="#multi-item-example" data-slide="prev"><i class="fas fa-angle-left fa-3x pr-3"></i></a>
    
    <a class="black-text" href="#multi-item-example" data-slide="next"><i class="fas fa-angle-right fa-3x pl-3"></i></a>
  </div>

  <div class="carousel-inner" role="listbox">

    <div class="carousel-item active">

      <div class="col-md-12 mb-12">
        <div class="card">
          <img class="img-fluid" src="{{ ('img/1.jpg') }}" alt="Responsive image">
        </div>
      </div>
    </div>

    <div class="carousel-item">

      <div class="col-md-12 mb-12">
        <div class="card">
          <img class="img-fluid" src="{{ ('img/2.jpg') }}" alt="Responsive image">
        </div>
      </div>
    </div>

    <div class="carousel-item">

      <div class="col-md-12 mb-12">
        <div class="card">
          <img class="img-fluid" src="{{ ('img/3.jpg') }}" alt="Responsive image">
        </div>
      </div>
    </div>

    <div class="carousel-item">

      <div class="col-md-12 mb-12">
        <div class="card">
          <img class="img-fluid" src="{{ ('img/4.jpg') }}" alt="Responsive image">
        </div>
      </div>
    </div>

    <div class="carousel-item">

      <div class="col-md-12 mb-12">
        <div class="card">
          <img class="img-fluid" src="{{ ('img/5.jpg') }}" alt="Responsive image">
        </div>
      </div>
    </div>

    <div class="carousel-item">

      <div class="col-md-12 mb-12">
        <div class="card">
          <img class="img-fluid" src="{{ ('img/6.jpg') }}" alt="Responsive image">
        </div>
      </div>
    </div>

    <div class="carousel-item">

      <div class="col-md-12 mb-12">
        <div class="card">
          <img class="img-fluid" src="{{ ('img/7.jpg') }}" alt="Responsive image">
        </div>
      </div>
    </div>

    <div class="carousel-item">

      <div class="col-md-12 mb-12">
        <div class="card">
          <img class="img-fluid" src="{{ ('img/8.jpg') }}" alt="Responsive image">
        </div>
      </div>
    </div>

    <div class="carousel-item">

      <div class="col-md-12 mb-12">
        <div class="card">
          <img class="img-fluid" src="{{ ('img/9.jpg') }}" alt="Responsive image">
        </div>
      </div>
    </div>

    <div class="carousel-item">

      <div class="col-md-12 mb-12">
        <div class="card">
          <img class="img-fluid" src="{{ ('img/10.jpg') }}" alt="Responsive image">
        </div>
      </div>
    </div>

    <div class="carousel-item">

      <div class="col-md-12 mb-12">
        <div class="card">
          <img class="img-fluid" src="{{ ('img/11.jpg') }}" alt="Responsive image">
        </div>
      </div>
    </div>

    <div class="carousel-item">

      <div class="col-md-12 mb-12">
        <div class="card">
          <img class="img-fluid" src="{{ ('img/12.jpg') }}" alt="Responsive image">
        </div>
      </div>
    </div>


  </div>

</div>

</div>
   

@endsection
