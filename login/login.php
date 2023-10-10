<?php
include("../conecta.php");

$email = $_POST['email'];
$senha = $_POST['senha'];
$password = md5($senha);

$comando = $pdo->prepare("SELECT * FROM cadastro_bombeiro WHERE email = '$email' and senha = '$password'");
$resultado = $comando->execute();
$n = $comando->rowCount();
if ($n > 0) {
    // Email e senha corretos
    header("Location: ../pagina_principal/pagina_principal.php"); // Envia uma resposta de sucesso para o AJAX
} else {
    // Senha ou email incorretos
    header("Location: incorreto/incorreto.html"); // Envia uma resposta de erro para o AJAX
}
?>