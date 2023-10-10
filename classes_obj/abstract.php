<div class="titulo">abstract</div>

<?php 



abstract class AbstrataEX {

    public abstract function metodo01();
    abstract protected function metodo02($parametro);


}

abstract class FilhaABS extends AbstrataEX {

    public function metodo01(){

        echo "Executando metodo 01 <br>";

    }

    abstract public function metodo03();


}

 class Concreta extends FilhaABS {


public function metodo01(){

    echo "Executando......... metodo 1 extendido <br>";
}

    public function metodo02($parametro){
        echo "Executando..... metodo02, com parametro $parametro <br>";
    }

    public function metodo03(){

        echo "executando..... metodo03";
        $this->metodo02('Interno');

    }



}

$c = new Concreta ();
$c->metodo01();
$c->metodo02("EXTERNO");
$c->metodo03();
echo "Fim........";

?>