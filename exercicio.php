<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/estilo.css">
    <link rel="stylesheet" href="./assets/css/exercicio.css">

    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
            <h1>CURSO PHP</h1>
            <h2>Visualização do Exercício</h2>
    </header>
        <nav class="navegacao">
            <a href="/{$_GET['dir']}/{$_GET['file']}.php" class="azul">sem formatação</a>
            <a href="index.php" class="vermelho"> voltar</a>
        </nav>
    <main class="principal">
        <div class="conteudo">
            <?php 
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>

        </div> 
    </main>
    <footer class="rodape">
        3B1 NovoTec <?= date ('D, M, Y') ?>
    </footer>
</body>
</html>


