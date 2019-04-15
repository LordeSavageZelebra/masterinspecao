<?php

$servidor = "localhost";
$banco = "imobiliaria";
$usuario = "root";
$senha = "";

// Cria a conexão

$con = mysqli_connect($servidor, $usuario, $senha, $banco);

// Faz uma verificação da conexão

if (!$con) {

    die("Connection failed: " . mysqli_connect_error());

}

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql="INSERT INTO usuarios (nm_usuario, nm_login, senha_usuario) 

VALUES ('$_POST[nm_usuario]','$_POST[nm_login]', '$_POST[senha_usuario]' )";

// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($conn));
}

// MOSTRA A MENSAGEM DE CADASTRO EFETUADO E REDIRECIONA PARA A PÁGINA DE CADASTRO
echo "<script>alert ('Cadastro efetuado com sucesso'); window.location = 'usuario.php'</script>";
mysqli_close($con);

?>