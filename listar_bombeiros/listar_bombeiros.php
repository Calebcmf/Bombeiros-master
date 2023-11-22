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
      $a = $linhas["nome"];
      $b = $linhas["email"];
      $c = $linhas["telefone"];

      // Construct a row for each result
      $data .= '<tr>';
      $data .= '<td>' . $a . '</td>';
      $data .= '<td>' . $b . '</td>';
      $data .= '<td>' . $c . '</td>';
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
      $a = $linhas["nome"];
      $b = $linhas["email"];
      $c = $linhas["telefone"];

      // Construct a row for each result
      $data .= '<tr>';
      $data .= '<td>' . $a . '</td>';
      $data .= '<td>' . $b . '</td>';
      $data .= '<td>' . $c . '</td>';
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
      $a = $linhas["nome"];
      $b = $linhas["email"];
      $c = $linhas["telefone"];

      // Construct a row for each result
      $data .= '<tr>';
      $data .= '<td>' . $a . '</td>';
      $data .= '<td>' . $b . '</td>';
      $data .= '<td>' . $c . '</td>';
      $data .= '</tr>';
  }
}
  echo $data; 

?>