@extends('layouts.admin')

@section('title')
    Detalles de la vacante
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card col-7">
            <div class="card-header">
                <div class="float-right">
                    <a href="{{url()->previous()}}" class="btn btn-outline-danger mr-4">Regresar</a>
                    <a href="/vacantes/{{$vacante->id}}/edit" class="btn btn-outline-warning">Editar</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Nombre de la vacante</h5>
                        {{$vacante->nameEmpleo}}
                    </div>
                    <div class="col-md-6">
                        <h5>Cantidad disponible</h5>
                        {{$vacante->cantidad}}
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h5>Estado en el sistema</h5>
                        @if ($vacante->state == 1)
                        <span class="badge badge-primary">Activo</span>
                        @else
                        <span class="badge badge-danger">No activo</span>
                        
                        @endif
                    </div>
                    <div class="col-md-6">
                        <h5>Ciudades en las que esta presente la vacante</h5>
                        <ul>
                            @foreach ($detalles_vacantes as $detalle_vacante)
                                <li>{{$detalle_vacante->nameCiudad}} : {{$detalle_vacante->cantidad}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 d-flex flex-column align-content-center">
                        
                            <h5 class="text-center">Descripción</h5>
                        <p class="text-center">{{$vacante->description}}</p>
                        
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <h5>Fecha de creación de la vacante</h5>
                        {{$vacante->created_at->isoFormat('dddd D MMMM YYYY, h:mm a')}}
                    </div>
                    <div class="col-md-6">
                        <h5>Última fecha la actualizacion</h5>
                        {{$vacante->updated_at->isoFormat('dddd D MMMM YYYY, h:mm a')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection