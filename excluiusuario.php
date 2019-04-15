<html>
    <head>
        <title>Cadastro</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>	
<body style="background-color: #F8F8FF;">

<div>

		<center>
		<img src="img/logo.png" width="50%" />
		</center>

		<h3 class="text-center">Exclusão de usuário</h3><br>
	
	<form action="excluirusuario.php" id="cad" name="cad" method="POST">
	
		<div class="col-xs-12">
			<label>Nome do usuário:</label>
            <input type="text" id="nm_usuario" name="nm_usuario" class="form-control"/>
        </div>
			
		</div><br>
		
		<center>
		<br><br>
		<button type="submit" name="excluir" value="excluir" class="btn btn-primary">Excluir</button>
		<button type="button" class="btn btn-danger" value="Sair" onclick="window.location='inicio.php'">Sair</button>
		</center>
		
	</form>
	
	</body>
	</html>	