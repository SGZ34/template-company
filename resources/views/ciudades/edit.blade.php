@extends('layouts.admin')

@section('title')
    Editar ciudad
@endsection

@section('content')
<div class="card col-6 offset-3">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3>Editar ciudad</h3>
        <a href="{{url()->previous()}}" class="btn btn-outline-danger">Regresar</a>
        </div>
    </div>
    <div class="card-body">
        <form action="/ciudades/{{$ciudad->id}}" method="POST">
            @csrf
            @method("PUT")
            <label for="email">Nombre</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$ciudad->name}}">
            
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <button type="submit" class="btn btn-outline-primary btn-block mt-4">Editar</button>
        </form>
    </div>

</div>
@endsection