<!DOCTYPE html>
<html>
<head>
		<title>Cadastro de imóvel</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Link do Bootstrap-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #F8F8FF;">

		<center>
		<img src="img/logo.png" width="50%" />
		</center>

			<h3 class="text-center">Cadastro de Imóvel</h3><br>
  
			<form action="bdimovel.php" id="cad" name="cad" method="POST">

		<div class="col-md-5">
		<label>Nome do Proprietário(a):</label>
		<input type="text" name="nm_locador" id="nm_locador" required="required" class="form-control input-md">
		</div>

		<div class="col-md-2">
		<label>CPF:</label>
		<input type="text" name="cpf_locador" id="cpf_locador" required="required" class="form-control input-md">
	</div>
	
		
	<div class="col-md-2">
		<label>Tipo de serviço:</label>
		<select id="tp_servico" name="tp_servico" required="required" class="form-control input-md">
		<option></option>
		<option>Aluguel</option>
		<option>Compra</option>
		<option>Financiamento</option>
		<option>Troca</option>
		<option>Venda</option>
		</select>
	</div>

	<div class="col-md-3">
		<label>Tipo de imóvel:</label>
		<select id="imoveltp" name="imoveltp" required="required" class="form-control input-md">
		<option></option>
		<option>Apartamento</option>
		<option>Casa</option>
		<option>Chácara</option>
		<option>Comercial</option>
		<option>Chalé</option>
		<option>Lote</option>
		<option>Quitinete</option>
		<option>Sítio</option>
		</select>
	</div>

	
	<div class="col-md-2">
		<label>Valor:</label>
		<input type="text" name="valor" id="valor" required="required" class="form-control input-md">
	</div>
	
	<div class="col-md-3">
		<label>Tipo de documentação:</label>
		<select id="tp_doc_imovel" name="tp_doc_imovel" required="required" class="form-control input-md">
		<option></option>
		<option>Escritura</option>
		<option>Não possui</option>
		<option>Recibo de compra e venda</option>
		</select>
	</div>
	
	<div class="col-md-5">
		<label>Endereço do imóvel:</label>
		<input type="text" name="end_imovel" id="end_imovel" required="required" class="form-control input-md">
	</div>
	
	<div class="col-md-2">
		<label>Número:</label>
		<input type="text" name="num_imovel" id="num_imovel" required="required" class="form-control input-md">
	</div>
		
	<div class="col-md-5">
		<label>Bairro:</label>
		<input type="text" name="bairro_imovel" id="bairro_imovel" required="required" class="form-control input-md">
	</div>
	
	<div class="col-md-3">
		<label>Cidade:</label>
		<input type="text" name="cid_imovel" id="cid_imovel" required="required" class="form-control input-md">
	</div>
	
	<div class="col-md-2">
		<label>Metragem total:</label>
		<input type="text" name="metragem" id="metragem" required="required" class="form-control input-md">
	</div>

	<div class="col-md-2">
		<label>Quartos:</label>
		<input type="text" name="quartos" id="quartos" required="required" class="form-control input-md">
	</div>
	
	<div class="col-md-2">
		<label>Salas:</label>
		<input type="text" name="salas" id="salas" required="required" class="form-control input-md">
	</div>
	
	<div class="col-md-2">
		<label>Cozinhas:</label>
		<input type="text" name="cozinhas" id="cozinhas" required="required" class="form-control input-md">
	</div>
	
	<div class="col-md-2">
		<label>Banheiros:</label>
		<input type="text" name="banheiros" id="banheiros" required="required" class="form-control input-md">
	</div>
	
	<div class="col-md-2">
		<label>Garagens:</label>
		<input type="text" name="garagens" id="garagens" required="required" class="form-control input-md">
	</div>
	
	<div class="col-md-2">
		<label>Área de serviços:</label>
		<input type="text" name="areaservico" id="areaservico" required="required" class="form-control input-md">
	</div>
	
	<div class="col-md-2">
		<label>Varanda:</label>
		<input type="text" name="varanda" id="varanda" required="required" class="form-control input-md">
	</div>
	
	<div class="col-md-2">
		<label>Terraço:</label>
		<input type="text" name="terraco" id="terraco" required="required" class="form-control input-md">
	</div>
	
	<div class="col-md-2">
		<label>Suites:</label>
		<input type="text" name="suites" id="suites" required="required" class="form-control input-md">
	</div>
	
	<div class="col-md-2">
		<label>Área de lazeres:</label>
		<input type="text" name="arealazer" id="arealazer" required="required" class="form-control input-md">
		<br><br>
	</div>	
		
	<div class="col-md-6">
		<label>Outras dependências:</label>
		<input type="text" name="outrasdep" id="outrasdep" required="required" class="form-control input-md"><br><br>
	</div>
	
    


<center>
<button type="submit" for="cad" name="salvar" value="Salvar" class="btn btn-primary">Salvar</button>
<button class="btn btn-danger" id="btn" onclick="window.print();">Imprimir</button>
<button type="submit" for="cad" name="salvar" class="btn btn-primary" onclick="window.location='consultarimovel.php'">Consultar</button>
<button class="btn btn-danger" type="button" value="Sair" onclick="window.location='inicio.php'">Sair</button>
</center>

</form>

</body>
</html>

			</form>
		</body>
		</html>