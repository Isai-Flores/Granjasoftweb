<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1','middleware' => 'auth:api'], function () {
    //    Route::resource('task', 'TasksController');

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_api_routes
});
//saul
route::post('/V1/IRegistroEmpleados/registro/{nombre}/{edad}/{puesto}/{granja_id}', 'Services\RegistroEmpleadosService@registro');
//cristobal
route::post('/V1/IConsultaEmpleados/consulta/{nombre}/{edad}/{puesto}/{granja_id}', 'Services\ConsultaEmpleadosService@consulta');
 //ricardo
route::post('/V1/IVacunasVencidas/registro/{animal_id}/{nombre}/{tipo}/{caducidad}', 'Services\VacunasVencidasService@registro');
route::post('/V1/IEliminarVacunas/eliminar/{animal_id}/{nombre}/{tipo}/{caducidad}', 'Services\EliminarVacunasService@eliminar');

