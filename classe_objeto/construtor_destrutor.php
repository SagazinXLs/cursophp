<div class="titulo">Construtor e Destrutor</div>

<?php 

    class Pessoa {
        public $nome;
        public $idade;

        function __construct($novoNome, $idade){
            echo "Construtor Invocado !! <br>";
            $this->nome = $novoNome;
            $this->idade = $idade;
        }

        function __destruct() {
            echo "Classe pessoa morreu !!! <br>";
        }

        public function ApresentarPessoa(){
            echo "<br> {$this->nome}, {$this->idade} anos <br>";
        }

}

$pessoaNumero1 = new Pessoa("Sadhaak", 29);
$pessoaNumero2 = new Pessoa("Aspas", 19);
$pessoaNumero3 = new Pessoa("Less", 23);
$pessoaNumero4 = new Pessoa("Cauazin", 15);
$pessoaNumero5 = new Pessoa("Tuyz", 89);


$pessoaNumero1 ->ApresentarPessoa();
unset($pessoaNumero1);
$pessoaNumero2 ->ApresentarPessoa();
$pessoaNumero3 ->ApresentarPessoa();
$pessoaNumero4 ->ApresentarPessoa();
$pessoaNumero5 ->ApresentarPessoa();



?>