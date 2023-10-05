<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * @test
     */
    public function verifica_colunas_usuario_certas()
    {
        $usuario = new User();
        $expected = [
            'name',
            'email'
        ];

        $comparacao = array_diff($expected, $usuario->getFillable());

        /* dd($comparacao); */

        $this->assertEquals(0, count($comparacao));
    }
}

/* 
Verbo de ação_Quem ou q fazer_comportamento esperado
verifica_colunas_usuario_certas
*/