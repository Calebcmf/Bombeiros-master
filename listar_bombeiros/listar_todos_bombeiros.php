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
                 <td> <a href="excluir_usuario.php?id='.$linha['id_bombeiro'].'"> Excluir <a> </td>
                 <td> <a href="alterar_usuario.php?id='.$linha['id_bombeiro'].'"> Alterar <a> </td>
             </tr>
         ';
     }
   }
   ?>
</tbody>
</table>