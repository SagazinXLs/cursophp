<div class="titulo">Primeira Classe</div>

<?php 

    Class Cliente {

        public $nome = "Anônimo";
        public $idade = 15;
        public function apresentar(){
            echo "Nome: {$this->nome} idade: {$this->idade} <br>";
        }
    }


$c1 = new Cliente(); // criação de objeto
$c1->nome = "João";
$c1->idade = 30;
$c1->apresentar(); // acessando uma função dentro da classe

$cliente2 = new Cliente(); // criação de objeto
$cliente2 -> nome = "cliverson";
$cliente2 -> idade = 30;
$cliente2 -> apresentar(); // acessando uma função dentro





?>