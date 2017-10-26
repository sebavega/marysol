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
        <div class="brand">Brand</div>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('about') }}">Acerca</a></li>
                    <li><a href="{{ route('contact') }}">Contacto</a></li>                    
                </ul>
            </nav>
        </div>
    </header>
    

    @yield('content')

    @section('footer')
    this is a footer
    @endsection
    
    <script src="js/main.js"></script>

    </body>

    </html>