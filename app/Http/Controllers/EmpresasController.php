<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Detalle_Empresa;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresasController extends Controller
{

    public function index()
    {
        $empresas = Empresa::select("empresas.*")->where("state", 1)->get();
        $state = 1;
        $cantidadCiudades = [];
        foreach ($empresas as $key => $empresa) {
            $cantidadCiudades[$key] = Detalle_Empresa::where("idEmpresa", $empresa->id)->count();
        }

        return view("empresas.index", compact("empresas", "state", "cantidadCiudades"));
    }


    public function create()
    {
        $ciudades = Ciudad::all();

        return view("empresas.create", compact("ciudades"));
    }


    public function store(Request $request)
    {
        $campos = [
            'name' => 'required|string|min:3|max:80|unique:empresas',
            'nit' => 'required|numeric|unique:empresas',
        ];
        $this->validate($request, $campos);

        try {
            DB::beginTransaction();
            $empresa = Empresa::create([
                "name" => $request->name,
                "nit" => $request->nit,
                "state" => 1
            ]);

            if ($request["idCiudad"] != null) {
                foreach ($request["idCiudad"] as $idCiudad) {
                    Detalle_Empresa::create([
                        "idEmpresa" => $empresa->id,
                        "idCiudad" => $idCiudad
                    ]);
                }
            } else {
                return back()->with("error", "seleccione por favor una o mas ciudades");
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with("error", $e->getMessage());
        }
        DB::commit();
        return redirect("/empresas")->with("success", "Empresa creada satisfactoriamente");
    }


    public function show($id)
    {
        if ($id) {
            try {
                $empresa = Empresa::where("id", $id)->first();

                if ($empresa) {
                    $ciudades = Detalle_Empresa::select("detalles_empresas.*", "ciudades.name as nameCiudad")
                        ->join("ciudades", "detalles_empresas.idCiudad", "=", "ciudades.id")
                        ->where("detalles_empresas.idEmpresa", $id)
                        ->get();


                    return view("empresas.details", compact("empresa", "ciudades"));
                }
                return redirect("/empresas")->with("error", "La empresa no fue encontrada");
            } catch (\Exception $e) {
                return redirect("/empresas")->with("error", $e->getMessage());
            }
        }
    }


    public function edit($id)
    {
        if ($id) {
            try {
                $empresa = Empresa::findOrFail($id);
                if ($empresa) {
                    $ciudades = Ciudad::all();
                    $ciudadesEmpresa = Detalle_Empresa::select("detalles_empresas.*", "ciudades.id as idCiudad", "ciudades.name as ciudadName")
                        ->join("ciudades", "detalles_empresas.idCiudad", "=", "ciudades.id")
                        ->where("detalles_empresas.idEmpresa", $empresa->id)
                        ->get();

                    return view("empresas.edit", compact("empresa", "ciudadesEmpresa", "ciudades"));
                }
            } catch (\Exception $e) {
                return redirect("/empresas")->with("error", $e->getMessage());
            }
        }
    }

    public function update(Request $request, $id)
    {
        if ($id) {
            try {

                $empresa = Empresa::findOrFail($id);

                if ($empresa) {
                    $campos = [
                        'name' => 'required|string|min:3|max:80|unique:empresas,name,' . $empresa->id,
                        'nit' => 'required|numeric|unique:empresas,nit,' . $empresa->id,
                    ];
                    $this->validate($request, $campos);
                    DB::beginTransaction();
                    $empresa->update(["name" => $request->name, "nit" => $request->nit]);

                    $cuentaDetalles = Detalle_Empresa::select("*")->where("idEmpresa", $empresa->id)->count();
                    if ($cuentaDetalles == 0 && $request["idCiudad"] != null) {
                        foreach ($request["idCiudad"] as $idCiudad) {
                            Detalle_Empresa::create([
                                "idEmpresa" => $empresa->id,
                                "idCiudad" => $idCiudad
                            ]);
                        }
                    } else if ($cuentaDetalles == 0 && $request["idCiudad"] == null) {
                        return back()->with("error", "seleccione por favor una o mas ciudades");
                    } else if ($cuentaDetalles > 0 && $request["idCiudad"] != null) {
                        foreach ($request["idCiudad"] as $idCiudad) {
                            Detalle_Empresa::create([
                                "idEmpresa" => $empresa->id,
                                "idCiudad" => $idCiudad
                            ]);
                        }
                    }
                    DB::commit();
                    return redirect("/empresas")->with("success", "Empresa editada satisfactoriamente");
                }
                return redirect("/empresas")->with("error", "La empresa no fue encontrada");
            } catch (\Exception $e) {
                DB::rollBack();
                return back()->with("error", $e->getMessage());
            }
        }
        return redirect("/empresas")->with("error", "El cambio de información no se pudo realizar porque no se encontró la empresa");
    }


    public function destroy($id)
    {
        //
    }

    public function updateState($state, $id)
    {
        if ($id) {
            try {
                $empresa = Empresa::findOrFail($id);
                if ($empresa) {
                    $empresa->where("id", $id)->update(["state" => $state]);
                    return back()->with("success", "El cambio de estado se hizo correctamente");
                }
            } catch (\Exception $e) {
                return back()->with("error", $e->getMessage());
            }
        }
        return back()->with("error", "La empresa no fue encontrado");
    }

    public function eliminarCiudadExistente($id)
    {

        if ($id) {
            try {
                $detalle_empresa = Detalle_Empresa::findOrFail($id);
                if ($detalle_empresa) {
                    $detalle_empresa->delete();
                    return response()->json(["isValid" => true]);
                }
                return response()->json(["isValid" => false]);
            } catch (\Exception $e) {
                return response()->json(["isValid" => false]);
            }
        }
        return response()->json(["isValid" => false]);
    }

    public function showDisabled()
    {
        $empresas = Empresa::select("empresas.*")->where("state", 0)->get();
        $state = 0;

        $cantidadCiudades = [];
        foreach ($empresas as $key => $empresa) {
            $cantidadCiudades[$key] = Detalle_Empresa::where("idEmpresa", $empresa->id)->count();
        }

        return view("empresas.index", compact("empresas", "state", "cantidadCiudades"));
    }
}
