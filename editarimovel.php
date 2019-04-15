<?php 

require_once 'conexao.php';

if($_GET['id']) 
{
	$id = $_GET['id'];

	$sql = "SELECT * FROM imovel WHERE id_imovel = {$id}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();
}
	$connect->close();

?>

<!DOCTYPE html>
<html>
<head>
		<title>Editar imovel</title>
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
		
			<h3 class="text-center">Editar imovel</h3><br>
  
			<form action="updateimovel.php" id="cad" name="cad" method="POST">
	
	<div class="col-md-5">
		<label>Nome do Proprietário(a):</label>
		<input type="text" name="nm_locador" id="nm_locador" required="required" class="form-control input-md" value="<?php echo $data['nm_locador'] ?>">
		</div>

		<div class="col-md-2">
		<label>CPF:</label>
		<input type="text" name="cpf_locador" id="cpf_locador" required="required" class="form-control input-md" value="<?php echo $data['cpf_locador'] ?>">
	</div>
	
		
	<div class="col-md-2">
		<label>Tipo de serviço:</label>
		<input type="text" name="tp_servico" id="tp_servico" required="required" class="form-control input-md" value="<?php echo $data['tp_servico'] ?>">
	</div>

	<div class="col-md-3">
		<label>Tipo de imóvel:</label>
		<input type="text" name="imoveltp" id="imoveltp" required="required" class="form-control input-md" value="<?php echo $data['imoveltp'] ?>">
	</div>

	
	<div class="col-md-2">
		<label>Valor:</label>
		<input type="text" name="valor" id="valor" required="required" class="form-control input-md" value="<?php echo $data['valor'] ?>">
	</div>
	
	<div class="col-md-3">
		<label>Tipo de documentação:</label>
		<input type="text" name="tp_doc_imovel" id="tp_doc_imovel" required="required" class="form-control input-md" value="<?php echo $data['tp_doc_imovel'] ?>">
	</div>
	
	<div class="col-md-5">
		<label>Endereço do imóvel:</label>
		<input type="text" name="end_imovel" id="end_imovel" required="required" class="form-control input-md" value="<?php echo $data['end_imovel'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Número:</label>
		<input type="text" name="num_imovel" id="num_imovel" required="required" class="form-control input-md" value="<?php echo $data['num_imovel'] ?>">
	</div>
		
	<div class="col-md-5">
		<label>Bairro:</label>
		<input type="text" name="bairro_imovel" id="bairro_imovel" required="required" class="form-control input-md" value="<?php echo $data['bairro_imovel'] ?>">
	</div>
	
	<div class="col-md-3">
		<label>Cidade:</label>
		<input type="text" name="cid_imovel" id="cid_imovel" required="required" class="form-control input-md" value="<?php echo $data['cid_imovel'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Metragem total:</label>
		<input type="text" name="metragem" id="metragem" required="required" class="form-control input-md" value="<?php echo $data['metragem'] ?>">
	</div>

	<div class="col-md-2">
		<label>Quartos:</label>
		<input type="text" name="quartos" id="quartos" required="required" class="form-control input-md" value="<?php echo $data['quartos'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Salas:</label>
		<input type="text" name="salas" id="salas" required="required" class="form-control input-md" value="<?php echo $data['salas'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Cozinhas:</label>
		<input type="text" name="cozinhas" id="cozinhas" required="required" class="form-control input-md" value="<?php echo $data['cozinhas'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Banheiros:</label>
		<input type="text" name="banheiros" id="banheiros" required="required" class="form-control input-md" value="<?php echo $data['banheiros'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Garagens:</label>
		<input type="text" name="garagens" id="garagens" required="required" class="form-control input-md" value="<?php echo $data['garagens'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Área de serviços:</label>
		<input type="text" name="areaservico" id="areaservico" required="required" class="form-control input-md" value="<?php echo $data['areaservico'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Varanda:</label>
		<input type="text" name="varanda" id="varanda" required="required" class="form-control input-md" value="<?php echo $data['varanda'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Terraço:</label>
		<input type="text" name="terraco" id="terraco" required="required" class="form-control input-md" value="<?php echo $data['terraco'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Suites:</label>
		<input type="text" name="suites" id="suites" required="required" class="form-control input-md" value="<?php echo $data['suites'] ?>">
	</div>
	
	<div class="col-md-2">
		<label>Área de lazeres:</label>
		<input type="text" name="arealazer" id="arealazer" required="required" class="form-control input-md" value="<?php echo $data['arealazer'] ?>">
		<br><br>
	</div>	
		
	<div class="col-md-6">
		<label>Outras dependências:</label>
		<input type="text" name="outrasdep" id="outrasdep" required="required" class="form-control input-md" value="<?php echo $data['outrasdep'] ?>"><br><br>
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
		<label class="control-label">imovel</label>
		</div>
	
		<div class="col-md-6">
		<br>__________________________________<br>
		<label class="control-label">Cônjuge do imovel</label>
		</div>
		</center>
		
		<br><br>
	<br><br>


<center>
<input type="hidden" name="id_imovel" value="<?php echo $data['id_imovel']?>" />
<button class="btn btn-primary" type="submit">Salvar alterações</button>
<button class="btn btn-danger" type="button" onclick="window.print();">Imprimir</button>
<button class="btn btn-primary" type="button" value="Sair" onclick="window.location='consultarimovel.php'">Voltar</button>
<br><br>
<br><br>
</center>

</form>

</body>
</html>
