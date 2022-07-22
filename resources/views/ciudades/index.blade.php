@extends('layouts.admin')

@section('title')
    Listado de ciudades
@endsection


@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-center">
                <a href="/ciudades/create" class="btn btn-outline-dark">Crear ciudad</a>
            </div>
        </div>
        <div class="card-body">
            @if (count($ciudades) == 0 )
                <h1 class="text-center">No hay información</h1>
            @else
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
                                    Acciones
                                </th>
                            </tr>
                    </thead>
                    <tbody>
                        @foreach ($ciudades as $ciudad)
                            <tr>
                                <td>{{$ciudad->id}}</td>
                                <td>{{$ciudad->name}}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="/ciudades/{{$ciudad->id}}/edit" class="btn btn-warning text-white"><i class="fas fa-edit"></i></a>
                                    
                                </td>
                            </tr>           

                        @endforeach
                    </tbody>
                </table>
            @endif
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