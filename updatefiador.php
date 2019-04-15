z<?php 

require_once 'conexao.php';

if($_POST) {

	$nm_locatario= $_POST['nm_locatario']; 
	$cpf_locatario= $_POST['cpf_locatario']; 
	$nm_fiador= $_POST['nm_fiador'];
	$dt_nasc_fiador= $_POST['dt_nasc_fiador'];
	$natu_fiador= $_POST['natu_fiador']; 
	$est_civil_fiador= $_POST['est_civil_fiador'];
	$end_fiador= $_POST['end_fiador']; 
	$num_fiador= $_POST['num_fiador']; 
	$bairro_fiador= $_POST['bairro_fiador'];
	$cid_fiador= $_POST['cid_fiador']; 
	$tel_fiador= $_POST['tel_fiador']; 
	$email_fiador= $_POST['email_fiador']; 
	$cpf_fiador= $_POST['cpf_fiador']; 
	$rg_fiador= $_POST['rg_fiador']; 
	$emp_fiador= $_POST['emp_fiador']; 
	$cargo_fiador= $_POST['cargo_fiador']; 
	$salario_fiador= $_POST['salario_fiador']; 
	$cont_fiador= $_POST['cont_fiador']; 
	$nm_conjuge= $_POST['nm_conjuge'];
	$tel_conjuge= $_POST['tel_conjuge']; 
	$email_conjuge= $_POST['email_conjuge']; 
	$cpf_conjuge= $_POST['cpf_conjuge']; 
	$rg_conjuge= $_POST['rg_conjuge']; 
	$emp_conjuge= $_POST['emp_conjuge']; 
	$cargo_conjuge= $_POST['cargo_conjuge']; 
	$salario_conjuge= $_POST['salario_conjuge']; 
	$cont_conjuge= $_POST['cont_conjuge']; 
	$dados_bancarios= $_POST['dados_bancarios'];
	$comp_credito= $_POST['comp_credito']; 
	$dados_bancarios_um= $_POST['dados_bancarios_um']; 
	$comp_credito_um= $_POST['comp_credito_um']; 
	$bens= $_POST['bens']; 
	$registro= $_POST['registro']; 
	$bens_um= $_POST['bens_um']; 
	$registro_um= $_POST['registro_um']; 
	$obs= $_POST['obs'];

	$id = $_POST['id_fiador'];

	$sql  = "UPDATE fiador SET nm_locatario = '$nm_locatario', cpf_locatario = '$cpf_locatario', nm_fiador = '$nm_fiador', dt_nasc_fiador = '$dt_nasc_fiador', natu_fiador = '$natu_fiador', est_civil_fiador = '$est_civil_fiador', end_fiador = '$end_fiador', num_fiador = '$num_fiador', bairro_fiador = '$bairro_fiador', cid_fiador = '$cid_fiador', tel_fiador = '$tel_fiador', email_fiador = '$email_fiador', cpf_fiador = '$cpf_fiador', rg_fiador = '$rg_fiador', emp_fiador = '$emp_fiador', cargo_fiador = '$cargo_fiador', salario_fiador = '$salario_fiador', cont_fiador = '$cont_fiador', nm_conjuge = '$nm_conjuge', tel_conjuge = '$tel_conjuge', email_conjuge = '$email_conjuge', cpf_conjuge = '$cpf_conjuge', rg_conjuge = '$rg_conjuge', emp_conjuge = '$emp_conjuge', cargo_conjuge = '$cargo_conjuge', salario_conjuge = '$salario_conjuge', cont_conjuge = '$cont_conjuge', dados_bancarios = '$dados_bancarios', comp_credito = '$comp_credito', dados_bancarios_um = '$dados_bancarios_um', comp_credito_um = '$comp_credito_um', bens = '$bens', registro = '$registro', bens_um = '$bens_um', registro_um = '$registro_um', obs = '$obs' WHERE id_fiador = {$id}";

	if($connect->query($sql) === TRUE) {
		echo "<script> alert('Dados alterados com sucesso'); window.location.href='consultarfiador.php' </script>";
		
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}

?>