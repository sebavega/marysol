<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mar y sol propiedades</title>

        <!-- Styles -->
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

    
    <header>
        <div class="limit">
            <div class="header-content">
                <div class="header-logo">
                    <a href="{{ route('home') }}">Marysol Propiedades</a>
                </div>
                <div class="header-hamburguer">
                    <div class="fa1"></div>
                    <div class="fa2"></div>
                    <div class="fa3"></div>
                </div>
                <nav>
                    <div class="fa fa-times"></div>
                    <ul>
                        <li><a href="{{ route('home') }}">Inicio</a></li>
                        <li><a href="{{ route('about') }}">Acerca</a></li>
                        <li><a href="{{ route('contact') }}">Contacto</a></li>                        
                    </ul>
                </nav>
            </div>

        </div>
    </header>
    

    @yield('content')

    @section('footer')
    this is a footer
    @endsection
    
    <script src="js/main.js"></script>

    </body>

    </html>