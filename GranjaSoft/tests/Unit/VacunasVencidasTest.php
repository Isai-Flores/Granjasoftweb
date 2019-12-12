<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class VacunasVencidasTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCrearTest()
    {
        $animal_id= 1;
        $nombre = "Gripe Aviar";
        $tipo = "intramuscular";
        $caducidad = '2019-12-28';

        $response=$this->json('POST','/api/V1/IVacunasVencidas/registro/'.$animal_id.'/'.$nombre.'/'.$tipo.'/'.$caducidad);
        $response->assertStatus(200);
    }
}
