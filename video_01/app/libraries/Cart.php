<?php

namespace app\libraries;

use app\exceptions\CartQuantityException;

class Cart{
    private array $produtos = [];

    public function add(Produto $produto){
        if (count($this->produtos) === 3) {
           throw new CartQuantityException('Carrinho não pode ter mais de 3 itens');
        }

        $this->produtos[] = $produto;
    }

    public function getCart(){
        return $this->produtos;
    }
}

?>