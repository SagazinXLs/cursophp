<?php 
session_start();
session_destroy(); // limpar sessao
header('Location: basico_sessao.php'); //Acessar a pagina basico sessao php

?>