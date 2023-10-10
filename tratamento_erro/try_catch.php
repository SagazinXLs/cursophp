<div class="titulo">Try/Catch</div>

<?php 

    try {
        echo intdiv(7,0); 

    }catch(Error $e){
        echo "Teve um erro no codigo..."; // capturar a exceção do erro
    }
    try {
        throw new Exception("Um erro muito estranho");  // lança uma exceção do erro com uma mensagem
        echo intdiv(7,0);
    }catch(DivisionByZeroError $e){
        echo 'Divisão por zero'; // captura a exceção especifica de divisão por zero (que não ocorreu aqui)
    }catch(Throwable $e){
        echo "Erro encontrado: " . $e->getMessage() . "<br>"; // captura qualquer outra exceção A Exception que foi lançada acima
    }finally {
        echo "Sempre executado ! <br>"; // o código dentro do bloco 'finally' sempre será executado
                                        // indepentedentemente de ter havido exceção ou não.
    }
?>