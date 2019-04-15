<!DOCTYPE html>
<html>
<head>

  <title>MASTER INSPEÇÃO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  

<style>
body {
    margin: 0;
    font-family: 'Lato', sans-serif;
	background-color: white;
}

.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #DCDCDC;
    background-color: #DCDCDC;
    overflow-y: hidden;
    transition: 0.5s;
	
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 55px;
    color: #3645da;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: white;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

header{
	background: #3645da;
    color: white;
    padding: 10px;
    margin: 10px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
</style>

<body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="login.php">Login</a>
  </div>
</div>

<header>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Iniciar</span>
</header>
 <div class="form-group">
 <img src="img/logo.png" width="100%" class="img-responsive"/>
</div>
<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>
       <center>
  <h3>Um jeito simples de trabalhar.</h3>
  </center>
</body>

</html>
