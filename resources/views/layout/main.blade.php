<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        {{-- Styles --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset("css/layout.css") }}">
        {{-- Scripts --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <!-- Image and text -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/">
                <img src="{{ asset("img/fonte-cafe-fantini.png") }}" width="250" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item p-2 mx-auto {{ request()->is("cafes") ? 'active' : '' }}">
                        <a class="nav-link" href="/cafes">nossos cafés 
                        {{-- <span id="icon-coffee">K</span> --}}
                        </a>
                    </li>
                    <li class="nav-item p-2 mx-auto {{ request()->is("sobre") ? 'active' : '' }}">
                        <a class="nav-link" href="/sobre">sobre nós</a>
                    </li>
                    <li class="nav-item p-2 mx-auto {{ request()->is("contato") ? 'active' : '' }}">
                        <a class="nav-link" href="/contato">contato</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="">
            @yield('before-container')
        </div>

        <div class="container">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="footer page-footer font-small pt-4 text-dark">

            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left footer-links">
        
            <!-- Grid row -->
            <div class="row">
        
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
        
                <!-- Content -->
                <h3 class="text-uppercase">Fantini Café Artesanal</h3>
                <p>Café puro e natural direto da roça para você</p>
        
                </div>
                <!-- Grid column -->
        
                <hr class="clearfix w-100 d-md-none pb-3">
                
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
        
                    <!-- Links -->
                    <h5 class="text-uppercase">Redes Sociais</h5>
            
                    <ul class="list-unstyled">
                        <li>
                            <a class="footer-link" href="#!">Facebook</a>
                        </li>
                        <li>
                            <a class="footer-link" href="#!">Instagram</a>
                        </li>
                        <li>
                            <a class="footer-link" href="#!">Twitter</a>
                        </li>
                    </ul>
            
                </div>
                <!-- Grid column -->
            
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
            
                    <!-- Links -->
                    <h5 class="text-uppercase">Fale Conosco</h5>
            
                    <ul class="list-unstyled">
                        <li>
                            <a class="footer-link" href="#!">Whatsapp</a>
                        </li>
                    </ul>
            
                </div>
                <!-- Grid column -->
        
            </div>
            <!-- Grid row -->
        
            </div>
            <!-- Footer Links -->
    
            <!-- Copyright -->
            <div class="footer-copyright text-center text-light py-3">
                © 2020 Copyright: Todos os direitos reservados
            </div>
            <!-- Copyright -->
        
        </footer>
        <!-- Footer -->
    </body>
</html>
