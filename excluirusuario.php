<?php 
    //recebe os dados que serão apagados
  	$nome=$_POST["nm_usuario"];
    //estabelece a conexão
    $conexao = mysqli_connect("localhost","root","","imobiliaria");
    if( !$conexao ){
        echo "Ops.. Erro na conexão.";
        exit;
    }
    //Executa a query
    $sql = "DELETE FROM usuarios WHERE nm_usuario='$nome'";
    $remove = mysqli_query($conexao, $sql);
    //Se falhou, redireciona pra exibe.php com remove igual a false 
    if( !$remove ){
        echo "<script> alert('Erro ao excluir os dados'); window.location.href='excluir.php' </script>";
        exit;
    }
    echo "<script> alert('Exclusão efetuada com sucesso'); window.location.href='inicio.php' </script>";
?>
