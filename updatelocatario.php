<?php 

require_once 'conexao.php';

if($_POST) {

	$nm_locatario= $_POST['nm_locatario']; 
	$dt_nasc_locatario= $_POST['dt_nasc_locatario'];
	$natu_locatario= $_POST['natu_locatario']; 
	$est_civil_locatario= $_POST['est_civil_locatario'];
	$end_locatario= $_POST['end_locatario']; 
	$num_locatario= $_POST['num_locatario']; 
	$bairro_locatario= $_POST['bairro_locatario'];
	$cid_locatario= $_POST['cid_locatario']; 
	$tel_locatario= $_POST['tel_locatario']; 
	$email_locatario= $_POST['email_locatario']; 
	$cpf_locatario= $_POST['cpf_locatario']; 
	$rg_locatario= $_POST['rg_locatario']; 
	$emp_locatario= $_POST['emp_locatario']; 
	$cargo_locatario= $_POST['cargo_locatario']; 
	$salario_locatario= $_POST['salario_locatario']; 
	$cont_locatario= $_POST['cont_locatario']; 
	$nm_conjuge_locatario= $_POST['nm_conj_locatario'];
	$tel_conjuge_locatario= $_POST['tel_conj_locatario']; 
	$email_conjuge_locatario= $_POST['email_conj_locatario']; 
	$cpf_conjuge_locatario= $_POST['cpf_conj_locatario']; 
	$rg_conjuge_locatario= $_POST['rg_conj_locatario']; 
	$emp_conjuge_locatario= $_POST['emp_conj_locatario']; 
	$cargo_conjuge_locatario= $_POST['cargo_conj_locatario']; 
	$salario_conjuge_locatario= $_POST['salario_conj_locatario']; 
	$cont_conjuge_locatario= $_POST['cont_conj_locatario']; 
	$nmfiador= $_POST['nm_fiador'];
	$cpffiador= $_POST['cpf_fiador']; 
	$nmlocador= $_POST['nm_locador']; 
	$cpflocador= $_POST['cpf_locador']; 
	$end_imovel= $_POST['end_imovel']; 
	$num_imovel= $_POST['num_imovel']; 
	$bairro_imovel= $_POST['bairro_imovel']; 
	$cid_imovel= $_POST['cid_imovel']; 
	$dt_aluguel= $_POST['dt_aluguel'];
	$valor_aluguel= $_POST['valor_aluguel'];
	$tp_imovel= $_POST['tp_imovel'];
	
	$id = $_POST['id_locatario'];

	$sql  = "UPDATE locatario SET nm_locatario = '$nm_locatario', cpf_locatario = '$cpf_locatario', nm_locatario = '$nm_locatario', dt_nasc_locatario = '$dt_nasc_locatario', natu_locatario = '$natu_locatario', est_civil_locatario = '$est_civil_locatario', end_locatario = '$end_locatario', num_locatario = '$num_locatario', bairro_locatario = '$bairro_locatario', cid_locatario = '$cid_locatario', tel_locatario = '$tel_locatario', email_locatario = '$email_locatario', cpf_locatario = '$cpf_locatario', rg_locatario = '$rg_locatario', emp_locatario = '$emp_locatario', cargo_locatario = '$cargo_locatario', salario_locatario = '$salario_locatario', cont_locatario = '$cont_locatario', nm_conj_locatario = '$nm_conjuge_locatario', tel_conj_locatario = '$tel_conjuge_locatario', email_conj_locatario = '$email_conjuge_locatario', cpf_conj_locatario = '$cpf_conjuge_locatario', rg_conj_locatario = '$rg_conjuge_locatario', emp_conj_locatario = '$emp_conjuge_locatario', cargo_conj_locatario = '$cargo_conjuge_locatario', salario_conj_locatario = '$salario_conjuge_locatario', cont_conj_locatario = '$cont_conjuge_locatario', nm_fiador = '$nmfiador', cpf_fiador ='$cpffiador', nm_locador = '$nmlocador', cpf_locador = '$cpflocador', end_imovel = '$end_imovel', num_imovel = '$num_imovel', bairro_imovel = '$bairro_imovel', cid_imovel ='cid_imovel', dt_aluguel = '$dt_aluguel', valor_aluguel = '$valor_aluguel', tp_imovel = '$tp_imovel' WHERE id_locatario = {$id}";

	if($connect->query($sql) === TRUE) {
		echo "<script> alert('Dados alterados com sucesso'); window.location.href='consultarlocatario.php' </script>";
		
	} else {
		echo "Erro ao alterar os dados : ". $connect->error;
	}

	$connect->close();

}

?>