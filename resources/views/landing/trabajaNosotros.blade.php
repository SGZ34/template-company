@extends('layouts.landing')

@section('title')
    Trabaja con nosotros
@endsection

@section('content')
<header class="trabaja-nosotros">
    <div class="container-trabaja-nosotros">
        <h1>Trabaje con Nosotros</h1>    
    </div> 
</header>
    <section id="trabaje-nosotros">
        <h1>¡Envíanos tu hoja de vida!</h1>
        <h2>¡Bienvenido! (a)</h2>
        <h3>Trabaje con nosotros</h3>
        <p>
            En GR TEMPORALES estamos dispuestos a construir una historia diferente para nuestros clientes y colaboradores, consolidando relaciones sólidas y generando experiencias positivas en cada proyecto. Por esto los invitamos a que logren sus objetivos en conjunto con nuestra organización. ¡Buscamos gente como tú!
            
            Es importante que tengas en cuenta que a través de nuestra página podrá diligenciar tu hoja de vida permitiéndole a nuestros psicólogos con mayor facilidad la información suministrada. Para unirte a nuestro equipo, registrar la hoja de vida a continuación:</p>

        <form action="/enviar-hoja-vida" class="form-contact-with-our" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <input type="text" class="input-hoja-vida @error('name') error-input @enderror" placeholder="Nombre" name="name">
            @error('name')
                <span><strong class="error-message">{{$message}}</strong></span>
            @enderror
            </div>


            <div>
                <input type="text" class="input-hoja-vida @error('apellidos') error-input @enderror" placeholder="Apellidos" name="apellidos">
                @error('apellidos')
                <span><strong class="error-message">{{$message}}</strong></span>
                @enderror
            </div>

            
            <div>
                <input type="number" class="input-hoja-vida @error('celular') error-input @enderror" placeholder="Celular" name="celular">
            @error('celular')
            <span><strong class="error-message">{{$message}}</strong></span>
            @enderror
            </div>

            <div>
                <input type="email" class="input-hoja-vida @error('correo') error-input @enderror" placeholder="Correo" name="correo">
            @error('correo')
            <span><strong class="error-message">{{$message}}</strong></span>
            @enderror
            </div>

            <div>
                <input type="text" class="input-hoja-vida @error('departamento') error-input @enderror" placeholder="Departamento" name="departamento">
            @error('departamento')
            <span><strong class="error-message">{{$message}}</strong></span>
            @enderror
            </div>
            
            <div>
                <input type="text" class="input-hoja-vida @error('municipio') error-input @enderror" placeholder="Municipio" name="municipio">
            @error('municipio')
            <span><strong class="error-message">{{$message}}</strong></span>
            @enderror
            </div>

            <div>
                <select name="vacante" id="" @error('vacante')
                class="error-input"
            @enderror>
                <option value="">--Seleccione la vacante--</option>
                @foreach ($vacantes_disponibles as $vacante)
                    <option value="{{$vacante->id}}">{{$vacante->nameEmpleo}}</option>
                @endforeach
            </select>
            @error('vacante')
            <span><strong class="error-message">{{$message}}</strong></span>
            @enderror
            </div>

            
                <div class="group @error('politicas') error-input @enderror" >
                    <label for="">
                        Políticas de privacidad
                    </label>
                    <input type="checkbox" name="politicas" id="">
                    <button type="button">Políticas de tratamiento de datos</button>
                    @error('politicas')
                    <div>
                        <span><strong class="error-message">{{$message}}</strong></span>
                    </div>
                    @enderror
                </div>
            

            <div class="group @error('hoja') error-input @enderror">
                
                <label for="">
                    Adjuntar hoja de vida
                    
                </label>
                <input type="file" name="hoja" id="">
                @error('hoja')
                    <span><strong class="error-message">{{$message}}</strong></span>
                @enderror
            </div>

            <button type="submit">Enviar hoja de vida</button>
        </form>
    </section>
@endsection