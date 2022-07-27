<?php

namespace App\Http\Controllers;

use App\Models\Detalle_Vacante;
use App\Models\Vacante;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view("landing.welcome");
    }

    public function ofertas()
    {
        $vacantes_disponibles = Vacante::select("vacantes.*", "empleos.name as nameEmpleo")
            ->join("empleos", "vacantes.idEmpleo", "=", "empleos.id")
            ->where("vacantes.state", 1)
            ->get();

        $cantidad_disponible = [];

        foreach ($vacantes_disponibles as $key => $value) {
            $cantidad_disponible[$key] = Detalle_Vacante::where("idVacante", $value->id)->count();
        }

        $detalles_vacantes = [];
        foreach ($vacantes_disponibles as $key => $value) {
            $detalles_vacantes[$key] = Detalle_Vacante::select("detalles_vacantes.*", "ciudades.name as nameCiudad")
                ->join("ciudades", "detalles_vacantes.idCiudad", "=", "ciudades.id")
                ->where("idVacante", $value->id)
                ->get();
        }
        
        return view("landing.ofertas", compact("vacantes_disponibles", "cantidad_disponible", "detalles_vacantes"));
    }
}
