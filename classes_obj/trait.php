<div class="titulo">Trait</div>

<?php 



//trait é um mecanismo que permite a reutilização em classes. ou seja em vez de 
//usar a herança para compartilhar fuincionalidades entre classes voce pode usar traits para adcionar 
//metodos e propriedades avarias classes independente

/* Isset() é usada para verificar se uma variável foi definida e se seu valor não é nulo (null). 
Ela retorna true se a variável estiver definida e tiver um valor 
diferente de null, e false caso contrário.*/


/*trim() remover espaços em branco (ou outros caracteres especificados) do início e 
do final de uma string
exemplo felipe__
*/


trait validação {

    public function validarString ($str){

        return isset($str) && $str !== '';

    }

}
 
trait validarMelhorString  {
 public $a = "AAAAAAAAAAAAAA <br>";
 
 public $b = "BAAAAAAAAAAAAAA ";
 private $c = "CAAAAAAAAAAAAAA ";
public function validarStringMelhor ($str){

    return isset($str) && trim($str);

}

}

class UsuarioN {

    use validação, validarMelhorString;

    public function imprimirC(){

        echo "<br>" . $this -> c;

    }

}

 $usurio01 = new UsuarioN();
 var_dump($usurio01->validarString(" ")); // errado pois ele esta contando o espaço.
 echo "<br>";
 var_dump($usurio01->validarStringMelhor("                                                   "));
 echo "<br>";
echo $usurio01-> a,$usurio01 -> b;

?>