<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Detalle_Empresa;
use App\Models\Detalle_Vacante;
use App\Models\Empleo;
use App\Models\Empresa;
use App\Models\Vacante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class VacantesController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale("es");
        setlocale(LC_TIME, 'es_ES');
    }

    public function index()
    {
        $vacantes = Vacante::select("vacantes.*", "empleos.name as nameEmpleo")
            ->join("empleos", "vacantes.idEmpleo", "=", "empleos.id")
            ->where("vacantes.state", 1)
            ->get();

        $state = 1;
        return view("vacantes.index", compact("vacantes", "state"));
    }


    public function create()
    {
        $empleos = Empleo::select("*")->where("state", 1)->get();
        $ciudades = Ciudad::all();
        return view("vacantes.create", compact("empleos", "ciudades"));
    }


    public function store(Request $request)
    {
        $campos = [
            "idEmpleo" => "required|numeric",
            "description" => "required|string|min:10|max:280",
            "cantidadTotalVacantes" => "required|numeric|min:1|max:200",

        ];

        $this->validate($request, $campos);

        try {
            DB::beginTransaction();
            $vacante = Vacante::create([
                "idEmpleo" => $request->idEmpleo,
                "description" => $request->description,
                "cantidad" => $request->cantidadTotalVacantes,
                "state" => 1
            ]);

            if ($request["idCiudad"] != null) {
                foreach ($request["idCiudad"] as $key => $ciudad) {

                    Detalle_Vacante::create([
                        "idVacante" => $vacante->id,
                        "idCiudad" => $ciudad,
                        "cantidad" => $request["cantidades"][$key]
                    ]);
                }
            } else {
                return back()->with("error", "por favor seleccione una o varias ciudades");
            }
            DB::commit();
            return redirect("/vacantes")->with("success", "Vacante creada satisfactoriamente");
        } catch (\Exception $e) {
            return back()->with("error", $e->getMessage());
        }
    }


    public function show($id)
    {
        if ($id) {
            try {
                $vacante = Vacante::select("vacantes.*", "empleos.name as nameEmpleo")
                    ->join("empleos", "vacantes.idEmpleo", "=", "empleos.id")
                    ->where("vacantes.id", $id)
                    ->first();
                $detalles_vacantes = Detalle_Vacante::select("detalles_vacantes.*", "ciudades.name as nameCiudad")
                    ->join("ciudades", "detalles_vacantes.idCiudad", "=", "ciudades.id")
                    ->where("detalles_vacantes.idVacante", $vacante->id)
                    ->get();


                return view("vacantes.details", compact("vacante", "detalles_vacantes"));
            } catch (\Exception $e) {
                return back()->with("error", $e->getMessage());
            }
        }
    }


    public function edit($id)
    {
        if ($id) {
            try {
                $vacante = Vacante::findOrFail($id);
                if ($vacante) {
                    $ciudades = Ciudad::all();
                    $empleos = Empleo::select("*")->where("state", 1)->get();
                    $ciudadesVacante = Detalle_Vacante::select("detalles_vacantes.*", "ciudades.name as ciudadName")
                        ->join("ciudades", "detalles_vacantes.idCiudad", "=", "ciudades.id")
                        ->where("detalles_vacantes.idVacante", $vacante->id)
                        ->get();

                    return view("vacantes.edit", compact("vacante", "ciudades", "ciudadesVacante", "empleos"));
                }
            } catch (\Exception $e) {
                return redirect("/empresas")->with("error", $e->getMessage());
            }
        }
    }


    public function update(Request $request, $id)
    {

        if ($id) {
            // try {
            $vacante = Vacante::findOrFail($id);
            if ($vacante) {
                $campos = [
                    "idEmpleo" => "required|numeric",
                    "description" => "required|string|min:10|max:280",
                    "cantidadTotalVacantes" => "required|numeric|min:1|max:200",

                ];

                $this->validate($request, $campos);

                $vacante->update([
                    "idEmpleo" => $request->idEmpleo,
                    "description" => $request->description,
                    "cantidad" => $request->cantidadTotalVacantes,
                ]);

                foreach ($request["idCiudad"] as $key => $ciudad) {
                    $detalle_vacante = Detalle_Vacante::where("idVacante", $vacante->id)
                        ->where("idCiudad", $ciudad)
                        ->first();



                    if ($detalle_vacante) {
                        $detalle_vacante->update(["cantidad" => $request["cantidades"][$key]]);
                    } else {
                        Detalle_Vacante::create([
                            "idVacante" => $vacante->id,
                            "idCiudad" => $ciudad,
                            "cantidad" => $request["cantidades"][$key]
                        ]);
                    }
                }
                return redirect("/vacantes")->with("success", "Vacante editada satisfactoriamente");
            }
            // } catch (\Exception $e) {
            //     return back()->with("error", $e->getMessage());
            // }
        }
    }


    public function destroy($id)
    {
        //
    }

    public function eliminarCiudadExistente($id)
    {
        if ($id) {
            try {
                $detalle_vacante = Detalle_Vacante::findOrFail($id);

                if ($detalle_vacante) {
                    $vacante = Vacante::findOrFail($detalle_vacante->idVacante);
                    $vacante->update(["cantidad" => $vacante->cantidad - $detalle_vacante->cantidad]);
                    $detalle_vacante->delete();

                    return response()->json(["isValid" => true]);
                }
                return response()->json(["isValid" => false]);
            } catch (\Exception $e) {
                return response()->json(["isValid" => false]);
            }
        }
        return response()->json(["isValid" => false]);
    }

    public function updateState($state, $id)
    {
        if ($id) {
            try {
                $vacante = Vacante::findOrFail($id);
                if ($vacante) {
                    $vacante->where("id", $id)->update(["state" => $state]);
                    return back()->with("success", "El cambio de estado se hizo correctamente");
                }
            } catch (\Exception $e) {
                return back()->with("error", $e->getMessage());
            }
        }
        return back()->with("error", "La vacante no fue encontrada");
    }

    public function showDisabled()
    {
        $vacantes = Vacante::select("vacantes.*", "empleos.name as nameEmpleo")
            ->join("empleos", "vacantes.idEmpleo", "=", "empleos.id")
            ->where("vacantes.state", 0)
            ->get();

        $state = 0;
        return view("vacantes.index", compact("vacantes", "state"));
    }
}
