<?php
include("../conecta.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$password = md5($senha);

if (isset($_POST["alterar1"])) {
  $comando = $pdo->prepare("UPDATE cadastro_admin SET email='$email', senha='$password', telefone='$telefone' WHERE nome='$nome'");
  $resultado = $comando->execute();
  header("Location:../adm/adm_principal.html");
}
if (isset($_POST["alterar2"])) {
  $comando = $pdo->prepare("UPDATE cadastro_admin SET nome='$nome', senha='$password', telefone='$telefone' WHERE email='$email'");
  $resultado = $comando->execute();
  header("Location:../adm/adm_principal.html");
}
if (isset($_POST["alterar3"])) {
  $comando = $pdo->prepare("UPDATE cadastro_admin SET email='$email', senha='$password', nome='$nome' WHERE telefone='$telefone'");
  $resultado = $comando->execute();
  header("Location:../adm/adm_principal.html");
}
?>
