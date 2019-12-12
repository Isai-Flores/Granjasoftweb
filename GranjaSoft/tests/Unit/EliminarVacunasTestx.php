<?php 
namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class EliminarVacunasTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $animal_id = 1;
        $nombre = "Gripe Aviar";
        $tipo = "intramuscular";
        $caducidad = '2019-12-28';

        $response=$this->json('POST','/api/V1/IEliminarVacunas/eliminar/'.$animal_id.'/'.$nombre.'/'.$tipo.'/'.$caducidad);
        $response->assertStatus(200);
    }
}
