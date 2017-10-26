@extends('template')

@section('content')
<div class="main">
    <div class="limit">
        <div class="slider">
            <div class="slide content">
                <div class="bg">
                    <img src="http://lorempixel.com/1200/600" alt="pixel">
                </div>
            </div>
            <div class="search-box">
                <form class="controls validate" action="{{ route('search') }}" method="get">
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
@endsection