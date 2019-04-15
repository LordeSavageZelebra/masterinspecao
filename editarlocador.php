<?php 

require_once 'conexao.php';

if($_GET['id']) 
{
	$id = $_GET['id'];

	$sql = "SELECT * FROM locador WHERE id_locador = {$id}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();
}
	$connect->close();

?>

<!DOCTYPE html>
<html>
<head>
		<title>Cadastro de locador</title>
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
		
			<h3 class="text-center">Editar locador</h3><br>
  
			<form action="updatelocador.php" id="cad" name="cad" method="POST">
	
	<div class="col-md-4">
		<label>Nome do Locador:</label>
		<input type="text" name="nm_locador" id="nm_locador" class="form-control input-md" value="<?php echo $data['nm_locador'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Data de Nascimento:</label>
		<input type="date" name="dt_nasc_locador" id="dt_nasc_locador" class="form-control input-md" value="<?php echo $data['dt_nasc_locador'] ?>">
	</div>
	
	<div class="col-md-3">
		<label>Naturalidade:</label>
		<input type="text" name="natu_locador" id="natu_locador" class="form-control input-md" value="<?php echo $data['natu_locador'] ?>">
	</div>
	
	<div class="col-md-3">
		<label>Estado cívil:</label>
		<input type="text" name="est_civil_locador" id="natu_locador" class="form-control input-md" value="<?php echo $data['est_civil_locador'] ?>">
	</div>
	
	<div class="col-md-4">
		<label>Endereço:</label>
		<input type="text" name="end_locador" id="end_locador" class="form-control input-md" value="<?php echo $data['end_locador'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Número:</label>
		<input type="text" name="num_locador" id="num_locador" class="form-control input-md" value="<?php echo $data['num_locador'] ?>">
	</div>
	
	<div class="col-md-3">
		<label>Bairro:</label>
		<input type="text" name="bairro_locador" id="bairro_locador" class="form-control input-md" value="<?php echo $data['bairro_locador'] ?>">
	</div>
	
	<div class="col-md-3">
		<label>Cidade:</label>
		<input type="text" name="cid_locador" id="cid_locador" class="form-control input-md" value="<?php echo $data['cid_locador'] ?>">
	</div>
	
	<div class="col-md-3">
		<label>Telefone:</label>
		<input type="text" name="tel_locador" id="tel_locador" class="form-control input-md" value="<?php echo $data['tel_locador'] ?>">
	</div>
	
	<div class="col-md-5">
		<label>E-mail:</label>
		<input type="text" name="email_locador" id="email_locador" class="form-control input-md" value="<?php echo $data['email_locador'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>CPF:</label>
		<input type="text" name="cpf_locador" id="cpf_locador" class="form-control input-md" value="<?php echo $data['cpf_locador'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>RG:</label>
		<input type="text" name="rg_locador" id="rg_locador" class="form-control input-md" value="<?php echo $data['rg_locador'] ?>"><br><br>
	</div>
	
	
<center>
<input type="hidden" name="id_locador" value="<?php echo $data['id_locador']?>" />
<button class="btn btn-primary" type="submit">Salvar alterações</button>
<button class="btn btn-danger" type="button" onclick="window.print();">Imprimir</button>
<button class="btn btn-primary" type="button" value="Sair" onclick="window.location='consultarlocador.php'">Voltar</button>
<br><br>
<br><br>
</center>

</form>

</body>
</html>
