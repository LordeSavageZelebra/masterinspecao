<!DOCTYPE html>
<html>
<head>
		<title>Cadastro de Locador</title>
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

			<h3 class="text-center">Cadastro de Locador</h3><br>
  
			<form action="bdlocador.php" id="cad" name="cad" method="POST">

	<div class="col-md-4">
		<label>Nome do Locador:</label>
		<input type="text" name="nm_locador" id="nm_locador" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-2">
		<label>Data de Nascimento:</label>
		<input type="date" name="dt_nasc_locador" id="dt_nasc_locador" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-3">
		<label>Naturalidade:</label>
		<input type="text" name="natu_locador" id="natu_locador" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-3">
		<label>Estado cívil:</label>
		<select id="est_civil_locador" name="est_civil_locador" class="form-control input-md" required="required">
		<option></option>
		<option>Amasiado(a)</option>
		<option>Casado(a)</option>
		<option>Solteiro(a)</option>
		</select>
	</div>
	
	<div class="col-md-4">
		<label>Endereço:</label>
		<input type="text" name="end_locador" id="end_locador" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-2">
		<label>Número:</label>
		<input type="text" name="num_locador" id="num_locador" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-3">
		<label>Bairro:</label>
		<input type="text" name="bairro_locador" id="bairro_locador" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-3">
		<label>Cidade:</label>
		<input type="text" name="cid_locador" id="cid_locador" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-3">
		<label>Telefone:</label>
		<input type="text" name="tel_locador" id="tel_locador" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-5">
		<label>E-mail:</label>
		<input type="text" name="email_locador" id="email_locador" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-2">
		<label>CPF:</label>
		<input type="text" name="cpf_locador" id="cpf_locador" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-2">
		<label>RG:</label>
		<input type="text" name="rg_locador" id="rg_locador" class="form-control input-md" required="required"><br><br>
	</div>
	
	
<center>
<button type="submit" for="cad" name="salvar" value="Salvar" class="btn btn-primary">Salvar</button>
<button class="btn btn-danger" id="btn" onclick="window.print();">Imprimir</button>
<button class="btn btn-primary" type="button" value="Sair" onclick="window.location='consultarlocador.php'">Consultar</button>
<button type="reset" name="limpar" value="limpar" class="btn btn-danger">Limpar</button>
<button class="btn btn-primary" type="button" value="Sair" onclick="window.location='inicio.php'">Sair</button><br><br><br><br>
</center>

</form>

</body>
</html>