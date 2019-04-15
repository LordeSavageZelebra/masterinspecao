<html>
<head>
<title>Inspeção</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.imageuploader.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
	
	<link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
	
    <script src="js/jquery.wallform.js"></script>

	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>

#preview
{
color:#cc0000;
font-size:12px
}
.imgList 
{
max-height:150px;
margin-left:5px;
border:1px solid #dedede;
padding:4px;	
float:left;	
}

</style>

<!--Script de duplicar Divs -->

<script>

function duplicarCampos(){

    var clone = document.getElementById('origem').cloneNode(true);
    var inputsClone = clone.getElementsByTagName('input', 'select'); // todos os inputs clonados

    for (var i = 0; i < inputsClone.length; i++) {
       inputsClone[i].value = '';
    }
    
    destino.appendChild(clone); // todos inputs clonados "limpos"
}

function duplicarCamposJQuery(){
    var content = $('#origem').html();
    $('#origem').append(content);
}

function removerCampos(id){
    var node1 = document.getElementById('destino');
    node1.removeChild(node1.childNodes[0]);
}

function adicionarItem()
{
    $(".origem").each(function( index ) 
    {
        if($(this).css('display') == 'none')
        {
            $(this).show(100);
            return false;
        }
    });
}

</script>

<body>

<!-- Inicio -->
    <div class="container">
	
    <center>
	<img src="img/logo.png"  width="50%">
    </center>

	<div class="text-center">
		<h1 class="">Inspeção Imobiliária</h1>
	</div><br>
	
        <div class="col-md-4">
		<label>Data:</label>
            <input type="date" class="form-control" placeholder="Small">
        </div>
		
        <div class="col-md-4">
		<label>Tipo de inspeção:</label>
            <select class="form-control">
                <option class="">Selecione a opção:</option>
                <option class="">Entrada</option>
				<option class="">Rotina</option>
                <option class="">Saída</option>
            </select>
        </div>
		
        <div class="col-md-4">
		<label>Tipo de imóvel:</label>
            <select class="form-control">
                <option class="">Selecione a opção:</option>
                <option class="">Apartamento</option>
                <option class="">Casa</option>
				<option class="">Chácara</option>
                <option class="">Imóvel comercial</option>
            </select>
        </div>
    </div><br><!-- Fim -->
    
<!-- -->
    <div class="container"><!-- Inicio -->
		
		
        <div class="col-md-6">
		<label>Locador:</label>
            <input type="text" class="form-control input-md" placeholder="Locador"><br>
        </div>
		
		
        <div class="col-md-6">
		<label>CPF Locador:</label>
            <input type="text" class="form-control input-md" placeholder="CPF Locador"><br>
        </div>
		
		
		<div class="col-md-6">
		<label>Locatário:</label>
            <input type="text" class="form-control input-md" placeholder="Locatário"><br>
        </div>
		
		
        <div class="col-md-6">
		<label>CPF Locatário:</label>
            <input type="text" class="form-control input-md" placeholder="CPF Locatário"><br>
        </div>
		
		
        <div class="col-md-6">
		<label>End. do imóvel:</label>
            <input type="text" class="form-control input-md" placeholder="End. Imóvel"><br>
        </div>
		
		
        <div class="col-md-6">
		<label>Imobiliária:</label>
            <input type="text" class="form-control input-md" placeholder="Imobiliária"><br>
        </div>

    </div><!-- Fim -->


    <?php
        for($i = 0; $i < 20; $i++)
        {
    ?>
    <!-- Inicio origem -->
    
	<div id="origem" class="origem" style="<?php echo ($i > 0)? 'display: none;':"" ?>">
	<div class="container">
    <div class="col-md-12">
        <select class="form-control">
            <option value="" class="">Selecione o comodo:</option>
            <option value="Área de serviço" class="">Área de serviço</option>
            <option value="Área de churrasco" class="">Área de churrasco</option>
            <option value="Área de lazer" class="">Área de lazer</option>
            <option value="Banheiro" class="">Banheiro</option>
            <option value="Copa" class="">Copa</option>
            <option value="Cozinha" class="">Cozinha</option>
            <option value="Cozinha" class="">Entrada da casa</option>
            <option value="Garagem" class="">Garagem</option>
            <option value="Quarto" class="">Quarto</option>
            <option value="Quarto suíte" class="">Quarto suíte</option>
            <option value="Sala" class="">Sala</option>
            <option value="Sala de estar" class="">Sala de estar</option>
            <option value="Sala de jantar" class="">Sala de jantar</option>
            <option value="Sala conjulgada" class="">Sala conjulgada</option>
            <option value="Terraço" class="">Terraço</option>
            <option value="Outros" class="">Outros</option>
        </select><br>
    </div>
<div id="inicio">	

    <div class="col-md-12">
    <textarea class="form-control form-group" rows="3">Itens Avaliados:</textarea>
    </div>

    <div class="col-md-12">
    <textarea class="form-control form-group" rows="3">Avarias:</textarea>
    </div>
	
	<div class="col-md-12">
    <textarea class="form-control form-group" rows="3">Opções extras:</textarea>
    </div>
    <br><br>
		
<div>

<div id="upload-model">
    <div class="uploader__box js-uploader__box l-center-box" style="width: 100% !important; margin: 0 !important;;">
      <form action="your/nonjs/fallback/" method="POST">
          <div class="uploader__contents">
              <label class="button button--secondary" for="fileinput">Select Files</label>
              <input id="fileinput" class="uploader__file-input" type="file" multiple value="Select Files">
          </div>
          <input class="button button--big-bottom" type="submit" value="Upload Selected Files">
      </form>
    </div>
</div>

</div>

</div>

</div>
</div>
<div id="destino"></div>
<div id=""></div>
<!-- fim origem -->
    <?php
        }
    ?>


<div id="destino" ></div>



<h2 class="text-center">Declaração</h2><br>
	
	<div class="container">
    <div class="col-md-12">
	<p class="text-justify">
	
	Declaro(amos), para os fins de direito, que o presente Laudo de Vistoria, elaborado nesta data, corresponde à
realidade do estado de conservação e funcionamento em que se encontra o imóvel acima mencionado, cujas
chaves estou(amos) recebendo, estando ciente de que qualquer reclamação com relação a este Laudo,
deverei(emos) fazê-la no prazo máximo de 05(cinco) dias úteis, contados a partir da data da celebração do
contrato locatício. Na hipótese de serem constatadas quaisquer divergências entre o presente laudo e a situação
física do imóvel, o locatário(a) e seus fiadores comprometem-se a assinar o novo Laudo de Vistoria,
impreterivelmente no prazo de 05 (cinco) dias úteis, sobre pena de não fazendo prevalecer o laudo
originalmente elaborado subscrito por ele e seus fiadores.
O(A) LOCATÁRIO(A) se compromete a verificar a voltagem de todos os pontos elétricos existentes no imóvel,
isentando o(a) LOCADOR(A) de toda e qualquer responsabilidade pela ocorrência de danos em aparelhos
eletro-eletrônicos de propriedade do(a) LOCATÁRIO(A) e/ou de terceiros, que vierem a ser causados por
eventuais variações da voltagem (110v/220v).
Obs.: Declaramos ainda, ter vistoriado o lacre do relógio da CEMIG e afirmamos não constar no mesmo
nenhuma violação.
	
	</p><br><br>
	
	<div class="col-md-3">
	________________________<br>
	<label>LOCADOR</label>
	</div>
	
	<div class="col-md-3">
	________________________<br>
	<label>LOCATÁRIO</label>
	</div>
	
	<div class="col-md-3">
	________________________<br>
	<label>TESTEMUNHA</label>
	</div>
	
	<div class="col-md-3">
	________________________<br>
	<label>TESTEMUNHA</label>
	</div>
	
	</div><!-- Fim col-md-12 -->
		
	</div><!-- Fim container--> 


<script src="js/jquery.imageuploader.js"></script>
<script>
(function(){
    var options = {
                submitButtonCopy: 'Upload Selected Files',
                instructionsCopy: '',
                furtherInstructionsCopy: '',
                selectButtonCopy: 'Adicionar foto',
                secondarySelectButtonCopy: 'Adicionar foto',
                dropZone: $(this),
                fileTypeWhiteList: ['jpg', 'png', 'jpeg', 'gif'],
                badFileTypeMessage: 'Sorry, we\'re unable to accept this type of file.',
                ajaxUrl: '/ajax/upload',
                testMode: false
            };

            $('.js-uploader__box').uploader(options);
        }());
        

</script>
</script>

</body><br><br>
	
<p class="text-center">	
<button class="btn btn-primary" type="submit" value="Adicionar" onclick="adicionarItem();"> Adicionar</button>
<button class="btn btn-danger" type="submit" value="Remover" onclick="removerCampos(this);">Remover</button>
<button class="btn btn-primary" type="submit" value="PDF" onclick="window.print()";/>Imprimir</button>
<button class="btn btn-danger" type="submit" value="Sair" onclick="window.location='inicio.php'";/>Sair</button>
</p>

</html>