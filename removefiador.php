<?php 

require_once 'conexao.php';

if($_POST) {
	$id = $_POST['id'];

	$sql = "UPDATE fiador SET ativo = 2 WHERE id_fiador = {$id}";
	if($connect->query($sql) === TRUE) {
		echo "<script> alert('Dados excluídos com sucesso'); window.location.href='consultarfiador.php' </script>";
	} else {
		echo "Error updating record : " . $connect->error;
	}

	$connect->close();
}

?>