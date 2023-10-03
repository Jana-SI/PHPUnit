<?php
    namespace app\libraries;

    class Produto {
        private string $nome;
        private float $preco; // Declaração da variável preço como float
    
        public function setNome(string $nome) {
            $this->nome = $nome;
        }
    
        public function getNome() {
            return $this->nome;
        }
    
        // Método para definir o preço do produto
        public function setPreco(float $preco) {
            $this->preco = $preco;
        }
    
        // Método para obter o preço do produto
        public function getPreco() {
            return $this->preco;
        }
    }
?>