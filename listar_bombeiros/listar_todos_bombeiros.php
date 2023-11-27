<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar todos Bombeiros</title>
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
    <a href="listar_bombeiros2.php" class="voltar">Voltar</a> <br><br>
    <table>
        <thead>
            <tr>
                <th> Código </th>
                <th> Nome </th>
                <th> E-mail </th>
                <th> Telefone</th>
                <th> Perfil </th>
                <th colspan="5"> Ações </th>
            </tr>
        </thead>
</body>

</html>

<tbody>
    <?php
    include_once("../listar_usuarios.php");
 if(!empty($lista_bombeiros)){
     foreach($lista_bombeiros as $linha){
         echo ' <tr>
                 <td> '.$linha['id_bombeiro'] .' </td>
                 <td> '.$linha['nome'] .' </td>
                 <td> '.$linha['email'] .' </td>
                 <td> '.$linha['telefone'] .' </td>
                 <td> <a href="../excluir_bombeiros/excluirbombeiros.php?id='.$linha['id_bombeiro'].'"> Excluir <a> </td>
                 <td> <a href="../alterar_bombeiros/alterar_bombeiros1.php?id='.$linha['id_bombeiro'].'"> Alterar <a> </td>
             </tr>
         ';
     }
   }
   ?>
</tbody>
</table>