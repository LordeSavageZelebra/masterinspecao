<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$servidor = "mysql.hostinger.com.br";
$banco = "u111536854_inspe";
$usuario = "u111536854_evald";
$senha = "Amazonpc10!";

$con = new mysqli($servidor, $usuario, $senha);
mysqli_select_db($con, $banco);

$nome = mysqli_real_escape_string($con, $_POST['usuario']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

$sql = "SELECT * FROM usuarios WHERE nm_login='$nome' AND senha_usuario='$senha'";
$resultado = mysqli_query($con, $sql);
$checar = mysqli_num_rows($resultado);

if ($checar > 0){
    echo "<script> alert('Seja bem vindo $nome'); window.location.href='inicio.php' </script>";
} else {
   echo "<script> alert('Erro'); window.location.href='login.php' </script>";
}
?>