@extends('layouts.admin')

@section('title')
    Detalles de la empresa: {{$empresa->name}}
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card col-7">
            <div class="card-header">
                <div class="float-right">
                    <a href="{{url()->previous()}}" class="btn btn-outline-danger mr-4">Regresar</a>
                    <a href="/empresas/{{$empresa->id}}/edit" class="btn btn-outline-warning">Editar</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Nombre de la empesa</h5>
                        {{$empresa->name}}
                    </div>
                    <div class="col-md-6">
                        <h5>NIT de la empresa</h5>
                        {{$empresa->nit}}
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h5>Estado en el sistema</h5>
                        @if ($empresa->state == 1)
                        <span class="badge badge-primary">Activo</span>
                        @else
                        <span class="badge badge-danger">No activo</span>
                        
                        @endif
                    </div>
                    <div class="col-md-6">
                        <h5>Ciudades en las que esta presente la empresa</h5>
                        <ul>
                            @foreach ($ciudades as $ciudad)
                                <li>{{$ciudad->nameCiudad}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection