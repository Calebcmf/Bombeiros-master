<?php
include("../conecta.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

if (isset($_POST["listar1"])) {
  $comando = $pdo->prepare("SELECT * FROM cadastro_bombeiro WHERE nome = :nome");
  $comando->bindParam(':nome', $nome);
  $resultado = $comando->execute();

  $data = ""; // Initialize an empty string to store the table rows

  while ($linhas = $comando->fetch()) {
      $a = $linhas["id_bombeiro"];
      $b = $linhas["nome"];
      $c = $linhas["email"];
      $d = $linhas["telefone"];

    // Construct a row for each result
      $data .= '<tr>';
      $data .= '<td>' . $a . '</td>';
      $data .= '<td>' . $b . '</td>';
      $data .= '<td>' . $c . '</td>';
      $data .= '<td>' . $d . '</td>';
      $data .= '</tr>';
  }

  echo $data; // Return all constructed rows
}

if (isset($_POST["listar2"])) {
  $comando = $pdo->prepare("SELECT * FROM cadastro_bombeiro WHERE email = :email");
  $comando->bindParam(':email', $email);
  $resultado = $comando->execute();

  $data = ""; // Initialize an empty string to store the table rows

  while ($linhas = $comando->fetch()) {
    $a = $linhas["id_bombeiro"];
    $b = $linhas["nome"];
    $c = $linhas["email"];
    $d = $linhas["telefone"];

    // Construct a row for each result
    $data .= '<tr>';
    $data .= '<td>' . $a . '</td>';
    $data .= '<td>' . $b . '</td>';
    $data .= '<td>' . $c . '</td>';
    $data .= '<td>' . $d . '</td>';
    $data .= '</tr>';
  }

  echo $data; // Return all constructed rows
}

if (isset($_POST["listar3"])){
  $comando = $pdo->prepare("SELECT * FROM cadastro_bombeiro WHERE telefone = :telefone");
  $comando->bindParam(':telefone', $telefone);
  $resultado = $comando->execute();

  $data = ""; // Initialize an empty string to store the table rows

  while ($linhas = $comando->fetch()) {
    $a = $linhas["id_bombeiro"];
    $b = $linhas["nome"];
    $c = $linhas["email"];
    $d = $linhas["telefone"];

    // Construct a row for each result
    $data .= '<tr>';
    $data .= '<td>' . $a . '</td>';
    $data .= '<td>' . $b . '</td>';
    $data .= '<td>' . $c . '</td>';
    $data .= '<td>' . $d . '</td>';
    $data .= '</tr>';
  }
}
  echo $data; 

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
              </tr>';
      }
    }
?>