<?php 
namespace App\Http\Controllers\Services;
use App\Vacuna;
use App\Http\Controllers\Controller;
use App\Contracts\IEliminarVacunas;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class EliminarVacunasService extends Controller	implements IEliminarVacunas{

	public function eliminar($animal_id,$nombre, $tipo, $caducidad)
    {
       $vacuna=Vacuna::delete([
       		'animal_id'=>$animal_id,
            'nombre'=>$nombre,
            'tipo'=>$tipo,
            'caducidad'=>$caducidad
        ]);
	}
}

 