<?php
include("../conecta.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

if (isset($_POST["deletar1"])) {
  $comando = $pdo->prepare("DELETE from cadastro_admin WHERE nome = ':nome';");
  $comando->bindParam(':nome', $nome);
  $resultado = $comando->execute();
  header("Location:../adm/adm_principal.html");
}

if (isset($_POST["deletar2"])) {
  $comando = $pdo->prepare("DELETE from cadastro_admin WHERE email = ':email';");
  $comando->bindParam(':email', $email);
  $resultado = $comando->execute();
  header("Location:../adm/adm_principal.html");
}

if (isset($_POST["deletar3"])) {
  $comando = $pdo->prepare("DELETE from cadastro_admin WHERE email = ':email';");
  $comando->bindParam(':email', $email);
  $resultado = $comando->execute();
  header("Location:../adm/adm_principal.html");
}
?>