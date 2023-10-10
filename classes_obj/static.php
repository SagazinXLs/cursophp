<div class="titulo">Menbros estaticos</div>


<?php 

    //this é para acessar menbros de instancias (Vareaveis ou metodos) de uma classe a partir de
    //uma classe a partir de dentro da classe


    // self é usado para acessar menbros estaticos (variaveis e metodos) a partir de dentro da classe





    class A{
    public $noStatic = "não é estatica";
    public static $statico = "È estatica = nao se muda";

    public function mostrarA()  {
        echo"nao estatico = {$this->noStatic} <br>";
        //primeria tentativa statica imprimir 
       // echo "vareavel statica = {$this->statico} <br>";
        //segunda tentativa statica imprimir
        echo "vareavel statica =" . self::$statico . " <br>";
    }

    public static function mostrarStaticA(){

        echo "Estatica = " . self::$statico . "<br>";


    }



}


    $obA = new A();
    $obA -> mostrarA();
    A::mostrarStaticA();
    A::$statico = "Alterado KKK";
    A::mostrarStaticA();


?>