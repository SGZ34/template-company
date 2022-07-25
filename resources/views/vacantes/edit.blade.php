@extends('layouts.admin')

@section('title')
    Editar vacante
@endsection

@section('content')
    <div class="">
       <form action="/vacantes/{{$vacante->id}}" method="post">
            @csrf
            @method("PUT")
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">
                                Información de la vacante
                            </h5>
                        </div>
                        <div class="card-body">
                            <label for="">Empleo solicitado</label>
                            <select name="idEmpleo" id="idEmpleo" class="form-control @error('idEmpleo') is-invalid @enderror">
                                <option value="">--Seleccione--</option>
                                @foreach ($empleos as $empleo)
                                    <option value="{{$empleo->id}}" {{($empleo->id == $vacante->idEmpleo) ? 'selected' : '' }}>{{$empleo->name}}</option>
                                @endforeach
                            </select>
                            @error('idEmpleo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="" class="mt-3">Descripción de la vacante</label>
                            <textarea name="description" id="description"  style="resize: none" rows="4" class="form-control @error('description') is-invalid @enderror">{{$vacante->description}}</textarea>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="" class="mt-3">Cantidad de vacantes totales</label>
                                <input type="number" name="cantidadTotalVacantes" id="cantidadTotalVacantes" class="form-control @error('cantidadTotalVacantes') is-invalid @enderror"   value="{{$vacante->cantidad}}" readonly>
                                @error('cantidadTotalVacantes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">
                                Ciudades que la solicitan
                            </h5>
                        </div>
                        <div class="card-body">
                            <label for="" class="">Seleccione la ciudad</label>
                            <select id="ciudad" class="form-control">
                                <option value="">--Seleccione--</option>
                                @foreach ($ciudades as $ciudad)
                                <option value="{{$ciudad->id}}">{{$ciudad->name}}</option>
                                    
                                @endforeach
                            </select>
                            <label for="" class="mt-4">Digite la cantidad disponible</label>
                            <input type="number" class="form-control" id="cantidadVacantes">
                            <div class="d-flex justify-content-center mt-2">
                                <button class="btn btn-outline-secondary" type="button" onclick="agregarDetalle()">
                                    Agregar
                                </button>
                            </div>
                        </div>
                        <div class="card-footer">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Cantidad</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="tableVacantes">
                                    @foreach ($ciudadesVacante as $ciudadVacante)
                                        <tr id="tr-{{$ciudadVacante->idCiudad}}" class="trs">
                                            
                                            <input type="hidden" value="{{$ciudadVacante->idCiudad}}" name="idCiudad[]" class="idCiudadValidate">

                                            <input type="hidden" value="{{$ciudadVacante->cantidad}}" name="cantidades[]" class="cantidadesValidate">

                                            <td>{{$ciudadVacante->ciudadName}}</td>

                                            <td>
                                                <span class="text-cantidad">{{$ciudadVacante->cantidad}}</span>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger" onclick="eliminarCiudadExistente({{$ciudadVacante->id}})">Eliminar</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">
                Guardar
            </button>
        </form>
    </div>
@endsection

@section('scripts')
<script src="/js/scripts.js"></script>
@endsection