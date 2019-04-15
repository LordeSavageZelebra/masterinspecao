<?php 

require_once 'conexao.php';

if($_POST) {

	$nm_locador= $_POST['nm_locador']; 
	$dt_nasc_locador= $_POST['dt_nasc_locador'];
	$natu_locador= $_POST['natu_locador']; 
	$est_civil_locador= $_POST['est_civil_locador'];
	$end_locador= $_POST['end_locador']; 
	$num_locador= $_POST['num_locador']; 
	$bairro_locador= $_POST['bairro_locador'];
	$cid_locador= $_POST['cid_locador']; 
	$tel_locador= $_POST['tel_locador']; 
	$email_locador= $_POST['email_locador']; 
	$cpf_locador= $_POST['cpf_locador']; 
	$rg_locador= $_POST['rg_locador']; 
	
	$id = $_POST['id_locador'];

	$sql  = "UPDATE locador SET nm_locador = '$nm_locador', dt_nasc_locador = '$dt_nasc_locador', natu_locador = '$natu_locador', est_civil_locador = '$est_civil_locador', end_locador = '$end_locador', num_locador = '$num_locador', bairro_locador = '$bairro_locador', cid_locador = '$cid_locador', tel_locador = '$tel_locador', email_locador = '$email_locador', cpf_locador = '$cpf_locador', rg_locador = '$rg_locador' WHERE id_locador = {$id}";

	if($connect->query($sql) === TRUE) {
		echo "<script> alert('Dados alterados com sucesso'); window.location.href='consultarlocador.php' </script>";
		
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}

?>