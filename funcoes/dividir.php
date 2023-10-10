<div class="titulo">Dividir</div>

<?php 

    $dividir = function($a, $b){
    
        return $a / $b;
    };
    
    function executar ($a, $b, $op, $funcao){
            $resultado = $funcao($a, $b);
            echo "$a $op $b = $resultado <br>"; 
    }

    executar(8, 2, "/", $dividir);


?>