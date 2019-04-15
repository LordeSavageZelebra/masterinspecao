<!DOCTYPE html>
<html>
<head>
		<title>Cadastro de Fiador</title>
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
		
		<h3 class="text-center">Cadastro de Fiador</h3><br>
  
			<form action="bdfiador.php" id="cad" name="cad" method="POST">
	
				<div class="col-md-9">
					<label>Nome do Locatário:</label>
					<input type="text" name="nm_locatario" id="nm_locatario" required="required" class="form-control input-md">
				</div>
	
				<div class="col-md-3">
					<label>CPF do Locatário:</label>
					<input type="text" name="cpf_locatario" id="cpf_locatario" required="required"  class="form-control input-md">
				</div>

				<div class="col-md-4">
					<label>Nome do Fiador:</label>
					<input type="text" name="nm_fiador" id="nm_fiador" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-2">
					<label>Data de Nascimento:</label>
					<input type="date" name="dt_nasc_fiador" id="dt_nasc_fiador" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-3">
					<label>Naturalidade:</label>
					<input type="text" name="natu_fiador" id="natu_fiador" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-3">
					<label>Estado cívil:</label>
					<select id="est_civil_fiador" name="est_civil_fiador" required="required"  class="form-control input-md">
						<option></option>
						<option>Amasiado(a)</option>
						<option>Casado(a)</option>
						<option>Solteiro(a)</option>
						<option>Viúvo(a)</option>
					</select>
				</div>
	
				<div class="col-md-4">
					<label>Endereço:</label>
					<input type="text" name="end_fiador" id="end_fiador" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-2">
					<label>Número:</label>
					<input type="text" name="num_fiador" id="num_fiador" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-3">
					<label>Bairro:</label>
					<input type="text" name="bairro_fiador" id="bairro_fiador" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-3">
					<label>Cidade:</label>
					<input type="text" name="cid_fiador" id="cid_fiador" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-3">
					<label>Telefone:</label>
					<input type="text" name="tel_fiador" id="tel_fiador" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-5">
					<label>E-mail:</label>
					<input type="text" name="email_fiador" id="email_fiador" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-2">
					<label>CPF:</label>
					<input type="text" name="cpf_fiador" id="cpf_fiador" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-2">
					<label>RG:</label>
					<input type="text" name="rg_fiador" id="rg_fiador" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-4">
					<label>Nome da empresa onde trabalha:</label>
					<input type="text" name="emp_fiador" id="emp_fiador" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-4">
					<label>Cargo:</label>
					<input type="text" name="cargo_fiador" id="cargo_fiador" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-2">
					<label>Salário:</label>
					<input type="text" name="salario_fiador" id="salario_fiador" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-2">
					<label>Contato:</label>
					<input type="text" name="cont_fiador" id="cont_fiador" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-3">
					<label>Nome do cônjuge:</label>
					<input type="text" name="nm_conjuge" id="nm_conjuge" class="form-control input-md">
				</div>
	
				<div class="col-md-2">
					<label>Telefone:</label>
					<input type="text" name="tel_conjuge" id="tel_conjuge" class="form-control input-md">
				</div>
	
				<div class="col-md-3">
					<label>E-mail:</label>
					<input type="text" name="email_conjuge" id="email_conjuge" class="form-control input-md">
				</div>
	
				<div class="col-md-2">
					<label>CPF:</label>
					<input type="text" name="cpf_conjuge" id="cpf_conjuge" class="form-control input-md">
				</div>
	
				<div class="col-md-2">
					<label>RG:</label>
					<input type="text" name="rg_conjuge" id="rg_conjuge" class="form-control input-md">
				</div>
	
				<div class="col-md-4">
					<label>Nome da empresa onde trabalha:</label>
					<input type="text" name="emp_conjuge" id="emp_conjuge" class="form-control input-md">
				</div>
	
				<div class="col-md-4">
					<label>Cargo:</label>
					<input type="text" name="cargo_conjuge" id="cargo_conjuge" class="form-control input-md">
				</div>
	
				<div class="col-md-2">
					<label>Salário:</label>
					<input type="text" name="salario_conjuge" id="salario_conjuge" class="form-control input-md">
				</div>
	
				<div class="col-md-2">
					<label>Contato:</label>
					<input type="text" name="cont_conjuge" id="cont_conjuge" class="form-control input-md">
				</div>
	
				<div class="col-md-6">
					<label>Bancos/Agência onde possui conta:</label>
					<input type="text" name="dados_bancarios" id="dados_bancarios" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-6">
					<label>Empresas onde o fiador compra a crédito:</label>
					<input type="text" name="comp_credito" id="comp_credito" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-6">
					<label>Bancos/Agência onde possui conta:</label>
					<input type="text" name="dados_bancarios_um" id="dados_bancarios_um" class="form-control input-md">
				</div>
	
				<div class="col-md-6">
					<label>Empresas onde o fiador compra a crédito:</label>
					<input type="text" name="comp_credito_um" id="comp_credito_um" class="form-control input-md">
				</div>
	
				<div class="col-md-6">
					<label>Bens móveis/imóveis:</label>
					<input type="text" name="bens" id="bens" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-6">
					<label>Registro:</label>
					<input type="text" name="registro" id="registro" required="required"  class="form-control input-md">
				</div>
	
				<div class="col-md-6">
					<label>Bens móveis/imóveis:</label>
					<input type="text" name="bens_um" id="bens_um" class="form-control input-md">
				</div>
	
				<div class="col-md-6">
					<label>Registro:</label>
					<input type="text" name="registro_um" id="registro_um" class="form-control input-md">
				</div>
	
				<div class="col-md-12">
					<label>Observação:</label>
					<input type="text" name="obs" id="obs" class="form-control input-md">
				</div>
				<br><br>
	
					<div class="col-md-12">
						<p class="text-justify">
		
					Entregar junto com este cadastro uma cópia do RG, CPF, Contra-Cheque, IPTU ou Comprovante de endereço atual.		
					Declaro, sob as penas da lei, serem verdadeiras todas as informações aqui prestadas; declaro ainda, estar ciente de
					que prestar informações falsas ficamos sujeitos às sansões da lei, em especial à incidência do crime previsto no art. 171
					do Código Penal Brasileiro.
						</p>
					<div class="col-md-12">
	
					<center>
						<div class="col-md-6">
						<br>__________________________________<br>
						<label class="control-label">Fiador</label>
						</div>
	
						<div class="col-md-6">
						<br>__________________________________<br>
						<label class="control-label">Cônjuge do Fiador</label>
						</div>
					</center>		
					<br><br><br><br>

					<center>
					<button type="submit" for="cad" name="salvar" value="Salvar" class="btn btn-primary">Salvar</button>
					<button type="button" class="btn btn-danger" id="btn" onclick="window.print();">Imprimir</button>
					<button type="button" class="btn btn-primary" type="button" value="Sair" onclick="window.location='consultarfiador.php'">Consultar</button>
					<button type="reset" name="limpar" value="limpar" class="btn btn-danger">Limpar</button>
					<button class="btn btn-primary" type="button" value="Sair" onclick="window.location='inicio.php'">Sair</button>
					<br><br><br><br>
					</center>

				</form>

</body>
</html>