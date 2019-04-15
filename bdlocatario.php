<?php

require_once 'conexao.php';

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql= "INSERT INTO locatario (nm_locatario, dt_nasc_locatario, natu_locatario, est_civil_locatario, end_locatario, num_locatario,
bairro_locatario, cid_locatario, tel_locatario, email_locatario, cpf_locatario, rg_locatario, emp_locatario, cargo_locatario,
salario_locatario, cont_locatario, nm_conj_locatario, tel_conj_locatario, email_conj_locatario, cpf_conj_locatario, rg_conj_locatario,
emp_conj_locatario, cargo_conj_locatario, salario_conj_locatario, cont_conj_locatario, nm_fiador, cpf_fiador, nm_locador, cpf_locador,
end_imovel, num_imovel, bairro_imovel, cid_imovel, dt_aluguel, valor_aluguel, tp_imovel, ativo) 

VALUES ('$_POST[nm_locatario]', '$_POST[dt_nasc_locatario]', '$_POST[natu_locatario]','$_POST[est_civil_locatario]','$_POST[end_locatario]',
'$_POST[num_locatario]','$_POST[bairro_locatario]','$_POST[cid_locatario]', '$_POST[tel_locatario]', '$_POST[email_locatario]',
'$_POST[cpf_locatario]', '$_POST[rg_locatario]','$_POST[emp_locatario]', '$_POST[cargo_locatario]', '$_POST[salario_locatario]',
'$_POST[cont_locatario]', '$_POST[nm_conj_locatario]', '$_POST[tel_conj_locatario]','$_POST[email_conj_locatario]', '$_POST[cpf_conj_locatario]',
'$_POST[rg_conj_locatario]', '$_POST[emp_conj_locatario]','$_POST[cargo_conj_locatario]', '$_POST[salario_conj_locatario]',
'$_POST[cont_conj_locatario]', '$_POST[nm_fiador]','$_POST[cpf_fiador]', '$_POST[nm_locador]', '$_POST[cpf_locador]', '$_POST[end_imovel]',
'$_POST[num_imovel]', '$_POST[bairro_imovel]', '$_POST[cid_imovel]','$_POST[dt_aluguel]', '$_POST[valor_aluguel]', '$_POST[tp_imovel]', 1)";

// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if ($connect->query($sql) === TRUE)
{
    // MOSTRA A MENSAGEM DE CADASTRO EFETUADO E REDIRECIONA PARA A PÁGINA DE CADASTRO
echo "<script>alert ('Cadastro efetuado com sucesso'); window.location = 'locatario.php'</script>";
}else {
		echo "Error updating record : " . $connect->error;
	}

	$connect->close();

?>