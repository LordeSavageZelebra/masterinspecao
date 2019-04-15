<?php

require_once 'conexao.php';

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql="INSERT INTO locador (nm_locador, dt_nasc_locador, natu_locador, est_civil_locador, end_locador, num_locador, bairro_locador, cid_locador, tel_locador, email_locador, cpf_locador, rg_locador, ativo)

VALUES ('$_POST[nm_locador]', '$_POST[dt_nasc_locador]', '$_POST[natu_locador]','$_POST[est_civil_locador]','$_POST[end_locador]','$_POST[num_locador]','$_POST[bairro_locador]','$_POST[cid_locador]', '$_POST[tel_locador]', '$_POST[email_locador]','$_POST[cpf_locador]', '$_POST[rg_locador]', 1)";

// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if ($connect->query($sql) === TRUE)
{
    // MOSTRA A MENSAGEM DE CADASTRO EFETUADO E REDIRECIONA PARA A PÁGINA DE CADASTRO
echo "<script>alert ('Cadastro efetuado com sucesso'); window.location = 'locador.php'</script>";
}else {
		echo "Error updating record : " . $connect->error;
	}

$connect->close();

?>