<?php
include("../conecta.php");

$codigo = $_GET["id"];

$comando = $pdo->prepare("DELETE from cadastro_bombeiro WHERE id_bombeiro = :codigo");
$comando->bindParam(':codigo', $codigo);
$resultado = $comando->execute();

if ($resultado) {
    header("Location:../adm/adm_principal.html");
} else {
    echo "Erro ao excluir o bombeiro.";
}
?>
