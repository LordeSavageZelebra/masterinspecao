<?php require_once 'conexao.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Consulta locatarios</title>
	<meta charset="utf-8">
		<!--Link de acesso ao Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #F8F8FF;">

	<div class="container">

		<h1 class="text-center">Locatário</h1><br><br>

	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="row">Nome do locatario</th>
				<th scope="row">Telefone do Locatário</th>
				<th scope="row">Bairro do locatario</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM locatario WHERE ativo = 1 ORDER BY nm_locatario";
			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['nm_locatario']."</td>
						<td>".$row['tel_locatario']."</td>
						<td>".$row['bairro_locatario']."</td>
						<td>
							<a href='editarlocatario.php?id=".$row['id_locatario']."'><button type='button'>Editar</button></a>
							<a href='removerlocatario.php?id=".$row['id_locatario']."'><button type='button'>Remover</button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			}
			?>
		</tbody>
	</table>
	</div>

<center>
<button type="button" class="btn btn-danger" id="btn" onclick="window.print();">Imprimir</button>
<button class="btn btn-primary" type="button" value="Sair" onclick="window.location='inicio.php'">Sair</button>
<br><br>
<br><br>
</center>

</body>
</html>