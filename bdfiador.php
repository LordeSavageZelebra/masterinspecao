<?php

// CONEXÃO COM O BANCO DE DADOS
require_once 'conexao.php';

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql="INSERT INTO fiador 
(
nm_locatario, cpf_locatario, nm_fiador, dt_nasc_fiador, natu_fiador, est_civil_fiador, end_fiador, num_fiador, bairro_fiador, cid_fiador, 
tel_fiador, email_fiador, cpf_fiador, rg_fiador, emp_fiador, cargo_fiador, salario_fiador, cont_fiador, nm_conjuge, tel_conjuge, email_conjuge, 
cpf_conjuge, rg_conjuge, emp_conjuge, cargo_conjuge, salario_conjuge, cont_conjuge, dados_bancarios, comp_credito, dados_bancarios_um, 
comp_credito_um, bens, registro, bens_um, registro_um, obs, ativo
) 

VALUES 
(
'$_POST[nm_locatario]', '$_POST[cpf_locatario]', '$_POST[nm_fiador]','$_POST[dt_nasc_fiador]','$_POST[natu_fiador]',
'$_POST[est_civil_fiador]','$_POST[end_fiador]','$_POST[num_fiador]', '$_POST[bairro_fiador]', '$_POST[cid_fiador]',
'$_POST[tel_fiador]', '$_POST[email_fiador]','$_POST[cpf_fiador]', '$_POST[rg_fiador]', '$_POST[emp_fiador]', 
'$_POST[cargo_fiador]', '$_POST[salario_fiador]', '$_POST[cont_fiador]','$_POST[nm_conjuge]', '$_POST[tel_conjuge]', 
'$_POST[email_conjuge]','$_POST[cpf_conjuge]', '$_POST[rg_conjuge]', '$_POST[emp_conjuge]','$_POST[cargo_conjuge]', 
'$_POST[salario_conjuge]', '$_POST[cont_conjuge]', '$_POST[dados_bancarios]','$_POST[comp_credito]', 
'$_POST[dados_bancarios_um]', '$_POST[comp_credito_um]','$_POST[bens]', '$_POST[registro]','$_POST[bens_um]',
'$_POST[registro_um]','$_POST[obs]',1
)" ;

// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if ($connect->query($sql) === TRUE)
{
    // MOSTRA A MENSAGEM DE CADASTRO EFETUADO E REDIRECIONA PARA A PÁGINA DE CADASTRO
echo "<script>alert ('Cadastro efetuado com sucesso'); window.location = 'fiador.php'</script>";
}else {
		echo "Error updating record : " . $connect->error;
	}

$connect->close();

?>
