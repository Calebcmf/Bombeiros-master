<?php
include("../conecta.php");

$codigo = $_GET["id"];

$comando = $pdo->prepare("DELETE from cadastro_admin WHERE id_admin = :codigo");
$comando->bindParam(':codigo', $codigo);
$resultado = $comando->execute();

if ($resultado) {
    header("Location:../listar_administradores/listar_todos_administradores.php");
} else {
    echo "Erro ao excluir o bombeiro.";
}
?>
