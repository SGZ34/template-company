<?php

use App\Http\Controllers\CiudadesController;
use App\Http\Controllers\EmpleosController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\VacantesController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(["register" => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(["middleware" => "auth"], function () {

    //empleos
    Route::get("/empleos/updateState/{state}/{id}", [EmpleosController::class, 'updateState']);
    Route::get("/empleos/showDisabled", [EmpleosController::class, "showDisabled"]);


    //empresas
    Route::get("/empresas/updateState/{state}/{id}", [EmpresasController::class, 'updateState']);
    Route::get("/empresas/showDisabled", [EmpresasController::class, "showDisabled"]);
    Route::get("/empresas/eliminarCiudadExistente/{id}", [EmpresasController::class, "eliminarCiudadExistente"]);

    //vacantes
    Route::get("/vacantes/updateState/{state}/{id}", [VacantesController::class, 'updateState']);
    Route::get("/vacantes/showDisabled", [VacantesController::class, "showDisabled"]);
    Route::get("/vacantes/getCity/{id}", [VacantesController::class, "getCity"]);
    //Resource
    Route::resources([
        "ciudades" => CiudadesController::class,
        "empleos" => EmpleosController::class,
        "empresas" => EmpresasController::class,
        "vacantes" => VacantesController::class,

    ]);
});
