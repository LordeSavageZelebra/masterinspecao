<html>
    <head>
        <title>Recibo</title>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.1.min.js"></script>
<!-- SCRIPT DE CLONAGEM DE DIVs-->
    <script type="text/javascript">
function duplicarCampos(){
    var clone = document.getElementById('origem').cloneNode(true);
    var destino = document.getElementById('destino');
    destino.appendChild (clone);
    var camposClonados = clone.getElementsByTagName('input, select');
    for(i=0; i<camposClonados.length;i++){
        camposClonados.value = '';
    }
}
function removerCampos(id){
    var node1 = document.getElementById('destino');
    node1.removeChild(node1.childNodes[0]);
}
    </script>

<body style="background-color: #F8F8FF;">
 	
	<div id="origem">
	
		<center>
		<img src="img/logo.png" width="50%" />
		</center>

		<h3 class="text-center">Recibo de Aluguel</h3><br>
		
		<div class="col-md-2">
			<label>Nº do aluguel:</label>
        <select class="form-control">
			<option></option>
			<option>01/12</option>
			<option>02/12</option>
			<option>03/12</option>
			<option>04/12</option>
			<option>05/12</option>
			<option>06/12</option>
			<option>07/12</option>
			<option>08/12</option>
			<option>09/12</option>
			<option>10/12</option>
			<option>11/12</option>
			<option>12/12</option>
		</select>
		</div>
		
		<div class="col-md-2">
			<label>Período de:</label>
            <input type="date" id="" name="" class="form-control"/>
        </div>
		
		<div class="col-md-2">
			<label>até</label>
            <input type="date" id="" name="" class="form-control"/>
        </div>
		
		<div class="col-md-2">
			<label>Recebimento:</label>
            <input type="date" id="" name="" class="form-control"/>
        </div>
	
		<div class="col-md-2">
			<label>Pagamento:</label>
            <select class="form-control">
			<option></option>
			<option>A vencer</option>
			<option>Vencido</option>
			</select>
		</div>
	
		<div class="col-md-2">
			<label>Valor do aluguel:</label>
            <input type="text" id="nascfiador" name="nascfiador" class="form-control">
        </div>
	
	    <div class="col-md-7">
			<label>Locador:</label>
            <input type="text" id="nascfiador" name="nascfiador" class="form-control">
        </div>
		
		<div class="col-md-3">
			<label>CPF:</label>
            <input type="text" id="nascfiador" name="nascfiador" class="form-control">
        </div>
		
		<div class="col-md-2">
			<label>Condomínio:</label>
            <input type="text" id="nascfiador" name="nascfiador" class="form-control">
        </div>

		<div class="col-md-7">
			<label>Locatário:</label>
            <input type="text" id="nascfiador" name="nascfiador" class="form-control">
        </div>
		
		<div class="col-md-3">
			<label>CPF:</label>
            <input type="text" id="nascfiador" name="nascfiador" class="form-control">
        </div>
		
		<div class="col-md-2">
			<label>Acréscimos:</label>
            <input type="text" id="nascfiador" name="nascfiador" class="form-control">
        </div>
		
		<div class="col-md-10">
			<label>Endereço do imóvel:</label>
            <input type="text" id="nascfiador" name="nascfiador" class="form-control">
        </div>
		
		<div class="col-md-2">
			<label>IPTU:</label>
            <input type="text" id="nascfiador" name="nascfiador" class="form-control">
        </div><br>

		<div class="col-md-10">
			<label>Valor por extenso:</label>
            <input type="text" id="nascfiador" name="nascfiador" class="form-control">
        </div>
		
		<div class="col-md-2">
			<label>Total:</label>
            <input type="text" id="nascfiador" name="nascfiador" class="form-control">
        </div>
		
		<div class="col-md-12">
			<p class="text-center"><br><br><br>_____________________________________<br>Locador</p>			
		</div>
		</div>
		<div id="destino"><br></div>
		
		<center>
		<button class="btn btn-primary" id="btn" onclick="window.print();">Imprimir</button>
		<button class="btn btn-danger" name="sair" onclick="window.location='inicio.php'">Sair</button>
		<button class="btn btn-primary" onclick="duplicarCampos();">Adicionar</button>
		<button class="btn btn-danger" onclick="removerCampos(this);">Remover</button>
		<center>

	</body>
	</html>	