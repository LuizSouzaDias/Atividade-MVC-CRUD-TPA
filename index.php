<?php
header('Content-Type: text/html; charset=utf-8');     //aceitar acento php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto CRUD</title>

    <!-- icone na janela do navegador-->
    <link rel="shortcut icon" href="resources/favicon.png" type="image/x-icon">

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- icones do botstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- google fonts OpenSans -->
    <link href="fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>

    <!-- style css -->

    <style type="text/css">
        body{
            margin: 20px;
            background-color: whitesmoke;
        }

        *{
            font-family: 'Open Sans', sans-serif;
        }

        h2{
            font-family: 'Open Sans', sans-serif;
        }

        .thead{
            background-color: #f7f7f7;
        }
    </style>

</head>
<body>
    
    <div class="container">
        <h2 class="text-center">Lista de Clientes <i class="bi bi-people-fill"></i></h2>

        <h5 class="text-end">
            <a href="view/page_register.php" class="btn btn-primary">
                <i class="bi bi-person-plus-fill"></i>
            </a>
        </h5>
        
        <div class="table responsive">
            <table class="table table-hover">

                <thead class="thead">                          <!-- thead = tag usada para titulo das tabelas, nesse caso a tag <th> tbm tem que ser usada-->
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>E-MAIL</th>
                        <th>CPF</th>
                        <th>DT DE NASCIMENTO</th>
                        <th>ENDERECO</th>
                        <th>TELEFONE</th>
                        <th colspan="3" >A????ES</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>                               <!-- tbody = info das tabelas, nesse caso o td ?? usado    ( tag tr nao muda, sempre representa a linha )-->
                        <td>Luiz Henrique</td>
                        <td>luizhenrique@gmail.com</td>
                        <td>02548562654</td>
                        <td>13/06/2005</td>
                        <td>Rua Obi n??mero 237 BETAS</td>
                        <td>31 99658-9852</td>
                        <td>
                            <form action="" method="POST">
                                <button class="btn btn-warning btn-xs">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="POST" onclick="return confirm('Voc?? tem certeza que quer excluir?');">
                                <button class="btn btn-danger btn-xs">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>



<!-- Jquery e JqueryMask    -->

</body>
</html>