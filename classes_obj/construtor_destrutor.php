<div class="titulo">construtor_destructor</div>

<?php

        class Pessoa {

            public $nome;

            public $idade;

    function __construct($novoNome,$idade) {
        echo "Constructor Inovado !! <br>";
        $this -> nome = $novoNome;
        $this -> idade =  $idade;
    }
    function __destruct() {
        echo "<br> classe pessoa morreu !! <br>";
    }

    public function apresentarPessoa() {
        echo "<br> {$this -> nome}, {$this -> idade} anos <br>";
    }
}
$pessoaNum1 = new Pessoa("Rebeca", 40); 
    $pessoaNum2 = new Pessoa("Rebec", 40);
    $pessoaNum3 = new Pessoa("Rebe", 40);
    $pessoaNum4 = new Pessoa("Re", 40);
    
    $pessoaNum1 -> apresentarPessoa();
    unset($pessoaNum1);
    $pessoaNum2 -> apresentarPessoa();
    unset($pessoaNum2);
    $pessoaNum3 -> apresentarPessoa();
    unset($pessoaNum3);
    $pessoaNum4 -> apresentarPessoa();
    unset($pessoaNum4);

?>