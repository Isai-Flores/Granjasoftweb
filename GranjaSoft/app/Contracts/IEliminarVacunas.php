<?php 

namespace App\Contracts;

interface IEliminarVacunas{
	//Orden de ELiminar las vacunas vencidas de la base de datos
	public function eliminar($animal_id,$nombre, $tipo, $caducidad);
}
