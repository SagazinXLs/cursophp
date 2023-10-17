<div class="titulo">Funções</div>

<?php 

    // function nome_da_funcao(parametro) {corpo da função}

    function soma ($x, $y, $z){
        return $x + $y + $z;
    }

    $resultado = soma(5, 2, 3);

    echo $resultado . "<br>";

    // função anonima == Closure

    $adicao = function($x, $y, $z){
        return $x + $y + $z;
    };

    $resultado = $adicao(10,20,30);

    echo $resultado . "<br>";

    echo "<br>";

    $teste = "abacaxi";

    function mostrarTeste(){
        $teste = "Manga";
    }

   
    echo "Antes da chamada da função";
    echo $teste . "<br>";
    mostrarTeste();
    echo "Depois da chamada da função";
    echo $teste . "<br>";
?>