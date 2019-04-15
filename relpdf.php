<?php

error_reporting();

include ('mpdf/mpdf.php');

$servidor = "localhost";
$banco = "imobiliaria";
$usuario = "root";
$senha = "";

// Cria a conexão

$con = mysqli_connect($servidor, $usuario, $senha, $banco);

// Faz uma verificação da conexão

if (!$con) {

    die("Connection failed: " . mysqli_connect_error());

}

$sql = $con->query("SELECT* FROM locatario ORDER BY nm_locatario");

if($sql){ // If $sql is True
    while($exibe = $sql->fetch_assoc())
    {
                  echo "<br />" . $value;
        }

    }



$arquivo = "Fiador: $nome.pdf";

$mpdf= new mPDF();
$mpdf -> WriteHtml ($value);
$mpdf -> Output($arquivo, 'I');

?>

