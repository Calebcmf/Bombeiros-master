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
    echo "success"; // Envia uma resposta de sucesso para o AJAX
} else {
    // Senha ou email incorretos
    echo "error"; // Envia uma resposta de erro para o AJAX
}
?>