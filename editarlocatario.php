<?php 

require_once 'conexao.php';

if($_GET['id']) 
{
	$id = $_GET['id'];

	$sql = "SELECT * FROM locatario WHERE id_locatario = {$id}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();
}
	$connect->close();

?>

<!DOCTYPE html>
<html>
<head>
		<title>Editar locatario</title>
		<meta charset="utf-8">
		<!--Link de acesso ao Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #F8F8FF;">

	<!--Logo do site -->
		<center>
		<img src="img/logo.png" width="50%" />
		</center>
		
			<h3 class="text-center">Cadastro de locatario</h3><br>
  
			<form action="updatelocatario.php" id="cad" name="cad" method="POST">
	
		<div class="col-md-4">
		<label>Nome do Locatário:</label>
		<input type="text" name="nm_locatario" id="nm_locatario" class="form-control input-md" value="<?php echo $data['nm_locatario'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Data de Nascimento:</label>
		<input type="date" name="dt_nasc_locatario" id="dt_nasc_locatario" class="form-control input-md" value="<?php echo $data['dt_nasc_locatario'] ?>">
	</div>
	
	<div class="col-md-3">
		<label>Naturalidade:</label>
		<input type="text" name="natu_locatario" id="natu_locatario" class="form-control input-md" value="<?php echo $data['natu_locatario'] ?>">
	</div>
	
	<div class="col-md-3">
		<label>Estado cívil:</label>
		<input type="text" name="est_civil_locatario" id="est_civil_locatario" class="form-control input-md" value="<?php echo $data['est_civil_locatario'] ?>">
	</div>
	
	<div class="col-md-4">
		<label>Endereço:</label>
		<input type="text" name="end_locatario" id="end_locatario" class="form-control input-md" value="<?php echo $data['end_locatario'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Número:</label>
		<input type="text" name="num_locatario" id="num_locatario" class="form-control input-md" value="<?php echo $data['num_locatario'] ?>">
	</div>
	
	<div class="col-md-3">
		<label>Bairro:</label>
		<input type="text" name="bairro_locatario" id="bairro_locatario" class="form-control input-md" value="<?php echo $data['bairro_locatario'] ?>">
	</div>
	
	<div class="col-md-3">
		<label>Cidade:</label>
		<input type="text" name="cid_locatario" id="cid_locatario" class="form-control input-md" value="<?php echo $data['cid_locatario'] ?>">
	</div>
	
	<div class="col-md-3">
		<label>Telefone:</label>
		<input type="text" name="tel_locatario" id="tel_locatario" class="form-control input-md" value="<?php echo $data['tel_locatario'] ?>">
	</div>
	
	<div class="col-md-5">
		<label>E-mail:</label>
		<input type="text" name="email_locatario" id="email_locatario" class="form-control input-md" value="<?php echo $data['email_locatario'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>CPF:</label>
		<input type="text" name="cpf_locatario" id="cpf_locatario" class="form-control input-md" value="<?php echo $data['cpf_locatario'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>RG:</label>
		<input type="text" name="rg_locatario" id="rg_locatario" class="form-control input-md" value="<?php echo $data['rg_locatario'] ?>">
	</div>
	
	<div class="col-md-4">
		<label>Nome da empresa onde trabalha:</label>
		<input type="text" name="emp_locatario" id="" class="form-control input-md" value="<?php echo $data['emp_locatario'] ?>">
	</div>
	
	<div class="col-md-4">
		<label>Cargo:</label>
		<input type="text" name="cargo_locatario" id="cargo_locatario" class="form-control input-md" value="<?php echo $data['cargo_locatario'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Salário:</label>
		<input type="text" name="salario_locatario" id="salario_locatario" class="form-control input-md" value="<?php echo $data['salario_locatario'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Contato:</label>
		<input type="text" name="cont_locatario" id="cont_locatario" class="form-control input-md" value="<?php echo $data['cont_locatario'] ?>">
	</div>
	
	<div class="col-md-3">
		<label>Nome do cônjuge:</label>
		<input type="text" name="nm_conj_locatario" id="nm_conj_locatario" class="form-control input-md" value="<?php echo $data['nm_conj_locatario'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Telefone:</label>
		<input type="text" name="tel_conj_locatario" id="tel_conj_locatario" class="form-control input-md" value="<?php echo $data['tel_conj_locatario'] ?>">
	</div>
	
	<div class="col-md-3">
		<label>E-mail:</label>
		<input type="text" name="email_conj_locatario" id="email_conj_locatario" class="form-control input-md" value="<?php echo $data['email_conj_locatario'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>CPF:</label>
		<input type="text" name="cpf_conj_locatario" id="cpf_conj_locatario" class="form-control input-md" value="<?php echo $data['cpf_conj_locatario'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>RG:</label>
		<input type="text" name="rg_conj_locatario" id="rg_conj_locatario" class="form-control input-md" value="<?php echo $data['rg_conj_locatario'] ?>">
	</div>
	
	<div class="col-md-4">
		<label>Nome da empresa onde trabalha:</label>
		<input type="text" name="emp_conj_locatario" id="emp_conj_locatario" class="form-control input-md" value="<?php echo $data['emp_conj_locatario'] ?>">
	</div>
	
	<div class="col-md-4">
		<label>Cargo:</label>
		<input type="text" name="cargo_conj_locatario" id="cargo_conj_locatario" class="form-control input-md" value="<?php echo $data['cargo_conj_locatario'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Salário:</label>
		<input type="text" name="salario_conj_locatario" id="salario_conj_locatario" class="form-control input-md" value="<?php echo $data['salario_conj_locatario'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Contato:</label>
		<input type="text" name="cont_conj_locatario" id="cont_conj_locatario" class="form-control input-md" value="<?php echo $data['cont_conj_locatario'] ?>">
	</div>
	
	<div class="col-md-4">
		<label>Nome do fiador:</label>
		<input type="text" name="nm_fiador" id="nm_fiador" class="form-control input-md" value="<?php echo $data['nm_fiador'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>CPF fiador:</label>
		<input type="text" name="cpf_fiador" id="cpf_fiador" class="form-control input-md" value="<?php echo $data['cpf_fiador'] ?>">
	</div>
	
	<div class="col-md-4">
		<label>Nome do locador:</label>
		<input type="text" name="nm_locador" id="nm_locador" class="form-control input-md" value="<?php echo $data['nm_locador'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>CPF locador:</label>
		<input type="text" name="cpf_locador" id="cpf_locador" class="form-control input-md" value="<?php echo $data['cpf_locador'] ?>">
	</div>
		
	<div class="col-md-6">
		<label>End. do imóvel:</label>
		<input type="text" name="end_imovel" id="end_imovel" class="form-control input-md" value="<?php echo $data['end_imovel'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>número:</label>
		<input type="text" name="num_imovel" id="num_imovel" class="form-control input-md" value="<?php echo $data['num_imovel'] ?>">
	</div>
	
	<div class="col-md-4">
		<label>bairro:</label>
		<input type="text" name="bairro_imovel" id="bairro_imovel" class="form-control input-md" value="<?php echo $data['bairro_imovel'] ?>">
	</div>
	
	<div class="col-md-5">
		<label>Cidade:</label>
		<input type="text" name="cid_imovel" id="cid_imovel" class="form-control input-md" value="<?php echo $data['cid_imovel'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Data do aluguel:</label>
		<input type="date" name="dt_aluguel" id="dt_aluguel" class="form-control input-md" value="<?php echo $data['dt_aluguel'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Valor do aluguel:</label>
		<input type="text" name="valor_aluguel" id="valor_aluguel" class="form-control input-md" value="<?php echo $data['valor_aluguel'] ?>">
	</div>
	
	<div class="col-md-3">
		<label>Tipo de imóvel:</label>
		<input type="text" name="tp_imovel" id="tp_imovel" class="form-control input-md" value="<?php echo $data['tp_imovel'] ?>"><br><br>		
	</div>


<center>
<input type="hidden" name="id_locatario" value="<?php echo $data['id_locatario']?>" />
<button class="btn btn-primary" type="submit">Salvar alterações</button>
<button class="btn btn-danger" type="button" onclick="window.print();">Imprimir</button>
<button class="btn btn-primary" type="button" value="Sair" onclick="window.location='consultarlocatario.php'">Voltar</button>
<br><br>
<br><br>
</center>

</form>

</body>
</html>
