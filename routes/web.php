<?php

use App\Http\Controllers\CiudadesController;
use App\Http\Controllers\EmpleosController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\VacantesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
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

Auth::routes(["register" => false]);

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/ofertas-laborales', [WelcomeController::class, 'ofertas']);
Route::get('/trabaja-con-nosotros', [WelcomeController::class, 'trabajaNosotros']);
Route::post('/enviar-hoja-vida', [WelcomeController::class, 'hojaVida']);


Route::group(["middleware" => "auth"], function () {
    //home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

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
    Route::get("/vacantes/eliminarCiudadExistente/{id}", [VacantesController::class, 'eliminarCiudadExistente']);

    //Resources
    Route::resources([
        "ciudades" => CiudadesController::class,
        "empleos" => EmpleosController::class,
        "empresas" => EmpresasController::class,
        "vacantes" => VacantesController::class,

    ]);
});
