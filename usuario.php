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

		<h3 class="text-center">Cadastro de usuário</h3><br>
	
	<form action="cadusuario.php" id="cad" name="cad" method="POST">
	
		<div class="col-xs-4">
			<label>Nome do usuário:</label>
            <input type="text" id="nm_usuario" name="nm_usuario" class="form-control"/>
        </div>
		
		<div class="col-xs-4">
			<label>Login do novo usário:</label>
            <input type="text" id="nm_login" name="nm_login" class="form-control"/>
        </div>
		
		<div class="col-xs-4">
			<label>Senha do novo usuário:</label>
            <input type="password" id="senha_usuario" name="senha_usuario" class="form-control"/>
        </div>
		
		</div><br>
		
		<center>
		<br><br>
		<button type="submit" for="cad" name="inserir" value="inserir" class="btn btn-primary">Criar</button>
		<button type="button" class="btn btn-danger" type="alterar" value="alterar" onclick="window.location='alterausuario.php'">Alterar</button>
		<button type="button" name="excluir" value="excluir" class="btn btn-primary" onclick="window.location='excluiusuario.php'">Excluir</button>
		<button type="button" class="btn btn-danger" value="Sair" onclick="window.location='inicio.php'">Sair</button>
		</center>
		
	</form>
	
	</body>
	</html>	