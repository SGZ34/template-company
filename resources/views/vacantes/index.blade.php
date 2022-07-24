@extends('layouts.admin')

@section('title')
    Listado de vacantes
@endsection


@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-center">
                <a href="/vacantes/create" class="btn btn-outline-dark">Crear vacante</a>
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
                                <td>{{$vacante->description}}</td>
                                <td>{{$vacante->cantidad}}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        @if ($vacante->state == 0)
                                            <span class="badge badge-danger">Inactivo</span>
                                        @else
                                            <span class="badge badge-primary">Activo</span>
                                        @endif
                                    </div>
                                </td>
                                <td class="d-flex justify-content-center">
                                    <a href="/vacantes/{{$vacante->id}}/edit" class="btn btn-warning text-white text-sm mr-4"><i class="fas fa-edit"></i></a>
                                    @if ($vacante->state == 0)
                                        <a href="/vacantes/updateState/1/{{$empleo->id}}" class="btn btn-success text-whit text-sm"><i class="fas fa-check"></i></a>    
                                    @else
                                        <a href="/vacantes/updateState/0/{{$empleo->id}}" class="btn btn-danger text-white text-sm"><i class="fas fa-ban "></i></a>    
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
    <script>
        $(document).ready( function () {
            $('#table').DataTable({
                language : spanish
            }
            );
        } );
    </script>
@endsection