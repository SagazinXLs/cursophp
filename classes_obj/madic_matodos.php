<div class="titulo">Métodos Magicos</div>


<?php 


    class PessoaN {

        public $nome;
        public $idade;
         


        function __construct($nome,$idade){

            $this->nome = $nome;
            $this->idade = $idade;


        }

        function __destruct(){

            echo"MORREU!!";


        }

        public function __toString(){

            return "{$this->nome} tem {$this-> idade} anos <br>";

           
        }


        public function __get($atrib){

            echo"Lendo atribito nao declarado {$atrib} <br>";

        }
        public function __set($atrib, $valor){

            echo"alterando atribito nao declarado:  {$atrib} / {$valor}  <br>";

        }

        public function __call($metodo, $params ){

            echo"Tentando executar o metodo: '{$metodo}'";
            echo " , com os parametros:  ";
            print_r("$params"); //ele imprimir de forma legivel


        }

    }


    $pessoa = new PessoaN("jorge",40);
    echo  $pessoa; //Chamando o toString
    $pessoa -> NomeCompletoDaPessoa = "Ricardo da Silva";  //set
    $pessoa->NomeCompletoDaPessoa; //get
    $pessoa -> exec(1 , "teste", true,[1,2,3,4,5,6]); //call
    $pessoa = null; //


?>