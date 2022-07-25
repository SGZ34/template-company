@extends('layouts.admin')

@section('title')
    Listado de vacantes
@endsection


@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-center">
                <a href="/vacantes/create" class="btn btn-outline-dark mr-4">Crear vacante</a>
                @if ($state == 1)
                <a href="/vacantes/showDisabled" class="btn btn-outline-dark">Ver vacantes inactivas</a>
                @else
                <a href="/vacantes" class="btn btn-outline-dark">Ver vacantes Activas</a>
                @endif
            </div>
        </div>
        <div class="card-body">
                <table class="table table-bordered" id="table">
                    <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Vacante
                                </th>
                                <th>
                                    Descripción
                                </th>
                                <th>
                                    cantidad
                                </th>
                                <th>
                                    Estado
                                </th>
                                <th>
                                    Acciones
                                </th>
                            </tr>
                    </thead>
                    <tbody>
                        @foreach ($vacantes as $vacante)
                            <tr>
                                <td>{{$vacante->id}}</td>
                                <td>{{$vacante->nameEmpleo}}</td>
                                <td>{{Str::limit($vacante->description, 10)}}</td>
                                <td>{{$vacante->cantidad}}</td>
                                <td>

                                    <div class="d-flex justify-content-center">
                                        @if ($vacante->state == 0)
                                            <span class="badge badge-danger">Inactiva</span>
                                        @else
                                            <span class="badge badge-primary">Activa</span>
                                        @endif
                                    </div>
                                </td>
                                <td class="d-flex justify-content-center">
                                    <a href="/vacantes/{{$vacante->id}}" class="btn btn-success text-sm"><i class="fa fa-info" aria-hidden="true"></i></a>
                                    
                                    <a href="/vacantes/{{$vacante->id}}/edit" class="btn btn-warning text-white text-sm mx-4"><i class="fas fa-edit"></i></a>
                                    @if ($vacante->state == 0)
                                        <a href="/vacantes/updateState/1/{{$vacante->id}}" class="btn btn-success text-whit text-sm"><i class="fas fa-check"></i></a>    
                                    @else
                                        <a href="/vacantes/updateState/0/{{$vacante->id}}" class="btn btn-danger text-white text-sm"><i class="fas fa-ban "></i></a>    
                                    @endif
                                </td>
                            </tr>           

                        @endforeach
                    </tbody>
                </table>
            
        </div>
    </div>
@endsection

@section('scripts')

@endsection