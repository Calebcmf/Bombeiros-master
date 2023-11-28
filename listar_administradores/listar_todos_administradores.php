<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar todos Administradores</title>
    <style>
        .voltar {
            width: 120px;
            height: 45px;
            border-radius: 25px;
            font-size: 20px;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            align-content: center;
            justify-items: center;
            justify-content: center;
            transition: 0.5s;
            text-decoration: none;
            color: black;
        }
        table{
            margin-left:50px;
        }
        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid black;
        }

        tr:hover {
            background-color: rgba(72, 167, 255, 0.664);
        }

        th {
            background-color: rgb(35, 108, 177);
            color: white;
        }
    </style>
</head>

<body>
    <table>
        <a href="listar_administradores.html" class="voltar">Voltar</a> <br><br>

        <thead>
            <tr>
                <th> Código </th>
                <th> Nome </th>
                <th> Email </th>
                <th> Senha</th>
                <th> Telefone </th>
                <th colspan="5"> Ações </th>
            </tr>
        </thead>

</body>

</html>


<tbody>
    <?php
    include_once("../listar_usuarios3.php");
 if(!empty($lista_admin)){
     foreach($lista_admin as $linha){
         echo ' <tr>
                 <td> '.$linha['id_admin'] .' </td>
                 <td> '.$linha['nome'] .' </td>
                 <td> '.$linha['email'] .' </td>
                 <td> '.$linha['senha'] .' </td>
                 <td> '.$linha['telefone'] .' </td>
                 <td> <a href="../excluir_administradores/excluiradministradores.php?id='.$linha['id_admin'].'"> Excluir <a> </td>
                 <td> <a href="../alterar_administradores/alterar_administradores1.html?id='.$linha['id_admin'].'"> Alterar <a> </td>
             </tr>
         ';
     }
   }
   ?>
</tbody>
</table>