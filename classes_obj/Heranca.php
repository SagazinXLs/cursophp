<div class="titulo">Herança</div>

<?php 

    class Pessoa {

        public $nome;
        public $idade;
        public $sobrenome;



        function __construct($nome, $idade, $sobrenome) {
            $this->nome = $nome;
            $this -> sobrenome = $sobrenome;
            $this -> idade = $idade;

            echo "pessoa criada";
            
        }

        function __Destruct (){

            echo"fim !!!!!!!!!!!";

        }

        public function apresenatar(){



            echo "{$this->nome} {$this->sobrenome}, {$this-> idade} anos <br>";


        }
    }
    class usuario extends Pessoa {

        public $login;
        public $senha;


        function __construct($nome,$sobrenome,$idade,$login, $senha ) {

      
            parent::__construct($nome,$sobrenome,$idade);
            $this->login = $login;
            $this->senha = $senha;
     

        }

        function __destruct () {

            echo "usuario diz tchau";
            parent::__destruct();


        }

        public function apresentar(){
            
            echo "@{$this->login}: ";
            parent::apresenatar(); 

        }
    

    }


        $usuarioCafe1= new usuario("Pedro ","Teodoro ",22,"Jorge001@gmail.com",999999);

        $usuarioCafe1->apresentar();



   

?>