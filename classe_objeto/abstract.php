<div class="titulo">Classe Abstrata</div>

<?php 

    abstract class AbstractExemplo {
        public abstract function metodo01();
        abstract protected function metodo02($parametro);
    } 

abstract class FilhaAbstrataExemplo extends AbstractExemplo {
    public function metodo01(){
        echo "Executando método 01<br>";
    }
    abstract public function metodo03();
}

class Concretae extends FilhaAbstrataExemplo{
    public function metodo01(){
        echo "Executando... método 1 extendido";
        parent::metodo01();
    }
    public function metodo02($parametro){
        echo "Executando metodo 02, com parametro $parametro <br>";
    }

    public function metodo03(){
        echo "Executando... método 03";
        $this->metodo02('Interno');
    }
} 

$c = new Concretae();
$c->metodo01();
$c->metodo02("Externo");
$c->metodo03();
echo "FIm....";



?>