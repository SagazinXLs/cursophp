<div class="titulo">Função e Escopo</div>

<?php 

    function imprimirMensagem(){
        echo "Olá";
        echo " Estou dentro da função !! <br>";
    }

    imprimirMensagem(); 
    imprimirMensagem(); 
    imprimirMensagem(); 

    $variavel = 1;

    function trocarValor(){
        $variavel = 2;
        echo "Durante a função: $variavel <br> ";
    }

    echo "Antes da Função: $variavel <br> ";
    trocarValor();
    echo "depois da função: $variavel <br> ";

    function trocarValordeVerdade(){
        global $variavel;
        $variavel = 55;
        echo "Durante a função: $variavel <br> ";

    }

    echo "Antes da Função: $variavel <br> ";
    trocarValordeVerdade();
    echo "depois da função: $variavel <br> ";


?>
