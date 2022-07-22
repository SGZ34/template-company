<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Empresa extends Model
{
    use HasFactory;
    protected $table = "detalles_empresas";

    protected $fillable = ["id", "idEmpresa", "idCiudad"];

    public $timestamps = false;
}
