<div class="titulo">Upload</div>

<?php 

print_r($_FILES);

if ($_FILES && $_FILES['arquivo']) {
    $pastaUpload = 'C:/Users/Pastor Alberto Augus/Documents/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if(move_uploaded_file($tmp, $arquivo)){
        echo "<br> Arquivo valido e enviado com sucesso</br>";
    }else {
        echo "<br> Erro no upload de arquivos";
    }
}

?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>