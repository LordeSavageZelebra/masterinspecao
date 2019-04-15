<?php 
    //recebe os dados que serão apagados
  	$nome=$_POST["nm_usuario"];
    $login=$_POST["nm_login"];
    $senha=$_POST["senha_usuario"];
    //estabelece a conexão
    $conexao = mysqli_connect("localhost","root","","imobiliaria");
    if( !$conexao ){
        echo "Ops.. Erro na conexão.";
        exit;
    }
    //Executa a query
    $sql = "UPDATE usuarios SET nm_login='$login' and senha_usuario='$senha' WHERE nm_usuario='$nome'";
    $update = mysqli_query($conexao, $sql);
    //Se falhou, redireciona pra exibe.php com remove igual a false 
    if( !$update ){
        echo "<script> alert('Erro ao alterar os dados'); window.location.href='alterar.php' </script>";
        exit;
    }
    echo "<script> alert('Dados alterados com sucesso'); window.location.href='inicio.php' </script>";
?>
