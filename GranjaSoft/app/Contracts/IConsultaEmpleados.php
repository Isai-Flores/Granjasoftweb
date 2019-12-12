<?php 

namespace App\Contracts;

interface IConsultarEmpleados{
	//Orden de ELiminar las vacunas vencidas de la base de datos
	public function consultar($nombre,$edad,$puesto,$granja_id);
}
