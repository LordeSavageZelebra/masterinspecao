<?php 

require_once 'conexao.php';

if($_POST) {

	$nm_locador= $_POST['nm_locador'];
	$cpf_locador= $_POST['cpf_locador'];
	$tp_servico= $_POST['tp_servico'];
	$imoveltp= $_POST['imoveltp'];
	$valor= $_POST['valor'];
	$tp_doc_imovel= $_POST['tp_doc_imovel'];
	$end_imovel= $_POST['end_imovel'];
	$num_imovel= $_POST['num_imovel'];
	$bairro_imovel= $_POST['bairro_imovel'];
	$cid_imovel= $_POST['cid_imovel'];
	$metragem= $_POST['metragem'];
	$quartos= $_POST['quartos'];
	$salas= $_POST['salas'];
	$cozinhas= $_POST['cozinhas'];
	$banheiros= $_POST['banheiros'];
	$garagens= $_POST['garagens'];
	$areaservico= $_POST['areaservico'];
	$varanda= $_POST['varanda'];
	$terraco= $_POST['terraco'];
	$suites= $_POST['suites'];
	$arealazer= $_POST['arealazer'];
	$outrasdep= $_POST['outrasdep'];

	$id = $_POST['id_imovel'];

	$sql  = "UPDATE imovel SET nm_locador = '$nm_locador', cpf_locador = '$cpf_locador', tp_servico = '$tp_servico', imoveltp = '$imoveltp', valor = '$valor', tp_doc_imovel = '$tp_doc_imovel', end_imovel = '$end_imovel', num_imovel = '$num_imovel', bairro_imovel = '$bairro_imovel', cid_imovel ='$cid_imovel', metragem ='$metragem', quartos = '$quartos', salas = '$salas', cozinhas = '$cozinhas', banheiros = '$banheiros', garagens = '$garagens', areaservico = '$areaservico', varanda = '$varanda', terraco = '$terraco', suites = '$suites', arealazer = '$arealazer', outrasdep = '$outrasdep'  WHERE id_imovel = {$id}";

	if($connect->query($sql) === TRUE) {
		echo "<script> alert('Dados alterados com sucesso'); window.location.href='consultarimovel.php' </script>";
		
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}

?>