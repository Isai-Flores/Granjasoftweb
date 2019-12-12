<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ConsultaEmpleadosTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testConsultarTest()
    {
        $nombre = "Jose";
        $edad = 30;
        $puesto = "Alimentacion";
        $granja_id = 1;

        $response=$this->json('POST','/api/V1/IRegistroEmpleados/registro/'.$nombre.'/'.$edad.'/'.$puesto.'/'.$granja_id);
        $response->assertStatus(200);
    }
}
