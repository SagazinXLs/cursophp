<div class="titulo">Trait 002</div>

<?php

trait validacao {

    public function validarString ($str){

        return isset($str) && $str !== '';

    }
}

trait validarMelhorString  {
   
   public function validarString ($str){
   
       return isset($str) && trim($str);
   
   }
   
   }

   class Usuario02 {

    use validacao, validarMelhorString {
    // validarMelhorString :: validarString insteadof validacao;
    // validacao:: validarString insteadof validarMelhorString;

    validacao::validarString as validacaoSimples;

    }
   }

   $usuario02 = new Usuario02();
   var_dump($usuario02->validacaoSimples(" "));

    
?>