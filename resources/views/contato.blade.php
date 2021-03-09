@extends('layout.main')

@section('title') Fantini Café Artesanal @endsection

@section('under-container')
@endsection

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Início</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contato</li>
  </ol>
</nav>
<br>
<h2>Contato</h2>
<br>
    <div class="row">
        <div class="col-6">
            <h4>Dúvidas frequentes</h4>

        </div>
        <div class="col-6">
            <h4>Nos envie um e-mail</h4>
        </div>
    </div>

@endsection