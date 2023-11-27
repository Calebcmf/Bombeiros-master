<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Todos Pacientes</title>
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
    <a href="listar_paciente.html" class="voltar">Voltar</a> <br><br>
    <table>
        <thead>
            <tr>
                <th> Código </th>
                <th> Nome </th>
                <th> CPF </th>
                <th> Idade</th>
                <th> Fone </th>
                <th colspan="5"> Ações </th>
            </tr>
        </thead>

</body>

</html>

<tbody>
    <?php
    include_once("../listar_usuarios2.php");
 if(!empty($lista_paciente)){
     foreach($lista_paciente as $linha){
         echo ' <tr>
                 <td> '.$linha['id_paciente'] .' </td>
                 <td> '.$linha['nome_paciente'] .' </td>
                 <td> '.$linha['cpf_paciente'] .' </td>
                 <td> '.$linha['idade_paciente'] .' </td>
                 <td> '.$linha['fone_paciente'] .' </td>
                 <td> <a href="excluir_usuario.php?id='.$linha['id_paciente'].'"> Excluir <a> </td>
                 <td> <a href="alterar_usuario.php?id='.$linha['id_paciente'].'"> Alterar <a> </td>
             </tr>
         ';
     }
   }
   ?>
</tbody>
</table>