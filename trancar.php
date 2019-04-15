<?php
include ("conexao.php");

session_start();

if(!isset($_SESSION['LOGADO'])){
    echo "<script>alert ('É necessario fazer login para acessar'); window.location = 'login.php'</script>";
        exit;
}
?>