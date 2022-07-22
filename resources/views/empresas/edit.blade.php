@extends('layouts.admin')

@section('title')
    Editar empresa
@endsection

@section('content')
    <div class="container">
       <form action="/empresas/{{$empresa->id}}" method="post">
            @csrf
            @method("PUT")
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">
                                Información de la empresa
                            </h5>
                        </div>
                        <div class="card-body">
                            <label for="">Nombre de la empresa</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$empresa->name}}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="" class="mt-3">NIT de la empresa</label>
                            <input type="number" class="form-control @error('nit') is-invalid @enderror" name="nit" value="{{$empresa->nit}}">
                            @error('nit')
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
                                Ubicaciones de la empresa
                            </h5>
                        </div>
                        <div class="card-body">
                            <label for="">Seleccione la ciudad</label>
                            <select id="ciudad" class="form-control">
                                <option value="">--Seleccione--</option>
                                @foreach ($ciudades as $ciudad)
                                    <option value="{{$ciudad->id}}">{{$ciudad->name}}</option>
                                @endforeach
                            </select>
                            <div class="d-flex justify-content-center mt-2">
                                <button class="btn btn-outline-secondary" type="button" onclick="agregarCiudad()">
                                    Agregar
                                </button>
                            </div>
                        </div>
                        <div class="card-footer">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="tableCiudades">
                                    @foreach ($ciudadesEmpresa as $ciudadEmpresa)
                                        <tr id="tr-{{$ciudadEmpresa->idCiudad}}" class="trs">
                                            <td>{{$ciudadEmpresa->idCiudad}}</td>
                                            <td>{{$ciudadEmpresa->ciudadName}}</td>
                                            <td>
                                                
                                                <button type="button" class="btn btn-danger" onclick="eliminarCiudadExistente({{$ciudadEmpresa->id}})">Eliminar</button>
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
    <script>
        function agregarCiudad(){
            let validate = validateCity();
            if(!validate){
                let idCiudad = $("#ciudad option:selected").val();
            if(idCiudad != ''){
                let ciudad = $("#ciudad option:selected").text();

            $("#tableCiudades").append(`
                <tr id="tr-${idCiudad}" class="trs">
                    <input type="hidden" name="idCiudad[]" value="${idCiudad}">
                    <td>${idCiudad}</td>    
                    <td>${ciudad}</td>    
                    <td>
                        <button class="btn btn-danger" type="button" onclick="eliminarCiudad(${idCiudad})">Eliminar</button>
                    </td>    
                </tr>
            `)
            }else{
                alertify.set('notifier','position', 'top-right');
                alertify.error('Seleccione una ciudad por favor');
            }
            }else{
                alertify.set('notifier','position', 'top-right');
                alertify.error('Ya seleccionaste esta ciudad');
            }
            
            
        }
        function eliminarCiudad(id){
            $("#tr-"+id).remove();
        }

        

        function validateCity(){
            let validate = false;
            if($(".trs").length > 0){
                $(".trs").each(function (){
                    let idCiudad = $("#ciudad option:selected").val()
                    if(this.id == `tr-${idCiudad}`){
                        validate = true;
                    }
                })
            }
            return validate;
        }

        function eliminarCiudadExistente(id){       
           
            if(confirm("¿Deseas eliminar esta ciudad de esta empresa?")){
                $.ajax({
                    url : `/empresas/eliminarCiudadExistente/${id}`,
                    type : "GET",
                    success : function({isValid}){
                        
                        if(isValid){
                            location.reload();
                    
                        }
                    }
                })      
            }
           
        }
        
    </script>
@endsection

