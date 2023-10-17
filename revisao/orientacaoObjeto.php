<div class="titulo">Orientação Objeto</div>

<?php 

    class PessoaRevisão {
         public $nome;
         public $sobrenome;
         public $idade;
         public $altura;
    
         public function mostrarInformação(){
            echo "Nome: $this->nome sobrenome: $this->sobrenome idade: $this->idade
            altura: $this->altura"; 

         }

         function __construct($nome, $sobrenome, $idade, $altura){
            $this -> nome = $nome;
            $this -> sobrenome = $sobrenome;
            $this -> idade = $idade;
            $this -> altura = $altura;
         }

    }

    $pessoa1 = new PessoaRevisão("Emerson", "Silva", 55, 1.98);

    // acessando um objeto

    echo $pessoa1->nome . "<br>";
    echo $pessoa1->sobrenome . "<br>";
    echo $pessoa1->idade . "<br>";
    echo $pessoa1->altura . "<br>";

    $pessoa1->mostrarInformação ();

?>