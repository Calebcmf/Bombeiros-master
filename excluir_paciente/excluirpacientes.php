<?php
include("../conecta.php");

$codigo = $_GET["id"];

// Desabilitar temporariamente a verificação de chave estrangeira
$pdo->exec("SET foreign_key_checks = 0");

// Excluir a linha na tabela principal
$comando = $pdo->prepare("DELETE FROM dados_paciente WHERE id_paciente = :codigo");
$comando->bindParam(':codigo', $codigo);
$resultado = $comando->execute();

// Habilitar novamente a verificação de chave estrangeira
$pdo->exec("SET foreign_key_checks = 1");

if ($resultado) {
    header("Location:../adm/adm_principal.html");
} else {
    echo "Erro ao excluir o bombeiro.";
}
?>
