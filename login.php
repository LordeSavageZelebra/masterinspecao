<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        
		<link href="css/login.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/login.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>        
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>

<body style="background-image: url(img/fundo.jpg" height="100%">
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wrap">
               <center>
			   <h1>Master Inspeção Imobiliária</h1>
               </center> 
				<form class="login" action="vlogin.php" method="POST">
				
                <input type="text" name="usuario" id="usuario" required="required" placeholder="Usuário">
                <input type="password" name="senha" id="senha" required="required" placeholder="Senha" />
                
				<input type="submit" value="Entrar" />
								
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>