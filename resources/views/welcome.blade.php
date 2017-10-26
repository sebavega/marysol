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

    <div class="main">
        <div class="limit">
            <div class="slider">
                <div class="slide content">
                    <div class="bg">
                        <img src="http://lorempixel.com/1200/600" alt="pixel">
                    </div>
                </div>
                <div class="search-box">
                    <form class="controls validate" action="{{ route('s') }}" method="get">
                        <div class="control-value">
                            <select name="select-property" id="select-property">
                                <option value="departamento">Departamento</option>
                                <option value="casa">Casa</option>
                                <option value="oficina">Oficina</option>
                                <option value="terreno">Terreno</option>
                                <option value="otros">Otros</option>
                            </select>    
                        </div>
                        <div class="control-value">
                            <select name="select-bussiness" id="select-bussiness">
                                <option value="venta">venta</option>
                                <option value="arriendo">Arriendo</option>
                            </select>    
                        </div>
                        <div>
                            <button class="button button-medium" type="submit"><span class="fa fa-search"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
