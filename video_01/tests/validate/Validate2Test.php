<?php

/* rodar testes comando no terminal
roda todos: 
    vendor/bin/phpunit tests --colors

roda especifico:
    vendor/bin/phpunit tests --filter=CartTest::nome do teste --colors
    vendor/bin/phpunit tests --filter=nome do teste --colors

rodar xml
    vendor/bin/phpunit --testsuite=tests
*/

namespace tests\validate;

use PHPUnit\Framework\TestCase;

class Validate2Test extends TestCase{
    
    public function test_nao_validado(){
        $this->assertFalse(false);
    }
}

?>