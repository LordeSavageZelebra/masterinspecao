<html>
<head>
    <title>Relatório de Imóveis</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

        <center>
            <br><button class="btn btn-primary" type="button" value="Sair" onclick="window.close()">Sair</button>
            <h2>Imóveis</h2>
        </center>

       
       <table class="table table-striped">
            <thead>
                <tr class="bg-primary">
                <th scope="row">Id</td>
                <th scope="row">Nome do Locador</td>
                <th scope="row">Endereço</td>
                <th scope="row">Número</td>
                <th scope="row">Bairro</td>
                <th scope="row">Cidade</td>
                <th scope="row">Telefone</td>
                </tr>
            </thead>
            <tbody>
        
                <?php

                $servidor = "mysql.hostinger.com.br";
$banco = "u111536854_inspe";
$usuario = "u111536854_evald";
$senha = "Amazonpc10!";

                // Cria a conexão

                $con = mysqli_connect($servidor, $usuario, $senha, $banco);

                // Faz uma verificação da conexão.

                if (!$con) {

                     die("Connection failed: " . mysqli_connect_error());

                    }

                    //Carrega os dados
                    $sql = "SELECT * FROM locador WHERE ativo = 1 ORDER BY nm_locador";
                        $consulta = mysqli_query($con, $sql);

                if( !$consulta )
                {
                    echo "Erro ao realizar consulta. Tente outra vez.";
                    exit;
                }
                    //se tudo deu certo, exibe os dados
                    while( $dados = mysqli_fetch_assoc($consulta) )
                        {
                            echo 
                                "<tr>
                                <td>" .$dados['id_locador']. "</td>
                                <td>" .$dados['nm_locador']. "</td>
                                <td>" .$dados['end_locador']. "</td>
                                <td>" .$dados['num_locador']. "</td>
                                <td>" .$dados['bairro_locador']. "</td>
                                <td>" .$dados['cid_locador']. "</td>
                                <td>" .$dados['tel_locador']. "</td>
                                </tr>";
            }
        ?>
        </table>
    </body>
</html>