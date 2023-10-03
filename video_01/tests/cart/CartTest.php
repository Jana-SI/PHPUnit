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

namespace tests\cart;

use app\exceptions\CartQuantityException;
use app\libraries\Cart;
use app\libraries\Produto;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    private readonly Cart $cart;

    public function setup(): void
    {
        $this->cart = new Cart;
    }

    // testAlgumaCoisa
    // test_alguma_coisa

    // teste 
    public function test_carrinho_vazio()
    {
        // asserção
        $this->assertEmpty($this->cart->getCart());
    }

    // teste 
    public function test_carrinho_nao_vazio()
    {
        $this->cart->add(new Produto);

        //asserção
        $this->assertNotEmpty($this->cart->getCart());
    }

    // teste 
    public function test_carrinho_exception_3_produtos_mais()
    {
        // neste caso a asserção no inicio
        $this->expectException(CartQuantityException::class);

        $produto1 = new Produto;
        $produto2 = new Produto;
        $produto3 = new Produto;
        $produto4 = new Produto;

        $this->cart->add($produto1);
        $this->cart->add($produto2);
        $this->cart->add($produto3);
        $this->cart->add($produto4);
    }

    // teste 
    public function test_se_tem_mais_de_1_item_no_carrinho()
    {

        $this->cart->add(new Produto);
        $this->cart->add(new Produto);

        //asserção
        $this->assertGreaterThan(1, count($this->cart->getCart()));
        /* $this->assertGreaterThanOrEqual(1, count($this->cart->getCart())); */
    }
}
