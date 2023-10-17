<div class="titulo">Arrays</div>

<?php 
// array lista
$lista = array(1, 2, 3.4, "texto");

echo $lista . "<br>";

// para mostrar o array pode usar o print_r

print_r($lista);

echo "<br>";

echo $lista[0] . "<br>";
echo $lista[1] . "<br>";
echo $lista[2] . "<br>";
echo $lista[3] . "<br>";


$listaMapeada = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 55.98,
    "João",
    "Prado"

);

print_r($listaMapeada);

echo $listaMapeada["idade"] . "<br>";
echo $listaMapeada["cor"] . "<br>";
echo $listaMapeada["peso"] . "<br>";
echo $listaMapeada[0] . "<br>";
echo $listaMapeada[1] . "<br>";


$listaNome = array(
    "Jorge",
    "Joelma",
    "Calcinha Preta",
    "Roberta",
    "Marlon",
    "Felisberto",
    "Kleiton"
);

// foreach looping que percorre uma lista e acessa cada elemento dela

foreach ($lista as $elemento) {
    echo $elemento . " Silva " . "<br>";
}



?>