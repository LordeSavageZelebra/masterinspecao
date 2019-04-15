    function printDiv() 
	{
        //pega o Html da DIV
     var divElements = document.getElementById('print').innerHTML;
        //pega o HTML de toda tag Body
        var oldPage = document.body.innerHTML;

        //Alterna o body
        document.body.innerHTML =
          "<html><head>  <title></title> </head> <body>  " + divElements + "</body>";

        //Imprime o body atual
        window.print();

        //Retorna o conteudo original da página.
        document.body.innerHTML = oldPage;

    }