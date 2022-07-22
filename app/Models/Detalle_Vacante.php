<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Vacante extends Model
{
    use HasFactory;
    protected $table = "detalles_vacantes";

    protected $fillable = ["id", "idVacante", "idCiudad", "idEmpresa"];

    public $timestamps = false;
}
