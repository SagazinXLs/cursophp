<div class="titulo">Modificardor Final</div>


<?php  


//O modificador final é usado para restringir a herança de uma classe
// ou a capacidade de sobrescrever um metodo ou estendido no futuro



    abstract class Abistrata {

        abstract public function metodo01 ();
        
        public final function metodo02(){

            echo "Nao vou mudar !! <br>";

        }

    }

    class Classe extends Abistrata{

        public function metodo01(){

            echo "executando metodo01 !! <br>";

        }

        // public function metodo02(){

        //     echo "Estendendo o metodo 02 !! <br>";

        // }

    }



    $classe001 = new Classe();
    $classe001 -> metodo01();
    $classe001 -> metodo02();


    final class Unica {

        public $att = "Valor Unico,não existe!!!!!!!!!!!!!!!!!!!!! ";
            }

            $unica = new Unica();
            echo $unica->att;


    

?>