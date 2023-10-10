<div class="titulo">Membros Estáticos</div>

<?php 

    //this e para acessar membros distancias de  (variaveis ou metodos) de uma classe 
    // a partir de dentro da classe

    // self e usado para acessar membros estaticos(variaveis ou metodos)
    // a partir de dentro da classe

    class A {
        public $naoStatica = "Variavel de instancia";
        public static $statico = "Variavel de classe (estática)";
        public function mostrarA(){
            echo "Não estática = {$this->naoStatica} <br>";

            echo "Vairiavel Estatica  = " . self::$statico . "<br>";
        }

        public static function mostrarStaticA(){
            echo "Estatica = " .self::$statico . "<br>";
        }
    }

$obA = new A();
$obA -> mostrarA();
A::mostrarStaticA();
A::$statico = "Alterando membro de classe";
A::mostrarStaticA();


?>