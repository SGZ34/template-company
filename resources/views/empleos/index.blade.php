@extends('layouts.admin')

@section('title')
    Listado de empleos
@endsection


@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-center">
                <a href="/empleos/create" class="btn btn-outline-dark mr-2">Crear empleo</a>
                @if ($state == 1)
                <a href="/empleos/showDisabled" class="btn btn-outline-dark">Ver empleos deshabilitados</a>
                @else
                <a href="/empleos" class="btn btn-outline-dark">Ver empleos habilitados</a>
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
                                Nombre
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
                    
                    @foreach ($empleos as $empleo)
                        <tr>
                            <td>{{$empleo->id}}</td>
                            <td>{{$empleo->name}}</td>
                            <td >
                                <div class="d-flex justify-content-center">
                                    @if ($empleo->state == 0)
                                    <span class="badge badge-danger">Inactivo</span>
                                @else
                                <span class="badge badge-primary">Activo</span>
                                @endif
                                </div>
                            </td>
                            <td class="d-flex justify-content-center">
                                <a href="/empleos/{{$empleo->id}}/edit" class="btn btn-warning text-white text-sm mr-4"><i class="fas fa-edit"></i></a>
                                @if ($empleo->state == 0)
                                <a href="/empleos/updateState/1/{{$empleo->id}}" class="btn btn-success text-whit text-sm"><i class="fas fa-check"></i></a>    
                                @else
                                <a href="/empleos/updateState/0/{{$empleo->id}}" class="btn btn-danger text-white text-sm"><i class="fas fa-ban "></i></a>    
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