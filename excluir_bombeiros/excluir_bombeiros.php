<?php
include("../conecta.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

if (isset($_POST["deletar1"])) {
  $comando = $pdo->prepare("DELETE from cadastro_bombeiro WHERE nome = ':nome';");
  $comando->bindParam(':nome', $nome);
  $resultado = $comando->execute();
  header("Location:../listar_bombeiros/listar_todos_bombeiros.php");
}

if (isset($_POST["deletar2"])) {
  $comando = $pdo->prepare("DELETE from cadastro_bombeiro WHERE email = ':email';");
  $comando->bindParam(':email', $email);
  $resultado = $comando->execute();
  header("Location:../listar_bombeiros/listar_todos_bombeiros.php");
}

if (isset($_POST["deletar3"])) {
  $comando = $pdo->prepare("DELETE from cadastro_bombeiro WHERE email = ':email';");
  $comando->bindParam(':email', $email);
  $resultado = $comando->execute();
  header("Location:../listar_bombeiros/listar_todos_bombeiros.php");
}
?>