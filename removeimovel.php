<?php 

require_once 'conexao.php';

if($_POST) {
	$id = $_POST['id'];

	$sql = "UPDATE imovel SET ativo = 2 WHERE id_imovel = {$id}";
	if($connect->query($sql) === TRUE) {
		echo "<script> alert('Dados excluídos com sucesso'); window.location.href='consultarimovel.php' </script>";
	} else {
		echo "Error updating record : " . $connect->error;
	}

	$connect->close();
}

?>