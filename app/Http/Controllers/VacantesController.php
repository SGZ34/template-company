<?php

namespace App\Http\Controllers;

use App\Models\Detalle_Empresa;
use App\Models\Empleo;
use App\Models\Empresa;
use App\Models\Vacante;
use Illuminate\Http\Request;

class VacantesController extends Controller
{

    public function index()
    {
        $vacantes = Vacante::select("vacantes.*", "empleos.name as nameEmpleo")
            ->join("empleos", "vacantes.idEmpleo", "=", "empleos.id")
            ->get();

        $state = 1;
        return view("vacantes.index", compact("vacantes", "state"));
    }


    public function create()
    {
        $empleos = Empleo::select("*")->where("state", 1)->get();
        $empresas = Empresa::select("*")->where("state", 1)->get();
        return view("vacantes.create", compact("empleos", "empresas"));
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function getCity($id)
    {
        $detalles_ciudades = Detalle_Empresa::select("detalles_empresas.idCiudad", "ciudades.name as nameCiudad")
            ->join("ciudades", "detalles_empresas.idCiudad", "=", "ciudades.id")
            ->where("detalles_empresas.idEmpresa", $id)
            ->get();

        return response()->json(["ciudades" => $detalles_ciudades]);
    }
}
