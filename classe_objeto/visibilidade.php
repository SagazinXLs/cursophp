<div class="titulo">Visibilidade</div>

<?php 

    class VisibilidadeA {
        public $publico = "publico";
        protected $protegido = "Protegido";
        private $privado = "privado";

        public function mostrarVisibilidade(){
            echo "Classe VisibilidadeA Publico = {$this->publico}<br>";
            echo "Classe VisibilidadeA Protegido = {$this->protegido}<br>";
            echo "Classe VisibilidadeA Privado = {$this->privado}<br>";

        }
        public function vaiPorHeranca(){
            echo "Serei transmitido por Heranca ";
        }
    }

    $visiA = new VisibilidadeA();
    echo $visiA->publico;
    $visiA->mostrarVisibilidade();

    class VisibilidadeB extends VisibilidadeA{

        public function mostrarVisibilidadeB(){
            echo "Classe VisibilidadeB Publico = {$this->publico}<br>";
            echo "Classe VisibilidadeB Protegido = {$this->protegido}<br>";
            echo "Classe VisibilidadeB Privado = {$this->privado}<br>";

            parent::vaiPorHeranca();

        }
    }

    $visiB = new VisibilidadeB();
    $visiB->mostrarVisibilidadeB();
    $visiB->mostrarVisibilidade();
    $visiB->vaiPorHeranca();

?>