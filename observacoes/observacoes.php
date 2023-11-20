<?php
session_start();
include("../conecta.php");
$id = $_SESSION["id_paciente"];

if (isset($_POST['observacao'])) {
    $observacao = $_POST['observacao'];
    
    $comando = $pdo->prepare("INSERT INTO observacoes_importantes(observacoes, id_paciente) VALUES('$observacao', $id)");
	$resultado = $comando->execute();
}
?>