<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    /**
     * @test
     */
    public function apenas_usuarios_logados_podem_ver_lista_clientes(){
        /* $response = $this->get('/');

        /* passa 
        $response->assertStatus(200);
        
        /* falha 
        $response->assertStatus(400); */

        $response = $this->get('/customers')->assertRedirect('/login');
    }
}
