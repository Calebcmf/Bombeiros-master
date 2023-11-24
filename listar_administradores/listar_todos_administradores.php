<table>
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
                 <td> <a href="excluir_usuario.php?id='.$linha['id_admin'].'"> Excluir <a> </td>
                 <td> <a href="alterar_usuario.php?id='.$linha['id_admin'].'"> Alterar <a> </td>
             </tr>
         ';
     }
   }
   ?>
</tbody>
</table>