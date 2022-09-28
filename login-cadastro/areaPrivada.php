<?php
//Exemplo de area privativa
    session_start(); //Inicia a sessao
    if(!isset($_SESSION['id_usuario'])){
        header("location: index.php"); //Nao deixa acessa pag se não estiver logado
        exit;
    }
?>
Bem-vindo
<a href="sair.php">SAIR</a>
