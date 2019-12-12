<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IConsultaEmpleados;
use App\Empleado;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroEmpleadosService extends Controller implements IConsultaEmpleados{
    public function consulta($nombre, $edad, $puesto, $granja_id){

        $empleado=Empleado::consult([
            'nombre'=>$nombre,
            'edad'=>$edad,
            'puesto'=>$puesto,
            'granja_id'=>$granja_id
        ]);
    }
}