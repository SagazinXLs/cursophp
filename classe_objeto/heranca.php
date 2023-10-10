<div class="titulo">Heranca</div>


<?php 

    class Pessoa {
        public $nome;
        public $idade;

        public $sobrenome;

        function __construct($nome, $sobrenome, $idade){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->idade = $idade;
            echo "Pessoa Criada com Sucesso !!! <br>";
        }
        function __destruct(){
            echo "FIM";
        }

        public function apresentar(){
            echo "{$this->nome} {$this->sobrenome}, {$this->idade} anos <br>";
        }
    }

    class Usuario extends Pessoa {
        public $login;
        public $senha;

        function __construct($nome, $sobrenome, $idade, $login, $senha){
            parent::__construct($nome, $sobrenome, $idade);
            $this->login = $login;
            $this->senha = $senha;
        }
        function __destruct(){
            echo "Usuario diz: Tchau!!";
            parent::__destruct();
        }

        public function apresentar()
        {
            echo "@{$this->login}: ";
            parent::apresentar();
        }
    }

    $usuarioCafeteria1 = new Usuario("Flávio", "Teodoro", 22, "eucomocoentro", "99999");


    $usuarioCafeteria1->apresentar();
    


?>