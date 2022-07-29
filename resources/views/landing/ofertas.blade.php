@extends('layouts.landing')

@section('title')
    Ofertas laborales
@endsection

@section('content')
<section>
   <div class="container-vacantes">
    @foreach ($vacantes_disponibles as $key => $vacante)
    <div class="card-vacante">
        <h2 class="card-vacante-title">{{$vacante->nameEmpleo}}</h2>
        <p class="card-vacante-description">{{$vacante->description}}</p>
        <p class="card-vacante-puestos"><b>cantidad de puestos disponibles: </b>{{$vacante->cantidad}}</p>
        <p class="card-vacante-ciudades">Ciudades disponibles</p>
        <ul class="list-ciudades-vacante">
            @foreach ($detalles_vacantes[$key] as $detalle_vacante)
                <li><b>{{$detalle_vacante->nameCiudad}}: </b>{{$detalle_vacante->cantidad}} </li>
            @endforeach
        </ul>
        <div class="bx-btn-vacante">
            <a href="/trabaja-con-nosotros" class="btn-vacante">Enviar hoja de vida</a>
        </div>  
    </div>
        
    @endforeach
   </div>
</section>
    
@endsection