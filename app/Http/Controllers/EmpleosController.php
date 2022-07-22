<?php

namespace App\Http\Controllers;

use App\Models\Empleo;
use Illuminate\Http\Request;

class EmpleosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleos = Empleo::select("empleos.*")->where("state", 1)->get();
        $state = 1;



        return view("empleos.index", compact("empleos", "state"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("empleos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            "name" => 'required|min:8|max:100|string|unique:empleos'
        ];

        $this->validate($request, $campos);

        try {
            Empleo::create([
                "name" => $request->name,
                "state" => 1
            ]);

            return redirect("/empleos")->with("success", "el empleo se ha guardado satisfactoriamente");
        } catch (\Exception $e) {
            return redirect("/empleos")->with("error", $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($id) {
            $empleo = Empleo::findOrFail($id);
            if ($empleo) {
                return view("empleos.edit", compact("empleo"));
            }
            return redirect("/empleos")->with("error", "El empleo no fue encontrada");
        }
        return redirect("/empleos")->with("error", "el empleo no fue encontrada");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($id) {
            $empleo = Empleo::findOrFail($id);
            if ($empleo) {
                $campos = [
                    "name" => 'required|min:8|max:100|string|unique:ciudades,name,' . $empleo->id
                ];

                $this->validate($request, $campos);

                try {
                    $empleo::where("id", $id)->update(["name" => $request->name]);

                    return redirect("/empleos")->with("success", "El empleo se ha editado satisfactoriamente");
                } catch (\Exception $e) {
                    return redirect("/empleos")->with("error", $e->getMessage());
                }
            }
            return redirect("/empleos")->with("error", "El empleo no se ha podido editar");
        }
        return redirect("/empleos")->with("error", "El empleo no se ha podido editar");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateState($state, $id)
    {
        if ($id) {
            try {
                $empleo = Empleo::findOrFail($id);
                if ($empleo) {
                    $empleo->where("id", $id)->update(["state" => $state]);
                    return back()->with("success", "El cambio de estado se hizo correctamente");
                }
            } catch (\Exception $e) {
                return back()->with("error", $e->getMessage());
            }
        }
        return back()->with("error", "El empleo no fue encontrado");
    }

    public function showDisabled()
    {
        $empleos = Empleo::select("empleos.*")->where("state", 0)->get();
        $state = 0;



        return view("empleos.index", compact("empleos", "state"));
    }
}
