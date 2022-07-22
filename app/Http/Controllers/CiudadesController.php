<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadesController extends Controller
{

    public function index()
    {
        $ciudades = Ciudad::all();

        return view("ciudades.index", compact("ciudades"));
    }


    public function create()
    {
        return view("ciudades.create");
    }



    public function store(Request $request)
    {
        $campos = [
            "name" => 'required|min:5|max:100|string|unique:ciudades'
        ];

        $this->validate($request, $campos);

        try {
            Ciudad::create(["name" => $request->name]);

            return redirect("/ciudades")->with("success", "La ciudad se ha guardado satisfactoriamente");
        } catch (\Exception $e) {
            return redirect("/ciudades")->with("error", $e->getMessage());
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        if ($id) {
            $ciudad = Ciudad::findOrFail($id);
            if ($ciudad) {
                return view("ciudades.edit", compact("ciudad"));
            }
            return redirect("/ciudades")->with("error", "La ciudad no fue encontrada");
        }
        return redirect("/ciudades")->with("error", "La ciudad no fue encontrada");
    }


    public function update(Request $request, $id)
    {
        if ($id) {
            $ciudad = Ciudad::findOrFail($id);
            if ($ciudad) {
                $campos = [
                    "name" => 'required|min:8|max:100|string|unique:ciudades,name,' . $ciudad->id
                ];

                $this->validate($request, $campos);

                try {
                    $ciudad::where("id", $id)->update(["name" => $request->name]);

                    return redirect("/ciudades")->with("success", "La ciudad se ha editado satisfactoriamente");
                } catch (\Exception $e) {
                    return redirect("/ciudades")->with("error", $e->getMessage());
                }
            }
            return redirect("/ciudades")->with("error", "La ciudad no se ha podido editar");
        }
        return redirect("/ciudades")->with("error", "La ciudad no se ha podido editar");
    }


    public function destroy($id)
    {
        //
    }
}
