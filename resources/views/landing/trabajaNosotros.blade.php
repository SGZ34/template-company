@extends('layouts.landing')

@section('title')
    Trabaja con nosotros
@endsection

@section('content')

<div class="lightbox">
    <div class="modal-politicas">
        <div class="modal-header">
            <h1 class="modal-title">
                Políticas de tratamiento de datos
             </h1>
        </div>
        <div class="modal-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus laboriosam cupiditate ipsa culpa iste eligendi officiis eius odio dolorum ratione. <span class="text-modal-green">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>, los cuales podrán ser utilizados para lo siguiente:</p>
            <ul>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, eveniet fugiat. Eos sapiente saepe neque doloremque deleniti?
                </li>
                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </li>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
            </ul>
            <button type="button" class="close-modal">Cerrar</button>
        </div>
    </div>
</div>
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
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum fugiat asperiores. Asperiores sunt quasi eligendi vero quod rem amet quos rerum, eos quisquam aliquam eius, quidem reprehenderit ut vel facilis praesentium numquam iure aut culpa. Inventore, ex mollitia magni velit dignissimos maiores excepturi pariatur tempora sed sint. Voluptas facilis molestias aut deserunt dolor eaque nulla laboriosam quibusdam provident eius, tempore repellendus fuga debitis illo cum ad labore aspernatur iusto aliquam corrupti soluta qui delectus dolores officiis? Ratione temporibus architecto explicabo dolorum, quos quaerat veniam cupiditate natus. Magnam maxime non, modi qui quaerat, ea ratione nulla sint tempore facere nesciunt numquam sit amet tempora. Error rerum perferendis asperiores distinctio. Ea, at corporis iure ducimus tenetur tempora blanditiis alias totam vel?
        </p>

        

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
                    <button type="button" class="open-modal">Políticas de tratamiento de datos</button>
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