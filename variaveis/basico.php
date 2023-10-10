<div class="titulo">Variaveis</div>

<?php 
    $numero = 13;
    $nome = "Aluno"; 
    $sobrenome = "NovoTec";

    //mostrar variaveis
    echo $numero, "<br>";
    echo $nome, "<br>";
    echo $sobrenome, "<br>";

    //mostrar variaveis a tipo
    var_dump($numero);
    var_dump($nome);
    var_dump($sobrenome);
    
    echo "<br>";

    $a = 2;
    $b = 10;
    $somadedoisnumeros = $a + $b;
    echo "A soma dos dois numeros: " . $somadedoisnumeros;
    echo "<br>";

    echo isset ($somadedoisnumeros) . " = isset da variavel" . "<br>";

    unset ($somadedoisnumeros);

    echo "Após a destruição: ";     

    if (isset($somadedoisnumeros)) {
        echo "variavel existe";
    } else{
        echo "variavel não existe";
    }

    $variavel = 10;
    echo "<br>" . $variavel . "Inteiro";

    $variavel = "Agora sou uma String";
    echo "<br>" . $variavel . "Inteiro";

    // nomes de variaveis validas e invalidas

    $var = 'valida';
    $var2 = 'valida';
    $VAR3 = 'valida';
    
?>