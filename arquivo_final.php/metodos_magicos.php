<div class="titulo">Metodos Magicos</div>

<?php 

class PessoaN {
    public $nome;
    public $idade;

    function construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function destruct(){
        echo "E morreu !!";
    }

    public function toString(){
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function get($atrib){
        echo "<br> Lendo atributo não declarado: {$atrib} <br>";
    }

    public function set($atrib, $valor){
        echo "<br> Lendo atributo não declarado: {$atrib} / {$valor} <br>";
    }

    public function call($metodo, $params){
        echo "Tentando executar o metodo: '{$metodo}'";
        echo " , com os parametros: ";
        print_r($params);
    }
}

$pessoa = new PessoaN("Ricardo", 40);
echo $pessoa;
$pessoa->NomeCompletoDaPessoa = "Ricardo da Silva";
$pessoa->NomeCompletoDaPessoa;
$pessoa->exec(1, "teste", true, [1,2,3,4,5,6]);
$pessoa = null;
?>