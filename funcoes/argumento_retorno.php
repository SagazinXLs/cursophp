<div class="titulo">Argumentos e Retornos</div>


<?php 

    function obterMensagem() {
        return 'Seja bem Vindo(A) !!'; // retornando a String
    }

    $mensagem = obterMensagem(); // guardando a string na variavel

    echo $mensagem;

    // função com parametro

    function obterMensagemComNome($nome){
        return "Bem Vindo, {$nome}";
    }

    echo '<br>' . obterMensagemComNome("João");
    echo '<br>' . obterMensagemComNome("Marcos");

    function soma(){
        return 5 + 20;
    }

    function somaComParametros($x , $y){
        return $x + $y;
    }

    echo '<br>' . "A soma: " . soma();
    echo '<br>' . "A soma com argumentos: " . somaComParametros(100, 25);


?>