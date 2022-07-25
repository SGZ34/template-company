@extends('layouts.admin')

@section('title')
    Listado de empresas
@endsection


@section('content')
    <div class="card ">
        <div class="card-header">
            <div class="d-flex justify-content-center">
                <a href="/empresas/create" class="btn btn-outline-dark mr-2">Crear empresa</a>
                @if ($state == 1)
                <a href="/empresas/showDisabled" class="btn btn-outline-dark">Ver empresas deshabilitadas</a>
                @else
                <a href="/empresas" class="btn btn-outline-dark">Ver empresas habilitadas</a> 
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
                                NIT
                            </th>
                            <th>
                                Presencia en ciudades
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
                    
                    @foreach ($empresas as $key => $empresa)
                        <tr>
                            <td>{{$empresa->id}}</td>
                            <td>{{$empresa->name}}</td>
                            <td>{{$empresa->nit}}</td>
                            <td>{{$cantidadCiudades[$key]}}</td>
                            <td >
                                <div class="d-flex justify-content-center">
                                    @if ($empresa->state == 0)
                                    <span class="badge badge-danger">Inactivo</span>
                                @else
                                <span class="badge badge-primary">Activo</span>
                                @endif
                                </div>
                            </td>
                            <td class="d-flex justify-content-center">
                                <a href="/empresas/{{$empresa->id}}" class="btn btn-success text-sm"><i class="fa fa-info" aria-hidden="true"></i></a>
                                
                                <a href="/empresas/{{$empresa->id}}/edit" class="btn btn-warning text-white text-sm mx-4"><i class="fas fa-edit"></i></a>

                                @if ($empresa->state == 0)
                                    <a href="/empresas/updateState/1/{{$empresa->id}}" class="btn btn-success text-whit text-sm "><i class="fas fa-check"></i></a>    
                                @else
                                    <a href="/empresas/updateState/0/{{$empresa->id}}" class="btn btn-danger text-white text-sm "><i class="fas fa-ban"></i></a>    
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