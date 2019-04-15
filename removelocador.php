<?php 

require_once 'conexao.php';

if($_POST) {
	$id = $_POST['id'];

	$sql = "UPDATE locador SET ativo = 2 WHERE id_locador = {$id}";
	if($connect->query($sql) === TRUE) {
		echo "<script> alert('Dados excluídos com sucesso'); window.location.href='consultarlocador.php' </script>";
	} else {
		echo "Error updating record : " . $connect->error;
	}

	$connect->close();
}

?>