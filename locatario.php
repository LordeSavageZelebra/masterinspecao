<!DOCTYPE html>
<html>
<head>
		<title>Cadastro de Locatário</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #F8F8FF;">

		<center>
		<img src="img/logo.png" width="50%" />
		</center>

			<h3 class="text-center">Cadastro de Locatário</h3><br>
  
			<form action="bdlocatario.php" id="cad" name="cad" method="POST">

	<div class="col-md-4">
		<label>Nome do Locatário:</label>
		<input type="text" name="nm_locatario" id="nm_locatario" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-2">
		<label>Data de Nascimento:</label>
		<input type="date" name="dt_nasc_locatario" id="dt_nasc_locatario" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-3">
		<label>Naturalidade:</label>
		<input type="text" name="natu_locatario" id="natu_locatario" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-3">
		<label>Estado cívil:</label>
		<select id="est_civil_locatario" name="est_civil_locatario" class="form-control input-md" required="required">
		<option></option>
		<option>Amasiado(a)</option>
		<option>Casado(a)</option>
		<option>Solteiro(a)</option>
		<option>Viúvo(a)</option>
		</select>
	</div>
	
	<div class="col-md-4">
		<label>Endereço:</label>
		<input type="text" name="end_locatario" id="end_locatario" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-2">
		<label>Número:</label>
		<input type="text" name="num_locatario" id="num_locatario" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-3">
		<label>Bairro:</label>
		<input type="text" name="bairro_locatario" id="bairro_locatario" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-3">
		<label>Cidade:</label>
		<input type="text" name="cid_locatario" id="cid_locatario" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-3">
		<label>Telefone:</label>
		<input type="text" name="tel_locatario" id="tel_locatario" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-5">
		<label>E-mail:</label>
		<input type="text" name="email_locatario" id="email_locatario" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-2">
		<label>CPF:</label>
		<input type="text" name="cpf_locatario" id="cpf_locatario" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-2">
		<label>RG:</label>
		<input type="text" name="rg_locatario" id="rg_locatario" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-4">
		<label>Nome da empresa onde trabalha:</label>
		<input type="text" name="emp_locatario" id="" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-4">
		<label>Cargo:</label>
		<input type="text" name="cargo_locatario" id="cargo_locatario" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-2">
		<label>Salário:</label>
		<input type="text" name="salario_locatario" id="salario_locatario" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-2">
		<label>Contato:</label>
		<input type="text" name="cont_locatario" id="cont_locatario" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-3">
		<label>Nome do cônjuge:</label>
		<input type="text" name="nm_conj_locatario" id="nm_conj_locatario" class="form-control input-md">
	</div>
	
	<div class="col-md-2">
		<label>Telefone:</label>
		<input type="text" name="tel_conj_locatario" id="tel_conj_locatario" class="form-control input-md">
	</div>
	
	<div class="col-md-3">
		<label>E-mail:</label>
		<input type="text" name="email_conj_locatario" id="email_conj_locatario" class="form-control input-md">
	</div>
	
	<div class="col-md-2">
		<label>CPF:</label>
		<input type="text" name="cpf_conj_locatario" id="cpf_conj_locatario" class="form-control input-md">
	</div>
	
	<div class="col-md-2">
		<label>RG:</label>
		<input type="text" name="rg_conj_locatario" id="rg_conj_locatario" class="form-control input-md">
	</div>
	
	<div class="col-md-4">
		<label>Nome da empresa onde trabalha:</label>
		<input type="text" name="emp_conj_locatario" id="emp_conj_locatario" class="form-control input-md">
	</div>
	
	<div class="col-md-4">
		<label>Cargo:</label>
		<input type="text" name="cargo_conj_locatario" id="cargo_conj_locatario" class="form-control input-md">
	</div>
	
	<div class="col-md-2">
		<label>Salário:</label>
		<input type="text" name="salario_conj_locatario" id="salario_conj_locatario" class="form-control input-md">
	</div>
	
	<div class="col-md-2">
		<label>Contato:</label>
		<input type="text" name="cont_conj_locatario" id="cont_conj_locatario" class="form-control input-md">
	</div>
	
	<div class="col-md-4">
		<label>Nome do fiador:</label>
		<input type="text" name="nm_fiador" id="nm_fiador" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-2">
		<label>CPF fiador:</label>
		<input type="text" name="cpf_fiador" id="cpf_fiador" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-4">
		<label>Nome do locador:</label>
		<input type="text" name="nm_locador" id="nm_locador" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-2">
		<label>CPF locador:</label>
		<input type="text" name="cpf_locador" id="cpf_locador" class="form-control input-md" required="required">
	</div>
		
	<div class="col-md-6">
		<label>End. do imóvel:</label>
		<input type="text" name="end_imovel" id="end_imovel" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-2">
		<label>número:</label>
		<input type="text" name="num_imovel" id="num_imovel" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-4">
		<label>Bairro:</label>
		<input type="text" name="bairro_imovel" id="bairro_imovel" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-5">
		<label>Cidade:</label>
		<input type="text" name="cid_imovel" id="cid_imovel" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-2">
		<label>Data do aluguel:</label>
		<input type="date" name="dt_aluguel" id="dt_aluguel" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-2">
		<label>Valor do aluguel:</label>
		<input type="text" name="valor_aluguel" id="valor_aluguel" class="form-control input-md" required="required">
	</div>
	
	<div class="col-md-3">
		<label>Tipo de imóvel:</label>
		<select id="tp_imovel" name="tp_imovel" class="form-control input-md" required="required">
		<option></option>
		<option>Apartamento</option>
		<option>Casa</option>
		<option>Chácara</option>
		<option>Imóvel comercial</option>
		<option>Quitinete</option>
		<option>Sala comercial</option>
		<option>Sítio</option>
		</select><br><br>		
	</div>
	
<center>
<button type="submit" for="cad" name="salvar" value="Salvar" class="btn btn-primary">Salvar</button>
<button type="button" class="btn btn-danger" id="btn" onclick="window.print();">Imprimir</button>
<button class="btn btn-primary" type="button" value="Sair" onclick="window.location='consultarlocatario.php'">Consultar</button>
<button type="reset" name="limpar" value="limpar" class="btn btn-danger">Limpar</button>
<button class="btn btn-primary" type="button" value="Sair" onclick="window.location='inicio.php'">Sair</button><br><br><br><br>
</center>

</form>

</body>
</html>