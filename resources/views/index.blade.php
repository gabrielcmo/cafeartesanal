@extends('layout.main')

@section('title') Fantini Café - Página Inicial @endsection

@section('before-container')
    <div id="carouselExampleControls" style="max-width: 80%;" class="carousel slide mx-auto" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset("img/carousel-landing-00.jpg") }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset("img/carousel-landing-01.jpg") }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset("img/carousel-landing-02.jpg") }}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset("img/carousel-landing-03.jpg") }}" alt="Fourth slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <script>
        $('.carousel').carousel({
            interval: 4800
        });
    </script>
@endsection

@section('content')

@endsection