@extends('layouts.admin')

@section('title')
    Crear vacante
@endsection

@section('content')
    <div class="">
       <form action="/vacantes" method="post">
            @csrf
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
                                    <option value="{{$empleo->id}}">{{$empleo->name}}</option>
                                @endforeach
                            </select>
                            @error('idEmpleo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="" class="mt-3">Descripción de la vacante</label>
                            <textarea name="description" id="description"  style="resize: none" rows="4" class="form-control @error('description') is-invalid @enderror">{{old("description")}}</textarea>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="" class="mt-3">Cantidad de vacantes totales</label>
                                <input type="text" name="cantidadVacantes" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">
                                Empresas que la solicitan
                            </h5>
                        </div>
                        <div class="card-body">
                            <label for="">Seleccione la empresa</label>
                            <select id="empresa" class="form-control" onchange="handleOnChange()">
                                <option value="">--Seleccione--</option>
                                @foreach ($empresas as $empresa)
                                    <option value="{{$empresa->id}}">{{$empresa->name}}</option>
                                @endforeach
                            </select>
                            <label for="" class="mt-4">Seleccione la ciudad</label>
                            <select id="ciudad" class="form-control">
                                <option value="">--Seleccione--</option>
                                
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
                                        <th>Ciudades</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="tableVacantes">

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