<?php 

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IVacunasVencidas;
use App\Vacuna;
use Illuminate\Support\Facades\DB;

class VacunasVencidasService extends Controller implements IVacunasVencidas{
	public function registro($animal_id,$nombre, $tipo, $caducidad){

    	$vacuna=Vacuna::create([
    	  	'animal_id'=>$animal_id,
            'nombre'=>$nombre,
            'tipo'=>$tipo,
            'caducidad'=>$caducidad
        ]);

	}
}