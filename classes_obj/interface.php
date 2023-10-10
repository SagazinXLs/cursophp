<div class="titulo">Interface</div>

<?php 
// interface é uma estrutura que permite um conjunto de metodos que uma classe deve implamentar. As
// interfaces sao usadas para criar um contrato entre classes
interface Veiculo{
    public function ligar();
    public function desligar();

    public function acelerar($velovidade);
}
    //implementando a interface
    class Carro implements Veiculo {

        public function ligar(){

            echo "Precisa de chave especial e botao POWER <br>";
            
        }

        public function desligar(){

            echo " para desligar aperte e segure por 3 segundos o POWER <br> ";
            
        }


        
        public function acelerar($velovidade){

            $this-> velovidade += $velovidade;

         }

    }

    class moto implements Veiculo {

        public function ligar(){

            echo "Precisa da chave e girar <br>";
            
        }

        public function desligar(){

            echo " girar a chave ao contrario <br>";
            
        }


        
        public function acelerar($velovidade){

            $this-> velovidade += $velovidade;

         }

    }


   
    $car = new Carro();
    echo "Carro.....................! <br>";
    $car -> ligar();
    $car-> desligar();
    $moto = new moto();
    echo "Moto.....................!<br>";
    $moto ->ligar();
    $moto ->desligar();
?>