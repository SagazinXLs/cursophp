<div class="titulo">Argumento Padrão</div>

<?php 

    function saudacao($nome = "Senhor(A)", $sobrenome = "Cliente"){
        return "Bem Vindo, $nome $sobrenome ! <br>";
    }

   echo saudacao();
   echo saudacao(null);
   echo saudacao(null, null);
   echo saudacao('Joao', "carrera");

   function anotarPedido($comida, $bebida = "Água Grátis"){
    echo "<hr>";
    echo "Pedido <br>";
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
   } 

   anotarPedido("Hamburguer");
   anotarPedido("Pizza", "Refrigerante");

?>