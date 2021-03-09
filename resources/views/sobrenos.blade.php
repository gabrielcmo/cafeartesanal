@extends('layout.main')

@section('title') Fantini Café Artesanal @endsection

@section('under-container')
    
@endsection

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Início</a></li>
    <li class="breadcrumb-item active" aria-current="page">Sobre nós</li>
  </ol>
</nav>
<br>
<h2>Sobre nós</h2>
<br>
<div class="card" style="width: 30rem;">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body">
    <h5 class="card-title">José Fabiano Fantini <br><small>Plantor, colhedor, torrador e embalador</small></h5>
    <p class="card-text">Nascido e criado em Santo Antônio de Posse, filho de agricultores, sempre gostou da natureza.
    Manteve-se no ramo alimentício por 17 anos com a Pizzaria Fantini, na cidade onde nasceu. Adquiriu um sítio em
    Monte Alegre do Sul, aonde construiu sua casa e plantou seu café, puro e sem uso de nenhum tipo de agrotóxicos.</p>
  </div>
</div>
@endsection