<?php

require_once 'conexao.php';

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql="INSERT INTO imovel (nm_locador, cpf_locador,tp_servico, imoveltp, valor, tp_doc_imovel, end_imovel, num_imovel, bairro_imovel, cid_imovel, metragem, quartos, salas, cozinhas, banheiros, garagens, areaservico, varanda, terraco, suites, arealazer, outrasdep) 

VALUES ('$_POST[nm_locador]', '$_POST[cpf_locador]', '$_POST[tp_servico]', '$_POST[imoveltp]', '$_POST[valor]', '$_POST[tp_doc_imovel]', '$_POST[end_imovel]', '$_POST[num_imovel]','$_POST[bairro_imovel]', '$_POST[cid_imovel]', '$_POST[metragem]','$_POST[quartos]','$_POST[salas]', '$_POST[cozinhas]','$_POST[banheiros]', '$_POST[garagens]', '$_POST[areaservico]','$_POST[varanda]','$_POST[terraco]','$_POST[suites]', '$_POST[arealazer]','$_POST[outrasdep]' )";

// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if ($connect->query($sql) === TRUE)
{
    // MOSTRA A MENSAGEM DE CADASTRO EFETUADO E REDIRECIONA PARA A PÁGINA DE CADASTRO
echo "<script>alert ('Cadastro efetuado com sucesso'); window.location = 'imovel.php'</script>";
}else {
		echo "Error updating record : " . $connect->error;
	}

	$connect->close();

?>