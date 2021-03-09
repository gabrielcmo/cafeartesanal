@extends('layout.main')

@section('title') Fantini Café Artesanal @endsection

@section('before-container')

@endsection

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Início</a></li>
    <li class="breadcrumb-item active" aria-current="page">Nossos cafés</li>
  </ol>
</nav>
<br>
<h2>Nossos cafés</h2>
<br>
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="" alt="Café imagem">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text"></p>
  </div>
</div>
@endsection