@extends('layouts.landing')

@section('title')
    Trabaja con nosotros
@endsection

@section('content')
    <section>
        <h1>¡Envíanos tu hoja de vida!</h1>

        <form action="/hoja-de-vida" class="form-contact-with-our">
            @csrf

            <input type="text" class="input-hoja-vida">
            <input type="text" class="input-hoja-vida">
            <input type="text" class="input-hoja-vida">
            <input type="text" class="input-hoja-vida">
            <input type="text" class="input-hoja-vida">
            <input type="text" class="input-hoja-vida">
            <select name="" id="">
                
            </select>
        </form>
    </section>
@endsection