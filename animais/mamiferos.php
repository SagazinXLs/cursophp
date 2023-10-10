<div class="titulo">Mamímeferos</div>

<?php 

    class Animal {
        public $nome;
        public $respiracao;
        public $comida;
        public $grupo;

        function __construct($novoNome, $respiracao, $comida, $grupo){
         
            $this->nome = $novoNome;
            $this->respiracao = $respiracao;
            $this->comida = $comida;
            $this->grupo = $grupo;
        }
        
        public function ApresentarAnimal(){
            echo "<br> Animal: {$this->nome}, Tipo de respiração: {$this->respiracao}, Tipo de comida: {$this->comida}, Qual grupo pertence: {$this->grupo} <br>";
        }

    }

    $animalNumero1 = new Animal("Orangotango", "Pulmonar", "Frutas", "Primatas Placentários");
        $animalNumero2 = new Animal("Capivara", "Pulmonar", "Vegetação Terrestre", "Placentários");
        $animalNumero3 = new Animal("Coala", "Pulmonar", "Eucalipto", "Marsupiais");
        $animalNumero4 = new Animal("Panda Vermelho", "Pulmonar", "Bambu", "Ailuridade");
        $animalNumero5 = new Animal("Bull Terrier", "Pulmonar", "Carne", "Canidae");


        $animalNumero1 ->ApresentarAnimal();
        $animalNumero2 ->ApresentarAnimal();
        $animalNumero3 ->ApresentarAnimal();
        $animalNumero4 ->ApresentarAnimal();
        $animalNumero5 ->ApresentarAnimal();

    class Mamifero extends Animal {
        public $amamentar;


    function __construct($nome, $respiracao, $comida, $grupo){
        parent::__construct($nome, $respiracao, $comida, $grupo);
    }    
    
    function __destruct(){
        echo "ELE MAMA";
    
    }

    public function ApresentarAnimal(){
        echo "amamentam";
        parent::ApresentarAnimal();
    }


}

$animal6 = new Mamifero("Bicho Preguiça", "Pulmonar", "Inseto", "Placeubio");

$animal6->ApresentarAnimal();

?>