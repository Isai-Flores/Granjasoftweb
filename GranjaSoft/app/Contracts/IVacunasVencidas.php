<?php 
namespace App\Contracts;

interface IVacunasVencidas{
	public function registro($animal_id,$nombre, $tipo, $caducidad);
}