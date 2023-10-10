<div class="titulo">Polimorfismo</div>

<?php

    abstract class comida{

        public $peso;
    }

    class Arroz extends comida{
        
    }

    class ArrozAGrega extends comida{
        
    }

    class Feijao extends comida{
        
    }

    class sorvete extends comida{
        
    }

    class Pessoa003{

        public $peso;


        function __construct($peso){

            $this-> peso = $peso;
        }
    
        public function comer(comida $comida){

            $this->peso += $comida ->peso;
        }
    }


$c1 = new Arroz();
$c1->peso = 0.45;

$c2 = new sorvete();
$c2->peso = 0.90;

$c3 = new ArrozAGrega();
$c3->peso = 0.95;


$p = new Pessoa003(83.45);
$p->comer($c1);
$p->comer($c2);
$p->comer($c3);

echo $p->peso;




?>