<!DOCTYPE html>
<html>
<head>
		<title>Cadastro de contratos</title>
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

			<h3 class="text-center">Cadastro de contratos</h3><br>
  
			<form action="bdlocador.php" id="cad" name="cad" method="POST">

				<div class="col-md-3">
					<label>Nome do vendedor:</label>
					<input type="text" name="vendedor" id="vendedor" class="form-control input-md" required="required">
				</div>
	
				<div class="col-md-3">
					<label>Nacionalidade:</label>
					<input type="text" name="nacionalidadevend" id="nacionalidadevend" class="form-control input-md" required="required">
				</div>
		
				<div class="col-md-3">
					<label>Estado cívil:</label>
					<select id="est_civil_vendedor" name="est_civil_vendedor" id="est_civil_vendedor" class="form-control input-md" required="required">
					<option></option>
					<option>Amasiado(a)</option>
					<option>Casado(a)</option>
					<option>Solteiro(a)</option>
					<option>Viúvo(a)</option>
					</select>
				</div>
	
				<div class="col-md-3">
					<label>Profissão:</label>
					<input type="text" name="profvendedor" id="profvendedor" class="form-control" required="required">
				</div>
	
				<div class="col-md-2">
					<label>RG:</label>
					<input type="text" name="rgvendedor" id="rgfvendedor" class="form-control" required="required">
				</div>
	
				<div class="col-md-3">
					<label>CPF:</label>
					<input type="text" name="cpfvendedor" id="cpfvendedor" class="form-control" required="required">
				</div>
		
				<div class="col-md-5">
					<label>Endereço:</label>
					<input type="text" name="end_vendedor" id="end_vendedor" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-2">
					<label>Número:</label>
					<input type="text" name="num_vendedor" id="num_vendedor" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-4">
					<label>Bairro:</label>
					<input type="text" name="bairro_vendedor" id="bairro_vendedor" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-4">
					<label>CEP:</label>
					<input type="text" name="cep_vendedor" id="cep_vendedor" required="required"  class="form-control input-md">
				</div>

				<div class="col-md-4">
					<label>Cidade:</label>
					<input type="text" name="cep_vendedor" id="cep_vendedor" required="required"  class="form-control input-md">
				</div><br><br>
	
	
	
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