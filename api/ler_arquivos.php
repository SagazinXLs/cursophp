<div class="titulo">Ler Arquivos</div>

<?php 

$arquivo = fopen('test.txt', 'r');
echo fread($arquivo, 10);
echo "<br>";
echo fread($arquivo, 10);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('test.txt', 'r');
$tamanho = filesize('test.txt');
echo $tamanho, '<br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';


$arquivo = fopen('test.txt', 'r');
echo fgets($arquivo) , '<br>'; // fgets ler linha por linha
echo fgets($arquivo) , '<br>';
var_dump(fgets($arquivo));
echo '<hr>';
fclose($arquivo);

?>