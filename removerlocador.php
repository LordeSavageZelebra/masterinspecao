<?php 

require_once 'conexao.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM locador WHERE id_locador = {$id}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();

	$connect->close();
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
		<!--Link de acesso ao Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #F8F8FF;">

<h1 class="text-center">Você realmente deseja remover este cliente ?</h1><br><br>
<form action="removelocador.php" method="post">

	<input type="hidden" name="id" value="<?php echo $data['id_locador'] ?>" />
	<center>
		<button class="btn btn-danger" type="submit">Remover</button>
		<button class="btn btn-primary" type="button" value="Sair" onclick="window.location='consultarlocador.php'">Voltar</button>
	</center>
	
</form>

</body>
</html>

<?php
}
?>