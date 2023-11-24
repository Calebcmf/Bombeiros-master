<table>
            <thead>
                <tr>
                    <th> Código </th>
                    <th> Nome </th>
                    <th> Cpf </th>
                    <th> Idade</th>
                    <th> Fone </th>
                    <th colspan="5"> Ações </th>
                </tr>
            </thead>
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