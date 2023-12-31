<?php 
session_start();

if($_COOKIE['usuario']){
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}


if(!$_SESSION['usuario']){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/estilo.css">
    <title>CURSO PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>CURSO PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php require_once 'menu.php' ?>
        </div>
    </main>
    <footer class="rodape">
        3B1 Novotec <?= date('Y') ?>
    </footer>
    <!-- <nav>teste</nav>
    <div>teste</div>
    <span>teste</span> -->
</body>
</html>