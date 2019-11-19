<?php
// Inicia a sessão
session_start();
echo("Passou no sair");
// Destrói a sessão
$_SESSION = array();
session_destroy();

// Redireciona para o login.php
header("location: ../index.php");
?>
